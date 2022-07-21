<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculos\Vehiculos;
class VehiculosController extends Controller
{
    //
    public function altaVehiculo()
    {
        return view('Vehiculo/AltaVehiculo');
    }

    public function altaVehicle(Request $p)
    {
        $anio = $p ->anio;    
        $fabricante = $p ->fabricante;
        $modelo = $p ->modelo;

        Vehiculos::create([
            'año' => $anio, 'fabricante' => $fabricante, 'modelo' => $modelo
        ]);

        return redirect()->to('AltaVehiculo');
    }
    public function mostrarVehiculo(){
        $verVehiculo=Vehiculos::all();
        return view('Vehiculo/verVehiculo')->with('año',$verVehiculo);
    }

    public function editarVehiculo($id){

        $verVehiculo = Vehiculos::select('idVehiculo','año','fabricante','modelo')
        ->where('idVehiculo',$id)
        ->first();
        
        return view('Vehiculo/editarVehiculo')->with('vehiculo',$verVehiculo);

    }

    public function actualizarVehiculo(Request $var ){

        $idVehiculo = $var->idVehiculo;
        $año = $var->año;    
        $fabricante = $var->fabricante;
        $modelo = $var->modelo;
        
        $verVehiculo = Vehiculos::select('idVehiculo','año','fabricante','modelo')
        ->where('idVehiculo',$idVehiculo)
        ->update([
            'año' => $año, 'fabricante' => $fabricante, 'modelo' => $modelo
        ]);

        return redirect()->to('verVehiculo');

    }

    public function eliminarVehiculo($id)
    {
        $verVehiculo = Vehiculos::select('id')
        ->where('idVehiculo',$id)
        ->delete();

        return redirect()->to('verVehiculo');
    }
}
