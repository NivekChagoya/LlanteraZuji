<?php

namespace App\Http\Controllers\Vistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagos\Pagos;
class pagoUsController extends Controller
{
    //
    public function altaPa(){
        return view('Vista/compraUsuario');
    }
    public function altaPago(Request $p){
        $forma = $p->forma;
        $titular = $p->titular;
        $numero = $p->numero;
        $fecha = $p->fecha;
        $ccv = $p->ccv;
        $banco = $p->banco;
        
        Pagos::create([
            'formaPago' => $forma, 'titular' => $titular, 'numTarjeta' => $numero, 'fecha_Exp' => $fecha, 'ccv' => $ccv, 'banco' => $banco 
        ]);

        return redirect()->to('graciasCompra');
    }
    
}
