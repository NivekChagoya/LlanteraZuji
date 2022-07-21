<?php

namespace App\Http\Controllers\Empleados;

use App\Http\Controllers\Controller;
use App\Exports\EmpleadoExport;
use Illuminate\Http\Request;
use App\Models\Empleados\Empleados;
use Maatwebsite\Excel\Facades\Excel;
use resource\views\Empleado\verEmpleado;
use Barryvdh\DomPDF\Facade as PDF;
class EmpleadosController extends Controller
{
    //
    public function altaEmpleado()
    {
        return view('Empleado/AltaEmpleado');
    }

    public function altaEmployee(Request $p)
    {
        $nombre = $p ->nombre;    
        $apellido = $p ->apellido;
        $telefono = $p ->telefono;
        $correo = $p ->correo;
        

        Empleados::create([
            'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'correo' => $correo
        ]);

        return redirect()->to('AltaEmpleado');

    }
    public function mostrarEmpleado(){
        $verEmpleado=Empleados::all();
        return view('Empleado/verEmpleado')->with('nombre',$verEmpleado);
    }

    public function editarEmpleado($id){

        $verEmpleado = Empleados::select('idEmpleado','nombre','apellido','telefono','correo')
        ->where('idEmpleado',$id)
        ->first();
        
        return view('Empleado/editarEmpleado')->with('empleado',$verEmpleado);

    }

    public function actualizarEmpleado(Request $var ){

        $idEmpleado = $var->idEmpleado;
        $nombre = $var->nombre;    
        $apellido = $var->apellido;
        $telefono = $var->telefono;
        $correo = $var->correo;
        
        $verEmpleado = Empleados::select('idEmpleado','nombre','apellido','telefono','correo')
        ->where('idEmpleado',$idEmpleado)
        ->update([
            'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'correo' => $correo
        ]);

        return redirect()->to('verEmpleado');

    }

    public function eliminarEmpleado($id)
    {
        $verEmpleado = Empleados::select('id')
        ->where('idEmpleado',$id)
        ->delete();

        return redirect()->to('verEmpleado');
    }
    public function exportExcel(){

        return Excel::download(new EmpleadoExport, 'empleados-Excel.xlsx');
    
    }

    public function exportCSV(){

        
        return Excel::download(new EmpleadoExport, 'empleados-CSV.csv');

    }

    public function createPDF() {
        // retreive all records from db
        $x = Empleados::select('idEmpleado','nombre','apellido','telefono','correo')->get();
        // share data to view
        view()->share('nombre',$x);
        $pdf = PDF::loadView('Empleado/verEmpleado', $x)->setPaper('a3', 'landscape')->setWarnings(false);
        // download PDF file with download method
        return $pdf->download('empleado.pdf');
      }
}
