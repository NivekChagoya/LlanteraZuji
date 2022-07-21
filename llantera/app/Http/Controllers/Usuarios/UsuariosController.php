<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios\Usuarios;
class UsuariosController extends Controller
{
    //
    public function altaU(){
        return view("Usuario/AltaUs");
    }
    public function altaUs(Request $pro){
        $users=$pro->users;
        $password=bcrypt($pro->password);
        $rol=$pro->rol;
        $email=$pro->email;
 
        Usuarios::create([
            'users'=>$users, 'password'=>$password, 'rol'=>$rol , 'email'=>$email
        ]);
        return redirect()->to('AltaUs');
    }
    public function mostrarUsuarios(){
        $verUsuarios=Usuarios::all();
        return view('Usuario/verUsuario')->with('users',$verUsuarios);
    }

    public function editarUser($id){

        $verUser = Usuarios::select('idUser','users','password','rol','email')
        ->where('idUser',$id)
        ->first();
        
        return view('Usuario/editarUsers')->with('user',$verUser);

    }

    public function actualizarUser(Request $var ){

        $idUser = $var->idUser;
        $users = $var->users;    
        $password = $var->password;
        $rol = $var->rol;
        $email = $var->email;

        $verUser = Usuarios::select('idUser','users','password','rol','email')
        ->where('idUser',$idUser)
        ->update([
            'users' => $users, 'password' => $password, 'rol' => $rol, 'email' => $email
        ]);

        return redirect()->to('verUsuario');

    }

    public function eliminarUser($id)
        {
            $verUsuario = Usuarios::select('id')
            ->where('idUser',$id)
            ->delete();

            return redirect()->to('verUsuario');
        }
        


}
