<?php

namespace App\Http\Controllers\Pagos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagos\Pagos;
use App\Exports\PagoExport;
use resource\views\Pago\verPago;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
class PagosController extends Controller
{
    //
    public function altaPag(){
        return view('Pago/AltaPago');
    }
    public function altaPa(Request $p){
        $forma = $p->forma;
        $titular = $p->titular;
        $numero = $p->numero;
        $fecha = $p->fecha;
        $ccv = $p->ccv;
        $banco = $p->banco;
        
        Pagos::create([
            'formaPago' => $forma, 'titular' => $titular, 'numTarjeta' => $numero, 'fecha_Exp' => $fecha, 'ccv' => $ccv, 'banco' => $banco 
        ]);

        return redirect()->to('AltaPago');
    }
    
    public function mostrarPago(){
        $verPagos=Pagos::all();
        return view('Pago/verPago')->with('forma',$verPagos);
    }
    public function exportExcel(){

        return Excel::download(new PagoExport, 'pagos-Excel.xlsx');
    
    }

    public function exportCSV(){

        
        return Excel::download(new PagoExport, 'pagos-CSV.csv');

    }

    public function createPDF() {
        // retreive all records from db
        $x = Pagos::select('formaPago', 'titular', 'numTarjeta', 'fecha_Exp', 'ccv', 'banco')->get();
        // share data to view
        view()->share('forma',$x);
        $pdf = PDF::loadView('Pago/verPago', $x)->setPaper('a3', 'landscape')->setWarnings(false);
        // download PDF file with download method
        return $pdf->download('pago.pdf');
      }
}
