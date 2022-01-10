<?php

namespace App\Http\Controllers;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\chucvu;
use App\Models\gioitinh;
use App\Models\province;

use App\Models\User;
use Toastr;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class nhanvien_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=nhanvien::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.nhanvien.index',compact('data'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        return view('admin.nhanvien.create',compact('chucvu','gioitinh'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
		//	'hovaten' => 'required|string|max:100',
		//	'tendangnhap' => 'required|string|max:100|unique:nhanvien,tendangnhap,' . $request->id,
		//	'email' => 'required|string|email|max:255|unique:nhanvien,email,' . $request->id,
		//	'password' => 'required|min:6|confirmed'
		//]);
        $data=new nhanvien;
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->chucvu_id=$request->chucvu_id;
        $sub_link=substr($request->email,0,-10);
        $data->tendangnhap=$sub_link;
        $data->password=bcrypt($request->password);
        //$data->password=$request->password;
        $data->email=$request->email;
       if($data->save()) {
            Toastr::success('Thêm nhân viên thành công','Thêm nhân viên');
           return redirect('admin/nhanvien');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        $data=nhanvien::find($id);
        return view('admin.nhanvien.show',compact('data','chucvu','gioitinh'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        $data=nhanvien::find($id);
        return view('admin.nhanvien.edit',compact('data','chucvu','gioitinh'));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=nhanvien::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->chucvu_id=$request->chucvu_id;
        $data->trangthai=$request->trangthai;

        $sub_link=substr($request->email,0,-10);
        $data->tendangnhap=$sub_link;

        if(!empty($request->password)) $data->password = bcrypt($request->password);
		$data->save();
        $data->email=$request->email;
        
       if($data->save()) {
            Toastr::success('Cập nhật nhân viên thành công','Cập nhật nhân viên');
           return redirect('admin/nhanvien');
       }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(nhanvien::find($id)->delete()){
            Toastr::success('Xóa nhân viên thành công','Xóa nhân viên');
            return redirect('admin/nhanvien');
        }
            
    }

    public function getdangnhap(){
        return view('admin.login');
    }
    public function profile(){
        return view('admin.profile');
    }
   
    public function postdangnhap(Request $request){
        $arr=[
            'tendangnhap'=>$request->tendangnhap,
            'password'=>$request->password
        ];

        if(Auth::attempt($arr)){
            Toastr::success('Đăng nhập thành công','Thành công');
            return view('admin.index',['user'=>Auth::user()]);
        }
        else{
            Toastr::success('Đăng nhập thành công','Thành công');
            return view('admin.login');

        }

        
    }
    public function dangxuat(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
