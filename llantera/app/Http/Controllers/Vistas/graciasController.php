<?php

namespace App\Http\Controllers\Vistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class graciasController extends Controller
{
    //
    public function vistaGra(){
        return view('Vista/graciasCompra');
    }
}
