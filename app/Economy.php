<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Economy extends Model
{
    protected $fillable = [
        'name',
        'price',
        'estatus'
    ];
}
