<?php

namespace App\Models\Compras;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compra';
    protected $primarykey = 'idCompra';
    public $timestamps = false;
    protected $fillable = [
        'idCompra', 'idProd', 'idClien', 'idEmple', 'fechaCompra', 'cantidad', 'idPag'
    ];
}
