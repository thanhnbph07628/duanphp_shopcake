<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Thuonghieu;

use App\Http\Requests\SuaThuongHieu;

use Illuminate\Support\Facades\Log;

class ThuonghieuController extends Controller
{
    public function Thuonghieu(){
        $message = 'Test chuc nang log: ';

        Log::emergency($message); 

        Log::alert($message);

        Log::critical($message);

        Log::error($message);

        Log::warning($message);

        Log::notice($message);

        Log::info($message);

        Log::debug($message);
        
        $dulieuthuonghieu= DB::table('thuonghieu')->paginate(3);
        return view('backend.thuonghieu', compact('dulieuthuonghieu'));
    }

    public function change($id)
    {
        $thuonghieu = DB::table('thuonghieu')->find($id);
        if($thuonghieu->trangthai == 0){
            DB::table('thuonghieu')->where('id','=',$id)->update(['trangthai'=>1]);
        }else{
            DB::table('thuonghieu')->where('id','=',$id)->update(['trangthai'=>0]);
        }
        return redirect()->back();
    }

    public function Addthuonghieu(){
        return view('backend.add-thuonghieu');
    }

    public function Valiaddth(Thuonghieu $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // $data['soluongban']=0;
        // $data['views']=0;
        $file = $request->images;
        $url_img=$file->move('upload/anh_th', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $thuonghieu = DB::table('thuonghieu')->insert($data);
        return redirect()->route('thuonghieu')->with('success', 'Thêm thương hiệu thành công');
    }

    public function Editthuonghieu($id){
        $laydulieu = DB::table('thuonghieu')->find($id);
        return view('backend.edit-thuonghieu',compact('laydulieu'));
    }

    public function postEditthuonghieu($id, SuaThuongHieu $request){
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        if(isset($file)){
            $url_img=$file->move('upload/anh_th', $file->getClientOriginalName());
            $data['images'] = $url_img;
        }else{
            $thongtintt = DB::table('thuonghieu')->find($id);
            $data['images'] = $thongtintt->images;
        }
        
        $thuonghieu = DB::table('thuonghieu')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('thuonghieu')->with('success', 'Sửa thương hiệu thành công');
    }

    public function Deletethuonghieu($id){
        DB::table('thuonghieu')->delete($id);
        return redirect()->route('thuonghieu')->with('success', 'Xóa thương hiệu thành công');
    }

    
}
