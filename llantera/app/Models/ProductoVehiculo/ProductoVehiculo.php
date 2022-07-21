<?php

namespace App\Models\ProductoVehiculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVehiculo extends Model
{
    use HasFactory;

    protected $table = 'productovehiculo';
    protected $primarykey = '';
    public $timestamps = false;
    protected $fillable = [
        'idVehi', 'idProduc'
    ];
}
