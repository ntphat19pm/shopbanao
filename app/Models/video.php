<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $table='video';
    public $timestamps = false;
    protected $fillable=['id','tenvideo','link','mota','slug','ngaydang','status'];
}
