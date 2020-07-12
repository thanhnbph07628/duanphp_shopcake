<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['perfix'=>'frontend'], function(){
    Route::get('/trangchu', 'BaseController@Trangchu' )->name('index');
    Route::get('/banh', 'BaseController@Banh' )->name('cake');

    //Show sản phẩm theo danh mục
    Route::get('/sanpham/{id}', 'BaseController@Sanpham' )->name('showsanphamdm');

    // Liên hệ
    Route::get('/lienhe', 'BaseController@Lienhe' )->name('lienhe-phanhoi');
    Route::post('/lienhe', 'BaseController@postaddLienhe' )->name('addlienhe');

    // Cửa hàng bánh
    Route::get('/cuahang', 'BaseController@Cuahang' )->name('shop');
    Route::get('/chitietsanpham/{id}', 'BaseController@Chitietsp' )->name('chitietsp');

    // Bình luận
    Route::post('/chitietsanpham/{id}', 'BaseController@postaddBinhluan' )->name('addbinhluan');

    // Tin tức
    Route::get('/tintuc', 'BaseController@Tintuc' )->name('baiviet');
    Route::get('/chitiettintuc/{id}', 'BaseController@Chitiettin' )->name('chitiettin');
    
    // Giỏ hàng
    Route::get('/giohang/{id}', 'BaseController@Giohang' )->name('giohang')->middleware('giohang');
    Route::get('/getGiohang', 'BaseController@getGiohang' )->name('addgiohang')->middleware('giohang');
    Route::get('/editgiohang/{id}', 'BaseController@editGiohang' )->name('editgiohang')->middleware('giohang');
    Route::post('/editgiohang/{id}', 'BaseController@posteditGiohang' )->name('posteditgiohang')->middleware('giohang');
    Route::get('/deletegiohang/{id}', 'BaseController@deleteGiohang' )->name('deletegiohang')->middleware('giohang');
    Route::get('/deleteallgiohang', 'BaseController@deleteallGiohang' )->name('deleteallgiohang')->middleware('giohang');
    Route::get('/thanhtoan', 'BaseController@Thanhtoan' )->name('thanhtoan')->middleware('giohang');
    //end giỏ hàng

    // Đăng ký - Đăng nhập - Quên mật khẩu
    Route::get('/dangnhap', 'TaikhoanController@Dangnhap' )->name('dangnhap');
    Route::post('/dangnhap', 'TaikhoanController@postDangnhap' )->name('postdangnhap');
    Route::get('/dangxuat', 'TaikhoanController@Dangxuat' )->name('dangxuat');
    Route::get('/dangky', 'TaikhoanController@Dangky' )->name('dangky');
    Route::post('/dangky', 'TaikhoanController@Validangky' )->name('postdangky');
    Route::get('/quenmatkhau', 'TaikhoanController@Quenmatkhau' )->name('quenmatkhau');
    Route::post('/quenmatkhau', 'TaikhoanController@postQuenmatkhau' );
    Route::get('/doimatkhau','TaikhoanController@resetPassword')->name('changePassword');
    // Đăng ký - Đăng nhập - Quên mật khẩu
   
    // Tìm kiếm
    Route::get('/search', 'BaseController@search');
    
    Route::redirect('/','/trangchu');
});

Route::group(['perfix'=>'backend', 'middleware' => 'admin'], function(){
    Route::get('/admin', 'BaseController@Admin' )->name('admin');

// Danh mục
    Route::get('/quantridanhmuc','DanhmucController@Danhmuc')->name('danhmuc');
    Route::get('/add-danhmuc', 'DanhmucController@Adddanhmuc' )->name('adddanhmuc');
    Route::post('/add-danhmuc', 'DanhmucController@Valiadd' )->name('postdanhmuc');
    Route::get('/edit-danhmuc/{id}','DanhmucController@Editdanhmuc')->name('editdanhmuc');
    Route::post('/edit-danhmuc/{id}','DanhmucController@postEditdanhmuc')->name('posteditdanhmuc');
    Route::get('/delete-danhmuc/{id}','DanhmucController@Deletedanhmuc')->name('deletedanhmuc');
    
// Sản phẩm
    Route::get('/quantrisanpham', 'SanphamController@Sanpham' )->name('sanpham');
    Route::get('/add-sanpham', 'SanphamController@Addsanpham' )->name('addsanpham');
    Route::post('/add-sanpham', 'SanphamController@Valiaddsp' )->name('postsanpham');
    Route::get('/edit-sanpham/{id}', 'SanphamController@Editsanpham' )->name('editsanpham');
    Route::post('/edit-sanpham/{id}','SanphamController@postEditsanpham')->name('posteditsanpham');
    Route::get('/delete-sanpham/{id}','SanphamController@Deletesanpham')->name('deletesanpham');

// Slider
    Route::get('/quantrislide', 'SlideController@Slide' )->name('slide');
    Route::get('/quantrislide/{id}', 'SlideController@change' );
    Route::get('/add-slide', 'SlideController@Addslide' )->name('addslide');
    Route::post('/add-slide', 'SlideController@Valiadd' )->name('postslide');
    Route::get('/edit-slide/{id}', 'SlideController@Editslide' )->name('editslide');
    Route::post('/edit-slide/{id}','SlideController@postEditslide')->name('posteditslide');
    Route::get('/delete-slide/{id}','SlideController@Deleteslide')->name('deleteslide');

// Danh mục tin
    Route::get('/quantridanhmuctt', 'DanhmuctinController@Danhmuctt' )->name('danhmuctt');
    Route::get('/add-danhmuctt', 'DanhmuctinController@Adddanhmuctt' )->name('adddanhmuctt');
    Route::post('/add-danhmuctt', 'DanhmuctinController@Valiadd' )->name('postdanhmuctt');
    Route::get('/edit-danhmuctt/{id}', 'DanhmuctinController@Editdanhmuctt' )->name('editdanhmuctt');
    Route::post('/edit-danhmuctt/{id}','DanhmuctinController@postEditdanhmuctt')->name('posteditdanhmuctt');
    Route::get('/delete-danhmuctt/{id}', 'DanhmuctinController@Deletedanhmuctt' )->name('deletedanhmuctt');

// Tin tức
    Route::get('/quantritintuc', 'TintucController@Tintuc' )->name('tintuc');
    Route::get('/add-tintuc', 'TintucController@Addtintuc' )->name('addtintuc');
    Route::post('/add-tintuc', 'TintucController@Valiaddtt' )->name('posttintuc');
    Route::get('/edit-tintuc/{id}', 'TintucController@Edittintuc' )->name('edittintuc');
    Route::post('/edit-tintuc/{id}','TintucController@postEdittintuc')->name('postedittintuc');
    Route::get('/delete-tintuc/{id}', 'TintucController@Deletetintuc' )->name('deletetintuc');

// Đầu bếp
    Route::get('/quantridaubep', 'DaubepController@Daubep' )->name('daubep');
    Route::get('/add-daubep', 'DaubepController@Adddaubep' )->name('adddaubep');
    Route::post('/add-daubep', 'DaubepController@Valiadd' )->name('postdaubep');
    Route::get('/edit-daubep/{id}', 'DaubepController@Editdaubep' )->name('editdaubep');
    Route::post('/edit-daubep/{id}','DaubepController@postEditdaubep')->name('posteditdaubep');
    Route::get('/delete-daubep/{id}', 'DaubepController@Deletedaubep' )->name('deletedaubep');

// Tài khoản
    Route::get('/quantritaikhoan', 'TaikhoanController@Taikhoan' )->name('taikhoan');
    Route::get('/quantritaikhoan/{id}', 'TaikhoanController@change');
    Route::get('/add-taikhoan', 'TaikhoanController@Addtaikhoan' )->name('addtaikhoan');
    Route::post('/add-taikhoan', 'TaikhoanController@Valiaddtk' )->name('posttaikhoan');
    Route::get('/edit-taikhoan/{id}', 'TaikhoanController@Edittaikhoan' )->name('edittaikhoan');
    Route::post('/edit-taikhoan/{id}','TaikhoanController@postEdittaikhoan')->name('postedittaikhoan');
    Route::get('/delete-taikhoan/{id}','TaikhoanController@Deletetaikhoan')->name('deletetaikhoan');

// Bình luận
    Route::get('/quantribinhluan', 'BinhluanController@Binhluan' )->name('binhluan');
    // Route::get('/add-binhluan', 'BinhluanController@Addbinhluan' )->name('addbinhluan');
    // Route::get('/edit-binhluan', 'BinhluanController@Editbinhluan' )->name('editbinhluan');
    Route::get('/delete-binhluan/{id}', 'BinhluanController@Deletebinhluan' )->name('deletebl');

// Liên hệ
    Route::get('/quantrilienhe', 'LienheController@Lienhe' )->name('lienhe');
    // Route::get('/add-lienhe', 'LienheController@Addlienhe' )->name('addlienhe');
    // Route::get('/edit-lienhe', 'LienheController@Editlienhe' )->name('editlienhe');
    Route::get('/delete-lienhe/{id}', 'LienheController@Deletelienhe' )->name('deletelienhe');

//Thương hiệu
    Route::get('/quantrithuonghieu', 'ThuonghieuController@Thuonghieu' )->name('thuonghieu');
    Route::get('/quantrithuonghieu/{id}', 'ThuonghieuController@change' );
    Route::get('/add-thuonghieu', 'ThuonghieuController@Addthuonghieu' )->name('addthuonghieu');
    Route::post('/add-thuonghieu', 'ThuonghieuController@Valiaddth' )->name('postthuonghieu');
    Route::get('/edit-thuonghieu/{id}', 'ThuonghieuController@Editthuonghieu' )->name('editthuonghieu');
    Route::post('/edit-thuonghieu/{id}','ThuonghieuController@postEditthuonghieu')->name('posteditthuonghieu');
    Route::get('/delete-thuonghieu/{id}','ThuonghieuController@Deletethuonghieu')->name('deletethuonghieu');

});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
