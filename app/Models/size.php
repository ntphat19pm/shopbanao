<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    protected $table='size';
    public $timestamps = false;
    protected $fillable=['id','size'];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'size_id','id');
    }
}
