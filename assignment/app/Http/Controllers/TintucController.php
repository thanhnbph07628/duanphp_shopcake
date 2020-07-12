<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Tintuc;

use App\Http\Requests\SuaTinTuc;

class TintucController extends Controller
{
    public function Tintuc(){
        $dulieutintuc= DB::table('tintuc')->paginate(3);
        $list_cate = DB::table('danhmuctintuc')->get();
        $list_user = DB::table('users')->get();
        return view('backend.tintuc', compact('dulieutintuc','list_cate','list_user'));
    }

    public function Addtintuc(){
        $list_cate = DB::table('danhmuctintuc')->get();
        $list_user = DB::table('users')->get();
        return view('backend.add-tintuc',compact('list_cate','list_user'));
    }

    public function Valiaddtt(Tintuc $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // $data['soluongban']=0;
        $data['views']=0;
        $file = $request->images;
        $url_img=$file->move('upload/anh_tt', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $tintuc = DB::table('tintuc')->insert($data);
        return redirect()->route('tintuc')->with('success', 'Thêm tin tức thành công');
    }

    public function Edittintuc($id){
        $laydulieu = DB::table('tintuc')->find($id);
        $list_cate = DB::table('danhmuctintuc')->get();
        $list_user = DB::table('users')->get();
        return view('backend.edit-tintuc',compact('laydulieu','list_cate','list_user'));
    }

    public function postEdittintuc($id, SuaTinTuc $request){
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        if(isset($file)){
            $url_img=$file->move('upload/anh_tt', $file->getClientOriginalName());
            $data['images'] = $url_img;
        }else{
            $thongtintt = DB::table('tintuc')->find($id);
            $data['images'] = $thongtintt->images;
        }
        
        $tintuc = DB::table('tintuc')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('tintuc')->with('success', 'Sửa tin tức thành công');
    }

    public function Deletetintuc($id){
        DB::table('tintuc')->delete($id);
        return redirect()->route('tintuc')->with('success', 'Xóa tin tức thành công');
    }

    
}
