<?php

namespace App\Http\Controllers\Vistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quienesController extends Controller
{
    //
    public function mostrarQ()
    {
        return view('Vista/VistaQuienes');
    }
    public function mostrarUbi()
    {
        return view('Vista/vistaUbicacion');
    }
    public function mostrarQ2()
    {
        return view('Vista/VistaQuienes2');
    }
    public function mostrarUbi2()
    {
        return view('Vista/vistaUbicacion2');
    }
}
