<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acceso;
use App\Models\usuario;
use App\Models\comunicado;
use Illuminate\Support\Facades\Auth;

class AccesoController extends Controller
{
    public function login()
    {
        return view('acceso.login');
    }

    public function ingresar(Request $request)
    {
        $user = acceso::where('a_acc', $request['username'])->first();
        if (!$user) { //si el usuario existe
            return back()->withErrors([
                'Direccion de correo incorrecto.',
            ]);
        }
        if ($user->a_pass != $request['password']) { //si la contraseña es correcta
            return back()->withErrors([
                'Contraseña incorrecta.',
            ]);
        }
        $usuario = usuario::where('id_acceso', $user->a_id)->first();
        Auth::login($user, true);
        $comunicados=comunicado::select('c_id','c_tipo','c_fecha','c_hora','c_asunto')->orderBy('c_fecha','desc')->take(5)->get();
        return view('usuario.dashboard',compact('usuario','comunicados'));
    }

    public function listar()
    {
        $accesos = acceso::listado();
        return view('acceso.listar', compact('accesos'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
            ->route('acceso.ingresar');
    }

    public function editar(Request $request){
        $request->validate([
            'acceso' => 'required|max:40',
            'NewPassword' => 'required|max:30',
            'NewPasswordConfirm' => 'required|max:30'
        ]);
        if ($request->NewPassword != $request->NewPasswordConfirm){
            return redirect()
            ->route('usuario.perfil')
            ->with('sms', 'ERROR!!! las contraseñas son incorrectas');
        }

        $acceso = acceso::findOrFail(auth()->user()->usuario->acceso->a_id);
        $acceso->a_acc = $request->acceso;
        $acceso->a_pass = $request->NewPassword;
        $acceso->save();
        Auth::logout();

        return redirect()
            ->route('acceso.ingresar')
            ->with('mensaje', 'Sus credenciales de acceso fueron modificados');
    }

    public function editarResidente(Request $request){
        
        $request->validate([
            'idUser' => 'required',
            'acceso' => 'required|max:40',
            'NewPassword' => 'required|max:30',
            'NewPasswordConfirm' => 'required|max:30'
        ]);

        

        if ($request->NewPassword != $request->NewPasswordConfirm){
            return redirect()
            ->route('usuario.modificarResidente',$request->idUser)
            ->with('sms', 'ERROR!!! las contraseñas son incorrectas');
        }

        $usuario = usuario::findOrFail($request->idUser);
        $acceso = acceso::findOrFail($usuario->acceso->a_id);
        $acceso->a_acc = $request->acceso;
        $acceso->a_pass = $request->NewPassword;
        $acceso->save();

        return redirect()
            ->route('usuario.modificarResidente',$request->idUser)
            ->with('sms', 'Sus credenciales de acceso fueron modificados');
    }

    


}
