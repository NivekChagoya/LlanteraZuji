<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use App\Exports\ProductoExport;
use Illuminate\Http\Request;
use App\Models\Productos\Productos;
use App\Exports\EmpleadoExport;
use resource\views\Empleado\verEmpleado;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
class ProductosController extends Controller
{
    public function alta(){
        return view("Producto/registroProducto");
    }
    
    public function altaP(Request $pro){
        $marca=$pro->marca;
        $modelo=$pro->modelo;
        $rin=$pro->rin;
        $ancho=$pro->ancho;
        $serie=$pro->serie;
        $indice=$pro->indice;
        $stock=$pro->stock;
        $precio=$pro->precio;
        
        Productos::create([
            'marca'=>$marca, 'modelo'=>$modelo,'rin'=>$rin,'ancho'=>$ancho,'serie'=>$serie,'indiceVel'=>$indice,'stock'=>$stock,'precio'=>$precio
        ]);
        return redirect()->to('verProducto');
    }
    
    public function mostrarProducto(){
        $verProductos=Productos::all();
        //return $verProductos;
        return view('Producto/verProducto')->with('nombre',$verProductos);
    }
    

    public function editarProducto($id){

        $verProductos = Productos::select('idProducto','marca','modelo','rin','ancho','serie','indiceVel','stock','precio')
        ->where('idProducto',$id)
        ->first();
        
        return view('Producto/editarProducto')->with('producto',$verProductos);

    }

    public function actualizarProducto(Request $var ){

        $idProducto=$var->idProducto;
        $marca=$var->marca;
        $modelo=$var->modelo;
        $rin=$var->rin;
        $ancho=$var->ancho;
        $serie=$var->serie;
        $indice=$var->indiceVel;
        $stock=$var->stock;
        $precio=$var->precio;
        
        $verProductos = Productos::select('idProducto','marca','modelo','rin','ancho','serie','indiceVel','stock','precio')
        ->where('idProducto',$idProducto)
        ->update([
            'marca'=>$marca, 'modelo'=>$modelo,'rin'=>$rin,'ancho'=>$ancho,'serie'=>$serie,'indiceVel'=>$indice,'stock'=>$stock,'precio'=>$precio
        ]);

        return redirect()->to('verProducto');

    }
    public function eliminarProducto($idProducto){
        
        $verProductos = Productos::select('idProducto','marca')
        ->where('idProducto',$idProducto)
        ->delete();

        return redirect()->to('verProducto');

    }
    public function exportExcel(){

        return Excel::download(new ProductoExport, 'productos-Excel.xlsx');
    
    }

    public function exportCSV(){

        
        return Excel::download(new ProductoExport, 'productos-CSV.csv');

    }

    public function createPDF() {
        // retreive all records from db
        $x = Productos::select('idProducto','marca','modelo','rin','ancho','serie','indiceVel','stock','precio')->get();
        // share data to view
        view()->share('nombre',$x);
        $pdf = PDF::loadView('Producto/verProducto', $x)->setPaper('a3', 'landscape')->setWarnings(false);
        // download PDF file with download method
        return $pdf->download('producto.pdf');
      }
}
