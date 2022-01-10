<?php

namespace App\Http\Controllers;

use App\Models\dathang;
use App\Models\sanpham;
use App\Models\dathang_chitiet;
use App\Models\khuyenmai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\mail;
use Carbon\Carbon;
use App\Helper\giohang;
use App\Mail\dathang_email;
use App\Models\khachhang;

class dathang_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('khlogin');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        return view('dathang');
    }
    public function postemail(Request $request)
    {
       
        
    }
    public function getdonhang($id){
        $khachhang=khachhang::all();
        $data=dathang::where('khachhang_id',$id)->orderby('id','DESC')->get();
       return view('donhangcuatoi',compact('data','khachhang'));
        

    }
    public function getchitiet_donhang($id){
       $data=dathang_chitiet::where('dathang_id',$id)->orderby('dathang_id','DESC')->get();
       return view('donhang_chitiet',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dathang');
    }
    public function completed()
    {
        return view('completed');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,giohang $giohang)
    {
       
      
        $id=Auth::guard('khachhang')->user()->id;
        // $dathang=new dathang;
        // $dathang->khachhang_id=$id;
        // $dathang->ngaydathang=Carbon::now();
        // $dathang->tongtien=$giohang->gia;

        $dathang = dathang::create([
            'khachhang_id' => $id,
            'ngaydathang' => Carbon::now('Asia/Ho_Chi_Minh'), 
            'tongtien' => $giohang->gia,
            ]);
            
        if($dathang){
            foreach($giohang->items as $sanpham_id=>$item){
                $gia=$item['gia'];
                $soluong=$item['soluong'];
                $dathang_chitiet=new dathang_chitiet;
                $dathang_chitiet->dathang_id=$dathang->id;
                $dathang_chitiet->dathang_id=$dathang->id;
                $dathang_chitiet->sanpham_id=$sanpham_id;
                $sp=sanpham::find($sanpham_id);
                if($sp->soluong>=$soluong){
                    $sp->soluong-=$soluong;
                    $sp->save();
                    $dathang_chitiet->soluong=$soluong;
                    $dathang_chitiet->dongia=$gia*$soluong;
                    $dathang_chitiet->save();
                }
                else{
                    return redirect('/giohang')->with('error','số lượng sản phẩm quá lớn');
                }
               
            }

           Mail::to(Auth::guard('khachhang')->user()->email)->send(new dathang_email($dathang));
          

            session()->forget('giohang');
            return redirect('/giohang/completed'); 
        }
        else
            return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function show(dathang $dathang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dathang $dathang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dathang  $dathang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(dathang::find($id)->delete())
            return redirect('admin/dathang');
    }
}
