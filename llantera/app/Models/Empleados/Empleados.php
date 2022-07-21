<?php

namespace App\Models\Empleados;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $primarykey = 'idEmpleado';
    public $timestamps = false;
    public $fillable = [
        'idEmpleado', 'nombre', 'apellido', 'telefono', 'correo'
    ];
}
