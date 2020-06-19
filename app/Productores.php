<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productores extends Model
{
    public $table = 'productores';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'dni',
        'id_cooperativa'
    ];
}
