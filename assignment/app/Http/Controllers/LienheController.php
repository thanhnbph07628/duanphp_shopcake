<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LienheController extends Controller
{
    public function Lienhe(){
        $dulieu = DB::table('lienhe')->paginate(5);
        return view('backend.lienhe',compact('dulieu'));
    }

    public function Deletelienhe($id){
        DB::table('lienhe')->delete($id);
        return redirect()->route('lienhe')->with('success', 'Xóa liên hệ thành công');
    }
}
