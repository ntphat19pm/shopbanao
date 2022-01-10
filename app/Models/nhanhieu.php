<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanhieu extends Model
{
    use HasFactory;
    protected $table='nhanhieu';
    public $timestamps = false;
    protected $fillable=['id','nhanhieu','slug'];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'nhanhieu_id','id');
    }
  
      public function product()
      {
          return $this->hasMany(sanpham::class,'nhanhieu_id','id');
      }
      public function scopeSearch($query){
          if($tukhoa=request()->tukhoa){
            
            $query=$query->where('nhanhieu','like','%'.$tukhoa.'%');
          }
          return $query;
    
        }
}
