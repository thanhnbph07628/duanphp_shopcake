<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Danhmuctin;

class DanhmuctinController extends Controller
{
    public function Danhmuctt(){
        $dulieudanhmuctt= DB::table('danhmuctintuc')->paginate(5);
        return view('backend.danhmuctt',compact('dulieudanhmuctt'));
    }

    public function Adddanhmuctt(){
        return view('backend.add-danhmuctt');
    }

    public function Valiadd(Danhmuctin $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $danhmucsp = DB::table('danhmuctintuc')->insert($data);
        return redirect()->route('danhmuctt')->with('success', 'Thêm danh mục thành công');
    }

    public function Editdanhmuctt($id){
        $laydulieu = DB::table('danhmuctintuc')->find($id);
        return view('backend.edit-danhmuctt',compact('laydulieu'));
    }
    public function postEditdanhmuctt($id, Danhmuctin $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('danhmuctintuc')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('danhmuctt')->with('success', 'Sửa danh mục thành công');
    }

    public function Deletedanhmuctt($id){
        DB::table('tintuc')->where('iddm','=',$id)->delete();
        DB::table('danhmuctintuc')->delete($id);
        return redirect()->route('danhmuctt')->with('success', 'Xóa danh mục thành công');
    }
}