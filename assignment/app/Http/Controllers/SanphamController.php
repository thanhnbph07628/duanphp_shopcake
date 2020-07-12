<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Sanpham;

use App\Http\Requests\SuaSanPham;

class SanphamController extends Controller
{
    public function Sanpham(){
        $dulieusanpham= DB::table('sanpham')->paginate(3);
        $list_cate = DB::table('danhmucsanpham')->get();
        return view('backend.sanpham', compact('dulieusanpham','list_cate'));
    }

    public function Addsanpham(){
        $list_cate = DB::table('danhmucsanpham')->get();
        return view('backend.add-sanpham',compact('list_cate'));
    }

    public function Editsanpham($id){
        $laydulieu = DB::table('sanpham')->find($id);
        $list_cate = DB::table('danhmucsanpham')->get();
        return view('backend.edit-sanpham',compact('laydulieu','list_cate'));
    }

    public function postEditsanpham($id, SuaSanPham $request){
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        if(isset($file)){
            $url_img=$file->move('upload/anh_sp', $file->getClientOriginalName());
            $data['images'] = $url_img;
        }else{
            $thongtinsp = DB::table('sanpham')->find($id);
            $data['images'] = $thongtinsp->images;
        }
        
        $sanpham = DB::table('sanpham')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('sanpham')->with('success', 'Sửa sản phẩm thành công');
    }

    public function Deletesanpham($id){
        DB::table('sanpham')->delete($id);
        return redirect()->route('sanpham')->with('success', 'Xóa sản phẩm thành công');
    }

    public function Valiaddsp(Sanpham $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['soluongban']=0;
        $data['views']=0;
        $file = $request->images;
        $url_img=$file->move('upload/anh_sp', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $sanpham = DB::table('sanpham')->insert($data);
        return redirect()->route('sanpham')->with('success', 'Thêm sản phẩm thành công');
    }

    
}
