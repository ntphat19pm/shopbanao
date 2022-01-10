<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    use HasFactory;
    protected $table='baiviet';
    public $timestamps = false;
    protected $fillable=['id','tenbai','mota','avatar','noidung','nguoidang','create_at','status'];
}
