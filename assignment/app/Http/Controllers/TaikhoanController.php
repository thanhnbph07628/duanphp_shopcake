<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Taikhoan;

use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

class TaikhoanController extends Controller
{
    public function Taikhoan(){
        $dulieutaikhoan = DB::table('users')->paginate(3);
        return view('backend.taikhoan',compact('dulieutaikhoan'));
    }

    public function change($id)
    {
        $user = DB::table('users')->find($id);
        if($user->vaitro == 0){
            DB::table('users')->where('id','=',$id)->update(['vaitro'=>1]);
        }else{
            DB::table('users')->where('id','=',$id)->update(['vaitro'=>0]);
        }
        return redirect()->back();
    }
    
    public function Addtaikhoan(){
        return view('backend.add-taikhoan');
    }

    public function Valiaddtk(Taikhoan $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['password']=Hash::make($request->input('password'));
        $file = $request->images;
        $url_img=$file->move('upload/user', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $taikhoan = DB::table('users')->insert($data);
        return redirect()->route('taikhoan')->with('success', 'Thêm tài khoản thành công');
    }

    public function Edittaikhoan(){
        return view('backend.edit-taikhoan');
    }

    public function Deletetaikhoan($id){
        $taikhoan = DB::table('users')->delete($id);
        return redirect()->route('taikhoan')->with('success', 'Xóa tài khoản thành công');
    }

    // Đăng nhập, Đăng ký
public function Dangnhap(){
    return view('frontend.page-login');
}

public function postDangnhap(Request $request)
    {
        if(Auth::attempt(["user_name"=>$request->user_name,"password"=>$request->password])){
            return redirect()->route('index');
       }else{
            return redirect()->back()->with('success','Tài khoản hoặc mật khẩu không đúng');
       }
    }

public function Dangxuat(Request $request) {
        Auth::logout();
        return redirect('/dangnhap');
    }

public function Dangky(){
    return view('frontend.page-register');
}

public function Validangky(Taikhoan $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['password']=Hash::make($request->input('password'));
        $file = $request->images;
        $url_img=$file->move('upload/user', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $taikhoan = DB::table('users')->insert($data);
        return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công');
    }

    // Quên mật khẩu
    public function Quenmatkhau(){
        return view('frontend.pages-forget');
    }
    public function postQuenmatkhau(Request $request){
        $user = DB::table('users')->where('email','=',$request->email)->first();
        $users = DB::table('users')->where('email','=',$request->email)->get();
        $email = $request->email;
        if(count($users) == 0){
            return redirect()->back()->with(['error' => 'Không tồn tại email !']);
        }else{
            $verify_code = bcrypt(time().$email);
            $user->verify_code = $verify_code;
            DB::table('users')->where('email','=',$request->email)->update(['verify_code'=>$verify_code]);
            $url = route('changePassword',['verify_code'=>$user->verify_code,'email'=>$email,'username'=>$user->hoten]);
            $data=[
                'route' => $url
            ];
            Mail::send('frontend.email', $data, function($message) use ($email){
                $message->to($email, 'Reset Password')->subject('Lấy lại mật khẩu người dùng Cake Shop');
            });
            return redirect()->back()->with(['success' => ' Gửi email thành công!']);
        }
    }
    public function resetPassword(){
        return view('frontend.reset-password');
    }
}
