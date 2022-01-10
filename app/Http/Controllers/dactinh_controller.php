<?php

namespace App\Http\Controllers;

use App\Models\dactinh;
use Illuminate\Http\Request;
use Toastr;

class dactinh_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=dactinh::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.dactinh.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dactinh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new dactinh;
        $data->dactinh=$request->dactinh;
        $data->slug=str_slug($request->dactinh);
        if($data->save()){
            Toastr::success('Thêm đặc tính thành công','Thêm đặc tính');
            return redirect('admin/dactinh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dactinh  $dactinh
     * @return \Illuminate\Http\Response
     */
    public function show(dactinh $dactinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dactinh  $dactinh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=dactinh::find($id);
        return view('admin.dactinh.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dactinh  $dactinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=dactinh::find($id);
        $data->dactinh=$request->dactinh;
        $data->slug=str_slug($request->dactinh);
        if($data->save()){
            Toastr::success('Cập nhật đặc tính thành công','Cập nhật đặc tính');
            return redirect('admin/dactinh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dactinh  $dactinh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( dactinh::find($id)->sanpham->count()){
            Toastr::warning('Không thể xóa đặc tính này','Cảnh báo');
            return redirect()->route('dactinh.index')->with('error','không thể xóa sản phẩm vì sản phẩm có trong đơn hàng');
        }
        else{
            $data=dactinh::find($id)->delete();
            Toastr::success('Xóa đặc tính thành công','Xóa đặc tính');
            return redirect('admin/dactinh');
        }        
    }
}
