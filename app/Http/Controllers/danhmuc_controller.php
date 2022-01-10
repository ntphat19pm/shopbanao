<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Danhmuc\addRequest;
use Toastr;

class danhmuc_controller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=danhmuc::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.danhmuc.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new danhmuc;
        $data->tendanhmuc=$request->tendanhmuc;
        $data->slug=str_slug($request->tendanhmuc);
        if($data->save()){
            $data=danhmuc::all();
            Toastr::success('Thêm danh mục thành công','Thêm danh mục');
            return view('admin.danhmuc.index',compact('data'));
        }
       
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function show(danhmuc $danhmuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = danhmuc::find($id);
        
		return view('admin.danhmuc.edit', compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = danhmuc::find($id);
        $data->tendanhmuc=$request->tendanhmuc;
        $data->slug=str_slug($request->tendanhmuc);
        if($data->save()){
            Toastr::success('Cập nhật danh mục thành công','Cập nhật danh mục');
            return redirect('admin/danhmuc');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=danhmuc::find($id)->delete();
        if($data){
            Toastr::success('Xóa danh mục thành công','Xóa danh mục');
            return redirect('admin/danhmuc');
        }
       
    }
}
