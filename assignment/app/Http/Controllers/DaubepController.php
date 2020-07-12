<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Daubep;

use App\Http\Requests\Suadaubep;

class DaubepController extends Controller
{
    public function Daubep()
    {
        $dulieudaubep = DB::table('daubep')->paginate(3);
        return view('backend.daubep', compact('dulieudaubep'));
    }
    
    public function Adddaubep()
    {
        return view('backend.add-daubep');
    }

    public function Valiadd(Daubep $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        $url_img=$file->move('upload/anh_daubep', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $daubep = DB::table('daubep')->insert($data);
        return redirect()->route('daubep')->with('success', 'Thêm đầu bếp thành công');
    }

    public function Editdaubep($id)
    {
        $laydulieu = DB::table('daubep')->find($id);
        return view('backend.edit-daubep',compact('laydulieu'));
    }

    public function postEditdaubep($id, Suadaubep $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        if(isset($file)){
            $url_img=$file->move('upload/anh_daubep', $file->getClientOriginalName());
            $data['images'] = $url_img;
        }else{
            $thongtindb = DB::table('daubep')->find($id);
            $data['images'] = $thongtindb->images;
        }
        $daubep = DB::table('daubep')
        ->where('id', $id)
        ->update($data);;
        return redirect()->route('daubep')->with('success', 'Sửa đầu bếp thành công');
    }

    public function Deletedaubep($id)
    {
        $daubep = DB::table('daubep')->delete($id);
        return redirect()->route('daubep')->with('success', 'Xóa đầu bếp thành công');
    }
};