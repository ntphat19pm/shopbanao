<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phanloai extends Model
{
    use HasFactory;
    protected $table='phanloai';
    public $timestamps = false;
    protected $fillable=['id','phanloai','slug'];
    public function sanpham(){
      return $this->hasMany(sanpham::class,'phanloai_id','id');
  }

    public function product()
    {
        return $this->hasMany(sanpham::class,'phanloai_id','id');
    }
    public function scopeSearch($query){
        if($tukhoa=request()->tukhoa){
          
          $query=$query->where('phanloai','like','%'.$tukhoa.'%');
        }
        return $query;
  
      }
}
