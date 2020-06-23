<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autos extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Auto',
        'kilometraje',
        'Descripcion'
    ];
}
