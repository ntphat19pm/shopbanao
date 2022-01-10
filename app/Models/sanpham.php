<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\chatlieu;
use App\Models\dactinh;
use App\Models\nhanhieu;
use App\Models\phanloai;
use App\Models\khuyenmai;
use App\Models\danhmuc;

class sanpham extends Model
{
    use HasFactory;
    protected $table='sanpham';
    public $timestamps = false;
    protected $fillable = [
		'tensp', 'anh','anh1','soluong', 'chitiet', 'gianhap', 'giaxuat','nhanhieu_id','chatlieu_id', 'phanloai_id','dactinh_id','size_id','khuyenmai_id','danhmuc_id','slug','link'
	];
    public function dathang_chitiet(){
    return $this->hasMany(dathang_chitiet::class,'sanpham_id','id');
    }

    public function chatlieu(){
      return $this->hasOne(chatlieu::class,'id','chatlieu_id');
    }
    public function dactinh(){
      return $this->hasOne(dactinh::class,'id','dactinh_id');
    }
    public function nhanhieu(){
      return $this->hasOne(nhanhieu::class,'id','nhanhieu_id');
    }
    public function phanloai(){
      return $this->hasOne(phanloai::class,'id','phanloai_id');
    }
    public function danhmuc(){
      return $this->hasOne(danhmuc::class,'id','danhmuc_id');
    }
    public function khuyenmai(){
      return $this->hasOne(khuyenmai::class,'id','khuyenmai_id');
    }
    public function size(){
      return $this->hasOne(size::class,'id','size_id');
    }

    public function scopeSearch($query){
      if($tukhoa=request()->tukhoa){
        
        $query=$query->where('tensp','like','%'.$tukhoa.'%');
      }
      return $query;

    }
}
