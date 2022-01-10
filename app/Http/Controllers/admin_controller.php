<?php

namespace App\Http\Controllers;
use App\Models\nhanvien;
use App\Models\thongke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{
   public function index(){
       return view('admin.index');
   }
    public function getdangnhap(){
        return view('admin.login');
    }
    public function profile(){
        return view('admin.profile');
    }
    // public function filter_by_date(Request $request){
    //     $data = $request->all();
    //     $from_date = $data['from_date'];
    //     $to_date = $data['to_date'];

    //     $get = thongke::whereBetween('ngaydathang',[$from_date,$to_date])->orderBy('ngaydathang','ASC')->get();
    //         foreach($get as $key -> $val){
    //             $chart_data[] = array(
    //                 'thoigian'=> $val->ngaydathang,
    //                 'tong_donhang'=> $val->tong_donhang,
    //                 'doanh_so'=> $val->doanh_so,
    //                 'loi_nhuan'=> $val->loi_nhuan,
    //                 'soluong_ban'=> $val->soluong_ban
    //             );
    //         }
    //         echo $data = json_encode($chart_data);
    // }
   
   

}
