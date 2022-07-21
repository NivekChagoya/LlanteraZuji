<?php

namespace App\Models\Usuarios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'idUser';
    public $timestamps=false;
    protected $fillable=[
        'idUser','users','password','rol','email'
    ];
}
