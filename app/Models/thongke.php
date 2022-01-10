<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongke extends Model
{
    use HasFactory;
    protected $table='thongke';
    public $timestamps = false;
    protected $fillable=['id','ngaydathang','doanh_so','doanh_thu','loi_nhuan','soluong_ban','tong_donhang'];

    public function scopeSearch($query){
        if($tukhoa=request()->tukhoa){
          
          $query=$query->where('ngaydathang','like','%'.$tukhoa.'%');
        }
        return $query;
  
      }
}
