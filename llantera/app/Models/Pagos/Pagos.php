<?php

namespace App\Models\Pagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;
    
    protected $table = 'pago';
    protected $primarykey = 'idPago';
    public $timestamps=false;
    public $fillable=[
        'idPago','formaPago','titular','numTarjeta','fecha_Exp','ccv','banco'
    ];
}
