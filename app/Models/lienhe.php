<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    use HasFactory;
    protected $table='lienhe';
    public $timestamps = false;
    protected $fillable=['id','email','diachi','sdt','map','logo','fanpage','banner','zalo','facebook','mess'];
}
