<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';
    protected $fillable = ['slide','updated_at','created_at'];
    
}
