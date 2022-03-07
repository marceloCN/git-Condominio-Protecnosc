<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mensaje;

class MensajeController extends Controller
{
    public function create()
    {
        return view('mensaje.registrar');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'asunto' => 'required',
            'estado' => 'required',
            'body' => 'required|max:50',
            
        ]);

        $fecha=date('Y-m-d');

        $mensaje = mensaje::create([
            'm_asunto' => $request->asunto,
            'm_body' => $request->body,
            'm_fecha' => $fecha,
            'm_estado' => $request->estado,
            'id_usuario' => auth()->user()->usuario->u_id
        ]);

        return redirect()->route('mensaje.registrar')
            ->with('mensaje', 'el mensaje ha sido registrado');
    }

    public function listar()
    {
        $mensajes = mensaje::where('m_estado','enviado')->orderBy('m_fecha','desc')->get();
        return view('mensaje.listar', compact('mensajes'));
    }

    public function listarPersonal(){
        $mensajes = mensaje::where('id_usuario',auth()->user()->usuario->u_id)->orderBy('m_fecha','desc')->get();
        return view('mensaje.listarPersonal', compact('mensajes'));
    }

    public function Ver($MensajeId){
        $mensaje = mensaje::findOrFail($MensajeId);
        return view('mensaje.modificar', compact('mensaje'));
    }

    public function modificar(Request $request){
        $request->validate([
            'idMensaje' => 'required',
            'asunto' => 'required',
            'estado' => 'required',
            'body' => 'required|max:50',
            
        ]);

        $fecha=date('Y-m-d');

        $mensaje = mensaje::findOrFail($request->idMensaje);
        $mensaje->m_asunto = $request->asunto;
        $mensaje->m_body = $request->body;
        $mensaje->m_fecha = $fecha;
        $mensaje->m_estado = $request->estado;
        $mensaje->save();
        return redirect()
            ->route('listar.mensaje.usuario')
            ->with('mensaje', 'El mensaje ha sido modificado');
    }

    public function delete($MensajeId){
        $mensaje = mensaje::findOrFail($MensajeId);
        $mensaje->delete();
        return redirect()
        ->route('listar.mensaje.usuario')
        ->with('mensaje', 'El mensaje ha sido eliminado');
    }
    


}
