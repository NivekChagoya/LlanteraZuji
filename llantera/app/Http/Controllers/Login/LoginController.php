<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Clientes\Clientes;
use App\Models\Usuarios\Usuarios;
    
class LoginController extends Controller
{
    public function log(){
        $usuario=request()->only('email','password');

        if (Auth::attempt($usuario)) {
            request()->session()->regenerate();
            return redirect('inicio2');
        }
        return redirect('AltaCliente2');   

     }

     public function logA(){
        $usuario=request()->only('email','password');

        if (Auth::attempt($usuario)) {
            request()->session()->regenerate();
            return redirect('inicio3');
        }
        return redirect('AltaCliente2');   

     }

    public function register(){
         return view('Cliente/AltaCliente2');
    }

    public function altaUs(Request $pro){
        
        $nombre = $pro ->nombre;    
        $apellido = $pro ->apellido;
        $telefono = $pro ->telefono;
        $correo = $pro ->correo;
        $estado=$pro->estado;
        $municipio=$pro->municipio;
        $ciudad=$pro->ciudad;
        $colonia=$pro->colonia;
        $calle=$pro->calle;
        $num=$pro->num;
        $CP=$pro->CP;
        $password=bcrypt($pro->password);

        Clientes::create([
            'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'correo' => $correo, 'estado'=>$estado,'municipio'=>$municipio,'ciudad'=>$ciudad,'colonia'=>$calle,'calle'=>$calle,'numExt'=>$num,'CP'=>$CP
        ]);

        Usuarios::create([
            'users'=>$nombre, 'password'=>$password, 'rol'=>'cliente' , 'email'=>$correo
        ]);

        return redirect()->to('AltaCliente2');
    }


}
