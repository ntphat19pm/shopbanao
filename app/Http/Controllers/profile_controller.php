<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use App\Models\nhanvien;
use App\Models\gioitinh;
use App\Models\User;
use Toastr;
use Illuminate\Http\Request;

class profile_controller extends Controller
{
    public function index()
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        return view('admin.profile.index',compact('chucvu','gioitinh'));
        
    }
    public function edit($id)
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        $data=nhanvien::find($id);
        return view('admin.profile.edit',compact('data','chucvu','gioitinh'));  
        
    }
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
        $data->tendangnhap=$request->tendangnhap;
        if(!empty($request->password)) $data->password = bcrypt($request->password);
		$data->save();
        $data->email=$request->email;
       if($data->save()) {
            Toastr::success('Cập nhật thông tin thành công','Cập nhật thông tin');
           return redirect('admin/profile');
       }
       
    }
    public function destroy($id)
    {
        if(nhanvien::find($id)->delete()){
            Toastr::success('Xóa nhân viên thành công','Xóa nhân viên');
            return redirect('dangnhap');
        }
            
    }
}
