<?php

namespace App\Http\Controllers\ProductoVehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductoVehiculo\ProductoVehiculo;
class ProductoVehiculoController extends Controller
{
    //
    public function altaProductoVehiculo()
    {
        return view('ProductoVehiculo/AltaProductoVehiculo');
    }

    public function altaPV(Request $p)
    {
        $idproducto = $p ->idproducto;    
        $idvehiculo = $p ->idvehiculo;
        ProductoVehiculo::create([
            'idVehi' => $idvehiculo,'idProduc'=>$idproducto
        ]);

        return redirect()->to('AltaProductoVehiculo');

    }
    public function mostrarProductoVehiculo(){
        $verProductosVehiculos=ProductoVehiculo::all();
        //return $verClientes;
        return view('ProductoVehiculo/verProductoVehiculo')->with('idVehi',$verProductosVehiculos);
    }
}
