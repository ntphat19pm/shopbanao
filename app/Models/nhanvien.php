<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class nhanvien extends Model
{
    use HasFactory;
    protected $table='nhanvien';
    public $timestamps = false;
    protected $fillable = [
		'id', 'hovaten', 'gioitinh_id','ngaysinh', 'diachi', 'sdt', 
        'cmnd','chucvu_id','tendangnhap', 'matkhau','email','trangthai'
	];
    public function chucvu(){
        return $this->hasOne(chucvu::class,'id','chucvu_id');
    }
    public function gioitinh(){
        return $this->hasOne(gioitinh::class,'id','gioitinh_id');
    }
    public function nhanvien(){
        return $this->hasMany(dathang::class,'nhanvien_id','id');
    }
    public function scopeSearch($query)
    {
        if($tukhoa=request()->tukhoa){
            $query=$query->where('hovaten','like','%'.$tukhoa.'%');
        }
        return $query;
    }
    public function dathang(){
        return $this->hasMany(dathang::class,'nhanvien_id','id');
    }

}