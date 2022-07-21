<?php

namespace App\Models\Productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primarykey = 'idProducto';
    public $timestamps=false;
    public $fillable=[
        'idProducto','marca','modelo','rin','ancho','serie','indiceVel','stock','precio'
    ];
}
