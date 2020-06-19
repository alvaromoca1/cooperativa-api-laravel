<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cooperativas extends Model
{
    public $table = 'cooperativas';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'nombre',
        'fecha',
        'id_pro_lider',
    ];
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'fecha' => 'string',
        'id_pro_lider' => 'string'
    ];
}
