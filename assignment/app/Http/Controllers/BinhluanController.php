<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BinhluanController extends Controller
{
    public function Binhluan(){
        $dulieu = DB::table('binhluan')->paginate(6);
        $list_sp = DB::table('sanpham')->get();
        $list_user = DB::table('users')->get();
        return view('backend.binhluan',compact('dulieu','list_sp','list_user'));
    }

    public function Deletebinhluan($id){
        DB::table('binhluan')->delete($id);
        return redirect()->route('binhluan')->with('success', 'Xóa bình luận thành công');
    }
}
