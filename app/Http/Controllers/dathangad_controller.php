<?php

namespace App\Http\Controllers;

use App\Models\dathang;
use App\Models\dathang_chitiet;
use App\Models\khachhang;
use App\Models\nhanvien;
use App\Models\sanpham;
use App\Models\tinhtrang;
use App\Models\thongke;
use Illuminate\Http\Request;
use Toastr;

class dathangad_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=dathang::orderby('ngaydathang','DESC')->get();
        return view('admin.dathang.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thongke=new thongke;
        $thongke->ngaydathang=Carbon::now('Asia/Ho_Chi_Minh');
        $thongke->doanh_so=$request->doanh_so;
        $thongke->doanh_thu=$request->doanh_thu;
        $thongke->soluong_ban=$request->soluong_ban;
        $thongke->tong_donhang=$request->tong_donhang; 
        if($thongke->save()){
            $thongke=thongke::all();
            return redirect('admin/dathang');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dathang  $dathang
     * @param  \App\Models\dathang_chitiet  $dathang_chitiet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khachhang=khachhang::all();
        $sanpham=sanpham::all();
        $tinhtrang=tinhtrang::all();
        $dathang_chitiet=dathang_chitiet::where('dathang_id',$id)->orderby('dathang_id','DESC')->search()->paginate(10);
        $data=dathang::find($id);
        return view('admin.dathang.show',compact('data','khachhang','sanpham','dathang_chitiet','tinhtrang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien=nhanvien::all();
        $khachhang=khachhang::all();
        $tinhtrang=tinhtrang::all();
        $data=dathang::find($id);
        return view('admin.dathang.edit',compact('data','nhanvien','khachhang','tinhtrang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=dathang::find($id);
        // $data->ngaydathang=$request->ngaydathang;
        $data->tinhtrang_id=$request->tinhtrang_id;
        // $data->tongtien=$request->tongtien;
        if($data->save()) {
            Toastr::success('Cập nhật đơn hàng thành công','Cập nhật đơn hàng');
            return redirect('admin/dathang');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=dathang::find($id)->delete();
        if($data){
            Toastr::success('Xóa đặt hàng thành công','Xóa đặt hàng');
            return redirect('admin/dathang');
        }
    }
}
