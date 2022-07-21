<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primarykey = 'idCliente';
    public $timestamps = false;
    public $fillable = [
        'idCliente', 'nombre', 'apellido', 'telefono', 'correo','estado','municipio','ciudad','colonia','calle','numExt','CP'
    ];

}
