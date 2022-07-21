<?php

namespace App\Models\Usarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosV extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'idUser';
    public $timestamps=false;
    protected $fillable=[
        'idUser','users','password','rol','email'
    ];
}
