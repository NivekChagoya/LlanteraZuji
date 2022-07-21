<?php

namespace App\Models\Vehiculos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';
    protected $primarykey = 'idVehiculo';
    public $timestamps = false;
    protected $fillable = [
        'idVehiculo', 'año', 'fabricante', 'modelo'
    ];
}
