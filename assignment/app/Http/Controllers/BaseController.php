<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Lienhe;

use Darryldecode\Shoppingcart\Cart;

use Darryldecode\Cart\CartCondition;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BaseController extends Controller
{

    // Back-end
    public function Admin(){
        return view('backend.admin');
    }
    // end Back-end

    // Front-end
    // index
    public function Trangchu(){
        $showspm = DB::table('sanpham')->orderBy('created_at','desc')->paginate(4);
        $showspnb = DB::table('sanpham')->orderBy('views','desc')->paginate(8);
        $showdb = DB::table('daubep')->paginate(3);
        $showtt = DB::table('tintuc')->orderBy('created_at','desc')->paginate(3);
        $showslide = DB::table('slide')->get();
        return view('frontend.index',compact('showspm','showspnb','showdb','showtt','showslide'));
    }
    // end index

    // trang cửa hàng
    public function Cuahang(){
        $show = DB::table('sanpham')->paginate(6);
        $showdm = DB::table('danhmucsanpham')->get();
        $showspm = DB::table('sanpham')->orderBy('created_at','desc')->paginate(4);
        return view('frontend.shop',compact('show','showdm','showspm'));
    }
    // end trang cửa hàng

    // show sản phẩm theo danh mục
    public function Sanpham($id){
        $list_products = DB::table('danhmucsanpham')->leftjoin('sanpham', 'danhmucsanpham.id', '=', 'sanpham.iddm')->where('iddm','=',$id)->paginate(6);
        $showdm = DB::table('danhmucsanpham')->get();
        $showtendm = DB::table('danhmucsanpham')->find($id);
        $showspm = DB::table('sanpham')->orderBy('created_at','desc')->paginate(4);
        return view('frontend.sanpham',compact('list_products','showdm','showspm','showtendm'));
    }
    // end show sản phẩm theo danh mục

    // tin tức - chi tiết tin
    public function Tintuc(){
        $showtin = DB::table('tintuc')->paginate(4);
        $list_user = DB::table('users')->get();
        return view('frontend.blog',compact('showtin','list_user'));
    }

    public function Chitiettin($id){
        $tintuckey = 'tintuc_'.$id;
        $dulieuchitiet = DB::table('tintuc')->find($id);   
        if(!Session::has($tintuckey)){
            DB::table('tintuc')->where('id',$id)->increment('views');
            Session::put($tintuckey,1);
        }
        $showdmtin = DB::table('danhmuctintuc')->get();
        $showtinmoi = DB::table('tintuc')->orderBy('created_at','desc')->paginate(4);
        return view('frontend.single-blog',compact('dulieuchitiet','showdmtin','showtinmoi'));
    }
    // end tin tức

    // liên hệ
    public function Lienhe(){
        return view('frontend.contact');
    }

    public function postaddLienhe(Lienhe $request){
        $data = $request->all();
        unset($data['_token']);
        $lienhe = DB::table('lienhe')->insert($data);
        return back()->with('success', 'Thêm liên hệ thành công');
    }
    // end liên hệ

    // chi tiết sản phẩm
    public function Chitietsp($id){
        $dulieuchitiet = DB::table('sanpham')->find($id);   
        $iddm = $dulieuchitiet->iddm;
        $list_products = DB::table('danhmucsanpham')->leftjoin('sanpham', 'danhmucsanpham.id', '=', 'sanpham.iddm')->where('sanpham.iddm','=',$iddm)->paginate(4);
        $productkey = 'sanpham_'.$id;
        
        if(!Session::has($productkey)){
            DB::table('sanpham')->where('id',$id)->increment('views');
            Session::put($productkey,1);
        }
        $dulieubl = DB::table('binhluan')->where('idsp','=',$id)->get();
        $list_user = DB::table('users')->get();
        return view('frontend.product-details',compact('dulieuchitiet','list_products','dulieubl','list_user'));
    }
    
    public function postaddBinhluan(Request $request){
        $data = $request->all();
        $data['iduser']=Auth::id();
        $data['idsp'] = request()->id;
        unset($data['_token']);
        DB::table('binhluan')->insert($data);
        return back()->with('success', 'Thêm bình luận thành công');
    }
    // end chi tiết sản phẩm

    //slide
    public function Slide(){
        $slide = DB::table('slide')->get();
        return view('frontend.layout.slide',compact('slide'));
    }
    // end slide

    // giỏ hàng
    public function Giohang($id){
        $add_product = DB::table('sanpham')->find($id);
        // dd($id);
        $userId =Auth::user()->id;
        \Cart::session($userId)->add(array(
            'id' => $add_product->id,
            'name' => $add_product->tensp,
            'price' => $add_product->giasp,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $add_product
        ));
        return redirect()->route('addgiohang');
    }

    public function getGiohang(){
        $userId =Auth::user()->id;
        $items = \Cart::session($userId)->getContent();

        return view('frontend.cart',['items'=>$items]);
    }

    public function editGiohang($id){
        return view('frontend.cart');
    }

    public function posteditGiohang($id, Request $request){
        $userId =Auth::user()->id;
        \Cart::session($userId)->update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->soluong
            ),
          ));
        return back();
        
    }

    public function deleteGiohang($id){
        $userId =Auth::user()->id;
        \Cart::session($userId)->remove($id);
        return back();
    }

    public function deleteallGiohang(){
        $userId =Auth::user()->id;
        \Cart::session($userId)->clear();
        return redirect()->route('addgiohang');
    }

    public function Thanhtoan(){
        $userId =Auth::user()->id;
        $items = \Cart::session($userId)->getContent();
        return view('frontend.checkout',['items'=>$items]);
    }

    // end giỏ hàng

    // tìm kiếm
    public function search(Request $request){
        $showspm = DB::table('sanpham')->orderBy('created_at','desc')->paginate(4);
        $keyword = $request->keyword;
        $list_products = DB::table('sanpham')->where('tensp', 'like', '%'.$keyword.'%')->paginate(6);
        return view('frontend.search', compact('list_products','keyword','showspm'));
    }
    // end tìm kiếm

    // Show thương hiệu
    // public function Thuonghieu(){
    //     $dulieu = DB::table('thuonghieu')->first();
    //     return view('frontend.layout.header',compact('dulieu'));
    // }
    // end show thương hiệu
}
