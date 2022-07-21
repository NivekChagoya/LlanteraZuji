<?php

namespace App\Http\Controllers\Vistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos\Productos;
class productosUsController extends Controller
{
    //
    public function mostrarProductoUsuario(){
        $verProductos=Productos::all();
        return view('Vista/vistaProductosU')->with('nombre',$verProductos);
    }

    public function mostrarProductoUsuario2(){
        $verProductos=Productos::all();
        return view('Vista/vistaProductosU2')->with('nombre',$verProductos);
    }
}
