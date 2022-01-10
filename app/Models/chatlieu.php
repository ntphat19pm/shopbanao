<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatlieu extends Model
{
    use HasFactory;
    protected $table='chatlieu';
    public $timestamps = false;
    protected $fillable=['id','chatlieu','slug'];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'chatlieu_id','id');
    }
    public function product()
    {
        return $this->hasMany(sanpham::class,'chatlieu_id','id');
    }
    public function scopeSearch($query){
        if($tukhoa=request()->tukhoa){
          
          $query=$query->where('chatlieu','like','%'.$tukhoa.'%');
        }
        return $query;
  
      }
}
