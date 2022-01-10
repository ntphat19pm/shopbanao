<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    use HasFactory;
    protected $table='khuyenmai';
    public $timestamps = false;
    protected $fillable=['id','tenkhuyenmai','sale','thoigian','hinhanh','status_id'];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'khuyenmai_id','id');
    }

    public function scopeSearch($query)
    {
        if($tukhoa=request()->tukhoa){
          
          $query=$query->where('tenkhuyenmai','like','%'.$tukhoa.'%');
        }
        return $query;  
    }
    public function product()
    {
        return $this->hasMany(sanpham::class,'khuyenmai_id','id');
    }
}
