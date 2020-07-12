<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Danhmucsp;

class DanhmucController extends Controller
{
    public function Danhmuc(){
        $dulieudanhmucsp= DB::table('danhmucsanpham')->paginate(5);
        return view('backend.danhmuc',compact('dulieudanhmucsp'));
    }

    public function Adddanhmuc(){
        return view('backend.add-danhmuc');
    }

    public function Valiadd(Danhmucsp $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $danhmucsp = DB::table('danhmucsanpham')->insert($data);
        return redirect()->route('danhmuc')->with('success', 'Thêm danh mục thành công');
    }

    public function Editdanhmuc($id){
        $laydulieu = DB::table('danhmucsanpham')->find($id);
        return view('backend.edit-danhmuc',compact('laydulieu'));
    }
    public function postEditdanhmuc($id, Danhmucsp $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('danhmucsanpham')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('danhmuc')->with('success', 'Sửa danh mục thành công');
    }

    public function Deletedanhmuc($id){
        DB::table('sanpham')->where('iddm','=',$id)->delete();
        DB::table('danhmucsanpham')->delete($id);
        return redirect()->route('danhmuc')->with('success', 'Xóa danh mục thành công');
    }
}
