<?php

namespace App\Models\Direccion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direccion';
    protected $primarykey = 'idDireccion';
    protected $timestamps = false;
    protected $fillable = [
        'idDireccion', 'estado', 'municipio', 'ciudad', 'colonia', 'calle', 'numext', 'cp'
    ];
}
