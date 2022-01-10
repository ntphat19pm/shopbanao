<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use App\Models\gioitinh;
use Illuminate\Http\Request;

class profile_kh_controller extends Controller
{
    public function edit($id)
    {
        $gioitinh=gioitinh::all();
        $data=khachhang::find($id);
        return view('edit',compact('data','gioitinh'));  
        
    }
}
