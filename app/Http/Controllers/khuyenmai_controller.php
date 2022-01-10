<?php

namespace App\Http\Controllers;

use App\Models\khuyenmai;
use Illuminate\Http\Request;
use File;
use Toastr;

class khuyenmai_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=khuyenmai::search()->paginate(5);
        return view('admin.khuyenmai.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.khuyenmai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('file_uploads')){
            
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-khuyenmai'.'.'.$ex;
            $file->move(public_path('uploads/khuyenmai'),$file_name);
          
        }
        $request->merge(['hinhanh'=>$file_name]);

        if(khuyenmai::create($request->all())){
            Toastr::success('Thêm khuyến mãi thành công','Thêm khuyến mãi');
            return redirect('admin/khuyenmai');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function show(khuyenmai $khuyenmai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = khuyenmai::find($id);
		return view('admin.khuyenmai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-khuyenmai'.'.'.$ex;
            $file->move(public_path('uploads/khuyenmai'),$file_name);

            $data=khuyenmai::find($id);
            File::delete('public/uploads/khuyenmai/'.$data->hinhanh);
            $request->merge(['hinhanh'=>$file_name]); 
        }
    
        if(khuyenmai::find($id)->update($request->all())){
            Toastr::success('Cập nhật khuyến mãi thành công','Cập nhật khuyến mãi');
            return redirect('admin/khuyenmai');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khuyenmai  $khuyenmai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( khuyenmai::find($id)->sanpham->count()){
            Toastr::warning('Không thể xóa chương trình khuyến mãi','Cảnh báo');
            return redirect()->route('khuyenmai.index')->with('error','không thể xóa sản phẩm vì sản phẩm có trong đơn hàng');
        }
        else{
            $data=khuyenmai::find($id);
            $duongdan = 'public/uploads/khuyenmai';
            File::delete($duongdan.'/'.$data->hinhanh);
            $data->delete();
            Toastr::success('Xóa khuyến mãi thành công','Xóa khuyến mãi');
            return redirect('admin/khuyenmai');
        }
    }
}
