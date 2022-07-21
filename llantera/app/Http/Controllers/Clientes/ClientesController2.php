<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes\Clientes;
class ClientesController2 extends Controller
{
    //
    public function altaCliente2()
    {
        return view('Cliente/AltaCliente2');
    }

    public function altaClient2(Request $p)
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

        return redirect()->to('inicio');

    }

}