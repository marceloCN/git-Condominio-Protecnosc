<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comunicado;

class ComunicadoController extends Controller
{
    public function create()
    {
        return view('comunicado.registrar');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'hora' => 'required|max:5',
            'asunto' => 'required|max:50',
            'tipo' => 'required'
        ]);

        $comunicado = comunicado::create([
            'c_fecha' => $request->fecha,
            'c_hora' => $request->hora,
            'c_asunto' => $request->asunto,
            'c_tipo' => $request->tipo,
            'id_usuario' => auth()->user()->usuario->u_id
            
            
        ]);

        return redirect()->route('comunicado.registrar')
            ->with('mensaje', 'El comunicado ha sido registrado');
    }

    public function listar()
    {
        $comunicados = comunicado::listado();
        return view('comunicado.listar', compact('comunicados'));
    }

}
