<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dactinh extends Model
{
    use HasFactory;
    protected $table='dactinh';
    public $timestamps = false;
    protected $fillable=['id','dactinh','slug'];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'dactinh_id','id');
    }
    public function product()
    {
        return $this->hasMany(sanpham::class,'dactinh_id','id');
    }
    public function scopeSearch($query){
        if($tukhoa=request()->tukhoa){
          
          $query=$query->where('dactinh','like','%'.$tukhoa.'%');
        }
        return $query;
  
      }
}
