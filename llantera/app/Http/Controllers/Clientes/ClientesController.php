<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Clientes\Clientes;
use App\Exports\ClientesExport;
use resource\views\Cliente\verCliente;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;



class ClientesController extends Controller
{
    //
    public function altaCliente()
    {
        return view('Cliente/AltaCliente');
    }

    public function altaClient(Request $p)
    {
        $nombre = $p ->nombre;    
        $apellido = $p ->apellido;
        $telefono = $p ->telefono;
        $correo = $p ->correo;
        $estado=$p->estado;
        $municipio=$p->municipio;
        $ciudad=$p->ciudad;
        $colonia=$p->colonia;
        $calle=$p->calle;
        $num=$p->num;
        $CP=$p->CP;


        Clientes::create([
            'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'correo' => $correo, 'estado'=>$estado,'municipio'=>$municipio,'ciudad'=>$ciudad,'colonia'=>$calle,'calle'=>$calle,'numExt'=>$num,'CP'=>$CP
        ]);

        return redirect()->to('AltaCliente');

    }
    public function mostrarCliente(){
        $verClientes=Clientes::all();
        //return $verClientes;
        return view('Cliente/verCliente')->with('nombre',$verClientes);
    }

    public function editarC($id){

        $verCliente = Clientes::select('idCliente','nombre','apellido','telefono','correo','estado','municipio','ciudad','colonia','calle','numExt','CP')
        ->where('idCliente',$id)
        ->first();
        
        return view('Cliente/editarCliente')->with('cliente',$verCliente);

    }

    public function actualizarC(Request $var ){

        $idCliente = $var->idCliente;
        $nombre = $var->nombre;    
        $apellido = $var->apellido;
        $telefono = $var->telefono;
        $correo = $var->correo;
        $estado=$var->estado;
        $municipio=$var->municipio;
        $ciudad=$var->ciudad;
        $colonia=$var->colonia;
        $calle=$var->calle;
        $num=$var->num;
        $CP=$var->CP;

        $verCliente = Clientes::select('idCliente','nombre','apellido','telefono','correo','estado','municipio','ciudad','colonia','calle','numExt','CP')
        ->where('idCliente',$idCliente)
        ->update([
            'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'correo' => $correo, 'estado'=>$estado,'municipio'=>$municipio,'ciudad'=>$ciudad,'colonia'=>$calle,'calle'=>$calle,'numExt'=>$num,'CP'=>$CP
        ]);

        return redirect()->to('verCliente');

    }
    public function eliminarC($idCliente ){

        $verCliente = Clientes::select('idCliente','nombre')
        ->where('idCliente',$idCliente)
        ->delete();

        return redirect()->to('verCliente');

    }


    public function exportExcel(){

        return Excel::download(new ClientesExport, 'clientes-Excel.xlsx');
    
    }

    public function exportCSV(){

        
        return Excel::download(new ClientesExport, 'clientes-CSV.csv');

    }

    public function createPDF() {
        // retreive all records from db
        //$x = Clientes::all();
        $x = Clientes::select('idCliente','nombre','apellido','telefono','correo','estado','municipio','ciudad','colonia','calle','numExt','CP')->get();
        // share data to view
        view()->share('nombre',$x);
        //$pdf = PDF::loadView('Cliente/verCliente', $x);
        $pdf = PDF::loadView('Cliente/showCliente', $x)->setPaper('a3', 'landscape')->setWarnings(false);
        // download PDF file with download method
        return $pdf->download('cliente.pdf');
      }


}