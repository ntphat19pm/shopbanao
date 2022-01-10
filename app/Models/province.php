<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='province';
    protected $fillable=['maqh','name_quanhuyen','type','matp'];
    public function nhanvien(){
        return $this->hasMany(nhanvien::class,'nhanvien_id','id');
    }
}
