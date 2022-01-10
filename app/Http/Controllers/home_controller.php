<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\khachhang;
use App\Models\dathang;
use App\Models\dathang_chitiet;
use App\Models\gioitinh;
use App\Models\baiviet;
use Illuminate\Support\Facades\DB;
use App\Helper\giohang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Mail\dathang_email;
use Illuminate\Support\Facades\Mail;

class home_controller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        $data=sanpham::paginate(20);
        return view('home');
    }

    public function chitiet($id){
        $data=sanpham::find($id);
        return view('chitiet',compact('data'));
    }
    public function chitietbai($id){
        $data=baiviet::find($id);
        return view('chitietbai',compact('data'));
    }
    public function shop(){
        return view('shop');
    }
    public function get_dangnhap(){
       return view('login_kh');
 
    }
    public function dangxuat(){
       Auth::guard('khachhang')->logout();
       
        return view('home');
  
     }

    public function post_dangnhap(Request $request){
       
        $arr=[
            'tendangnhap'=>$request->tendangnhap,
            'password'=>$request->password
        ];

        if(Auth::guard('khachhang')->attempt($arr))
        {
            return redirect('/home');
        }
        else{
            return redirect('/dangnhap');

        }
  
    }
    public function get_dangky()
    {
        return view('regis_kh');
  
    }
    public function lienhe()
    {
        return view('lienhe');
  
    }

    public function video()
    {
        return view('video');
  
    }
    public function baiviet()
    {
        return view('baiviet');
  
    }

    public function post_dangky(Request $request)
    {
       
        $data=new khachhang;
        $data->hovaten=$request->hovaten;
        $data->gioitinh=$request->gioitinh;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->email=$request->email;
        $data->tendangnhap=$request->tendangnhap;
        $data->password=bcrypt($request->password);

        if($data->save()){
            return redirect('/dangnhap');
        }
  
    }

    public function edit($id)
    {
        $gioitinh=gioitinh::all();
        $data=khachhang::find($id);
        return view('edit',compact('data','gioitinh'));  
        
    }
    public function update(Request $request, $id)
    {
        $data=khachhang::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->tendangnhap=$request->tendangnhap;
        $data->email=$request->email;
       if($data->save()) {
           return redirect('/home');
       }
    }
    
    public function getDatHangDemo()
    {
        // Thêm Đơn hàng demo
        $dathang = dathang::create([
        'khachhang_id' => Auth::user()->id,
        'dienthoaigiaohang' => '0939011900',
        'diachigiaohang' => '18 Ung Văn Khiêm - TP. Long Xuyên - An Giang',
        ]);
        
        // Thêm Đơn hàng chi tiết demo
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 2,
        'soluong' => 1,
        'dongia' => 5990000,
        ]);
        
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 142,
        'soluong' => 1,
        'dongia' => 350000,
        ]);
        
        // Gởi email
        Mail::to(Auth::guard('khachhang')->user()->email)->send(new dathang_email($dathang));
        
        return redirect()->route('completed');
    }
}
