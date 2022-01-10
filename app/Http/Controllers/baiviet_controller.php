<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
use Toastr;

class baiviet_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=baiviet::all();
        return view('admin.baiviet.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.baiviet.create');
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
            $file_name=time().'-baiviet'.'.'.$ex;
            $file->move(public_path('uploads/baiviet'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(baiviet::create($request->all())){
            Toastr::success('Thêm bài viết thành công','Thêm bài viết');
            return redirect('admin/baiviet');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function show(baiviet $baiviet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = baiviet::find($id);
		return view('admin.baiviet.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-baiviet'.'.'.$ex;
            $file->move(public_path('uploads/baiviet'),$file_name);

            $data=baiviet::find($id);
            File::delete('public/uploads/baiviet/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(baiviet::find($id)->update($request->all())){
            Toastr::success('Cập nhật bài viết thành công','Cập nhật bài viết');
            return redirect('admin/baiviet');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=baiviet::find($id);
        $duongdan = 'public/uploads/baiviet';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa bài viết thành công','Xóa bài viết');
            return redirect('admin/baiviet');
        }
            
    }
}
