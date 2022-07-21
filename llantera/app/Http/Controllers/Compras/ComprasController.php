<?php

namespace App\Http\Controllers\Compras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compras\Compras;
class ComprasController extends Controller
{
    //
    public function altaCompra()
    {
        return view('Compra/AltaCompra');
    }

    public function altaBuy(Request $p)
    {
        $idProducto = $p ->idProducto;    
        $idCliente = $p ->idCliente; 
        $idEmpleado = $p ->idEmpleado; 
        $fecha_compra = date('Y-m-d'); // 2020-10-10
        $cantidad = $p ->cantidad; 
        $idPago = $p ->idPago; 


        Compras::create([
            'idProd' => $idProducto, 'idClien' => $idCliente, 'idEmple' => $idEmpleado, 'fechaCompra' => $fecha_compra, 'cantidad' => $cantidad, 'idPag' => $idPago
        ]);

        return redirect()->to('AltaCompra');

    }
    public function mostrarCompra(){
        $verCompras=Compras::all();
        return view('Compra/verCompra')->with('idProd',$verCompras);
    }
}
