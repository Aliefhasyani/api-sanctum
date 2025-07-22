<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warship extends Model
{
    protected $table = 'warship';
    protected $fillable = ['name','type','country'];
}
