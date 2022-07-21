<?php

namespace App\Http\Controllers\Vistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vistas extends Controller
{
    //
    public function mostrarV()
    {
        return view('Vista/inicio');
    }
    public function mostrarV2()
    {
        return view('Vista/inicio2');
    }
    public function mostrarV3()
    {
        return view('Vista/inicio3');
    }
}
