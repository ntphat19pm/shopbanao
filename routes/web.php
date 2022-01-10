<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\danhmuc_controller;

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

Route::get('/','home_controller@index')->name('home.index');
Route::get('/home','home_controller@home')->name('home.home');
Route::get('/themgiohang/{id}','giohang_controller@themgiohang')->name('home.themgiohang');
Route::get('/shop','home_controller@shop')->name('home.shop');

Route::get('/dangnhap','home_controller@get_dangnhap')->name('home.getdangnhap');
Route::get('/dangxuat','home_controller@dangxuat')->name('home.dangxuat');
Route::post('/dangnhap','home_controller@post_dangnhap')->name('home.postdangnhap');
Route::get('/dangky','home_controller@get_dangky')->name('home.getdangky');
Route::post('/dangky','home_controller@post_dangky')->name('home.postdangky');
Route::get('/chitiet/{id}','home_controller@chitiet')->name('home.chitiet');

Route::get('/lienhe','home_controller@lienhe')->name('home.lienhe');
Route::get('/video','home_controller@video')->name('home.video');
Route::get('/baiviet','home_controller@baiviet')->name('home.baiviet');
Route::get('/chitietbai/{id}','home_controller@chitietbai')->name('home.chitietbai');

Route::get('/edit/{id}','home_controller@edit')->name('home.edit');
Route::post('/update','home_controller@update')->name('home.update');

Route::get('/giohang','giohang_controller@index')->name('giohang.index');
Route::get('/giohang/capnhat/{id}','giohang_controller@capnhat')->name('giohang.capnhattang');
Route::get('/giohang/xoa/{id}','giohang_controller@xoa')->name('giohang.xoa');
Route::get('/giohang/xoatatca','giohang_controller@xoatatca')->name('giohang.xoatatca');

Route::get('/giohang/xacnhan','dathang_controller@create')->name('get_dathang');
Route::post('/giohang/xacnhan','dathang_controller@store')->name('post_dathang');
Route::get('/giohang/completed','dathang_controller@completed')->name('dathang.completed');
Route::get('/donhang/{id}','dathang_controller@getdonhang')->name('get.donhang');
Route::get('/donhang_chitiet/{id}','dathang_controller@getchitiet_donhang')->name('get.chitiet_donhang');


Route::get('admin/dangnhap','nhanvien_controller@getdangnhap')->name('get.dangnhap');
Route::post('admin/dangnhap','nhanvien_controller@postdangnhap')->name('post.dangnhap');
Route::get('admin/dangxuat','nhanvien_controller@dangxuat')->name('dangxuat');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
    Route::get('/', 'admin_controller@index')->name('admin.index');

    Route::get('/donhang', 'donhang_controller@index')->name('donhang.index');
    Route::get('/donhang/show/{id}', 'donhang_controller@show')->name('donhang.show');
    Route::get('/donhang/destroy/{id}', 'donhang_controller@destroy')->name('donhang.destroy');
    
    Route::post('/sanpham/nhap', 'sanpham_controller@postNhap')->name('sanpham.nhap');
    Route::get('/sanpham/xuat', 'sanpham_controller@getXuat')->name('sanpham.xuat');
    
    Route::resources([
        'danhmuc'=>'danhmuc_controller',
        'khachhang'=>'khachhang_controller',
        'nhanhieu'=>'nhanhieu_controller',
        'chatlieu'=>'chatlieu_controller',
        'dactinh'=>'dactinh_controller',
        'sanpham'=>'sanpham_controller',
        'phanloai'=>'phanloai_controller',
        'chucvu'=>'chucvu_controller',
        'dathang'=>'dathangad_controller',
        'lienhe'=>'lienhe_controller',
        'video'=>'video_controller',
        'menu'=>'menu_controller',
        'baiviet'=>'baiviet_controller',
        'profile'=>'profile_controller',
        'dathang_chitiet'=>'dathang_chitiet_controller',
        'nhanvien'=>'nhanvien_controller',
        'tinhtrang'=>'tinhtrang_controller',
        'thongke'=>'thongke_controller',
        'khuyenmai'=>'khuyenmai_controller',
    ]);
});

/*Route::prefix('admin')->group(function () {
    Route::get('/', 'admin_controller@index')->name('admin.index');
    Route::resources([
        'danhmuc'=>'danhmuc_controller',
        'khachhang'=>'khachhang_controller',
        'nhanhieu'=>'nhanhieu_controller',
        'xuatxu'=>'xuatxu_controller',
        'sanpham'=>'sanpham_controller',
        'baohanh'=>'baohanh_controller',
        'chucvu'=>'chucvu_controller',
        'nhanvien'=>'nhanvien_controller'
    ]);
}); 
*/

