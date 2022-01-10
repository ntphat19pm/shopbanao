<?php

namespace App\Http\Controllers;

use App\Models\nhanhieu;
use Illuminate\Http\Request;
use Toastr;

class nhanhieu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=nhanhieu::search()->paginate(5);
        return view('admin.nhanhieu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nhanhieu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new nhanhieu;
        $data->nhanhieu=$request->nhanhieu;
        $data->slug=str_slug($request->nhanhieu);
        if($data->save()){
            $data=nhanhieu::all();
            Toastr::success('Thêm nhãn hiệu thành công','Thêm nhãn hiệu');
            return redirect('admin/nhanhieu');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhanhieu  $nhanhieu
     * @return \Illuminate\Http\Response
     */
    public function show(nhanhieu $nhanhieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhanhieu  $nhanhieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = nhanhieu::find($id);
        
		return view('admin.nhanhieu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhanhieu  $nhanhieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = nhanhieu::find($id);
        $data->nhanhieu=$request->nhanhieu;
        $data->slug=str_slug($request->nhanhieu);
        if($data->save()){
            $data=nhanhieu::all();
            Toastr::success('Cập nhật nhãn hiệu thành công','Cập nhật nhãn hiệu');
            return redirect('admin/nhanhieu');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhanhieu  $nhanhieu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( nhanhieu::find($id)->sanpham->count()){
            Toastr::warning('Không thể xóa nhãn hiệu này','Cảnh báo');
            return redirect()->route('nhanhieu.index')->with('error','không thể xóa sản phẩm vì sản phẩm có trong đơn hàng');
        }
        else{
            $data= nhanhieu::find($id)->delete();
            Toastr::success('Xóa nhãn hiệu thành công','Xóa nhãn hiệu');
            return redirect('admin/nhanhieu');
        }
            
    }
}
