<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table='city';
    protected $fillable=['matp','name_city'];
    public function nhanvien(){
        return $this->hasMany(nhanvien::class,'nhanvien_id','id');
    }
}
