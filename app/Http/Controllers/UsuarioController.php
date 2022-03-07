<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\acceso;
use App\Models\rol;
use App\Models\casa;

use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function listar()
    {
        $usuarios = usuario::all();
        return view('usuario.listar', compact('usuarios'));
    }

    public function listarInquilino()
    {
        $usuarios = usuario::select('u_id','u_nom','u_app','u_ci','u_sex','u_telf','u_email','u_ocupacion')->orderBy('u_nom','asc')->where('id_propietario','=',auth()->user()->usuario->u_id)->get();
        return view('usuario.listarInquilino', compact('usuarios'));
    }

    public function create()
    {
        return view('usuario.registrar');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'username' => 'required|max:40',
            'password' => 'required|max:30',
            'tipo' => 'required',
            'fecha' => 'required',
        
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'ci' => 'required|max:9',
            'telefono' => 'required|max:12',
            'ocupacion' => 'required|max:50',
            'sexo' => 'required|max:1',
            'correo' => 'required|max:50',
        ]);

        $acceso = acceso::where('a_acc', $request['username'])->first();
        if ($acceso){
            return back()->withErrors([
                'Direccion de correo de acceso ya existe.',
            ]);
        }

        $acceso = acceso::create([
            'a_acc' => $request->username,
            'a_pass' => $request->password
        ]);

        $date=date('Y-m-d');
        $rol = null;
        if ($request->cargo){ //si ingreso el cargo
            $rol = rol::create([
                'r_tipo' => $request->tipo,
                'r_cargo' => $request->cargo,
                'r_fechaini' => $date,
                'r_fechafin' => $request->fecha
            ]);
        }else{
            $rol = rol::create([
                'r_tipo' => $request->tipo,
                'r_cargo' => null,
                'r_fechaini' => $date,
                'r_fechafin' => $request->fecha
            ]);
        }

        $usuario = usuario::create([
            'u_nom' => $request->nombre,
            'u_app' => $request->apellido,
            'u_ci' => $request->ci,
            'u_telf' => $request->telefono,
            'u_ocupacion' => $request->ocupacion,
            'u_sex' => $request->sexo,
            'u_email' => $request->correo,
            'id_acceso' => $acceso->a_id,
            'id_tipo' => $rol->r_id
        ]);

        return redirect()
            ->route('usuario.registrar')
            ->with('mensaje', 'El usuario ha sido registrado');
    }

    public function perfil(){
        $usuarios = usuario::listadoXusuario(auth()->user()->usuario->rol->r_tipo);
        $usuarios1 = usuario::listadoXusuario("PROPIETARIO");
        $usuarios2 = usuario::listarTodo();
        $inquilinos = null;
        if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || (auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO' && auth()->user()->usuario->rol->r_cargo == 'DUEÑO')){
            $inquilinos = usuario::where('id_propietario',auth()->user()->usuario->u_id)->get();
        }
        $casas = casa::casaLibre();
        return view('usuario.perfil',compact('usuarios','casas','inquilinos','usuarios1','usuarios2'));
    }

    public function editar(Request $request){
        
        $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'ci' => 'required|max:9',
            'telefono' => 'required|max:12',
            'ocupacion' => 'required|max:50',
            'correo' => 'required|max:50',
        ]);
        $usuario = usuario::findOrFail(auth()->user()->usuario->u_id);
        $usuario->u_nom =$request->nombre;
        $usuario->u_app =$request->apellido;
        $usuario->u_ci =$request->ci;
        $usuario->u_telf =$request->telefono;
        $usuario->u_ocupacion =$request->ocupacion;
        $usuario->u_email =$request->correo;
        $usuario->save();
        return redirect()
            ->route('usuario.perfil')
            ->with('mensaje', 'Se modificaron los datos el usuario');
    }

    public function residente(Request $request){
        $usuario = usuario::findOrFail($request->usuario);
        $usuario->id_casa = $request->casa;
        $usuario->save();
        return redirect()
            ->route('usuario.perfil')
            ->with('mensaje', 'El usuario se añadio a la casa');
    }

    public function residenteInquilino(Request $request){
        $usuario = usuario::findOrFail($request->usuario);
        $usuario->id_propietario = auth()->user()->usuario->u_id;
        $usuario->id_casa = auth()->user()->usuario->id_casa;
        $usuario->save();
        return redirect()
            ->route('usuario.perfil')
            ->with('mensaje', 'El usuario se añadio a tu casa como inquilino');
    }

    public function modificarTipoCargo(request $request){
        //return $request;
        $error = True;
        if ($request->tipo == 'ADMINISTRADOR'){
            $usuario = usuario::findOrFail($request->usuario);
            $rol = rol::findOrFail($usuario->rol->r_id);
            $rol->r_tipo = $request->tipo;
            if ($request->fecha!=null){
                $rol->r_fechafin = $request->fecha;
            }
            $rol->save();
            $error = false;
        }
        if ($request->tipo == 'PROPIETARIO' && ($request->cargo=='INQUILINO' || $request->cargo=='DUEÑO')){
            $usuario = usuario::findOrFail($request->usuario);
            $rol = rol::findOrFail($usuario->rol->r_id);
            $rol->r_tipo = $request->tipo;
            $rol->r_cargo = $request->cargo;
            if ($request->fecha!=null){
                $rol->r_fechafin = $request->fecha;
                $rol->save();
            }else{
                return back()->withErrors([
                    'Por favor coloque la fecha.',
                ]);    
            }     
            $error = false;
        }
        
        if ($request->tipo == 'COMITE' && ($request->cargo=='presidente' || $request->cargo=='vicepresidente' || $request->cargo=='secretario' || $request->cargo=='tesorero')){
            $usuario = usuario::findOrFail($request->usuario);
            $rol = rol::findOrFail($usuario->rol->r_id);
            $rol->r_tipo = $request->tipo;
            $rol->r_cargo = $request->cargo;
            if ($request->fecha!=null){
                $rol->r_fechafin = $request->fecha;
                $rol->save();
            }else{
                return back()->withErrors([
                    'Por favor coloque la fecha.',
                ]);    
            }
            $error = false;
        }       
        
        if ($error){
            return back()->withErrors([
                'Coloque de manera correcta el tipo y cargo de dicho usuario.',
            ]);
        }
        
        return redirect()
            ->route('usuario.perfil')
            ->with('mensaje1', 'Se modifico el tipo y cargo del usuario');
        
    }

    public function perfilResidente($UsuarioId){
        //return $UsuarioId;
        $usuario = usuario::findOrFail($UsuarioId);
        //return $usuario;
        return view('usuario.perfilResidente',compact('usuario'));
    }

    public function editarResidente(Request $request){
        
        $request->validate([
            'idUser' => 'required',
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'ci' => 'required|max:9',
            'telefono' => 'required|max:12',
            'ocupacion' => 'required|max:50',
            'correo' => 'required|max:50',
        ]);
        $usuario = usuario::findOrFail($request->idUser);
        $usuario->u_nom =$request->nombre;
        $usuario->u_app =$request->apellido;
        $usuario->u_ci =$request->ci;
        $usuario->u_telf =$request->telefono;
        $usuario->u_ocupacion =$request->ocupacion;
        $usuario->u_email =$request->correo;
        $usuario->save();
        return redirect()
            ->route('usuario.modificarResidente',$request->idUser)
            ->with('mensaje', 'Se modificaron los datos el usuario');
    }

    public function delete($UsuarioId){
        //return "estas eliminando este residente";
        $usuario = usuario::findOrFail($UsuarioId);
        $usuario->delete();
        return redirect()
        ->route('usuario.listar')
        ->with('mensaje','El usuario ha sido eliminado');
    }



}
