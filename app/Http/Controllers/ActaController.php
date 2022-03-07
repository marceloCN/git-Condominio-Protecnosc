<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acta;
use App\Models\comunicado;

class ActaController extends Controller
{
    public function create()
    {
        $comunicados = comunicado::where('c_tipo','reunion')->get();
        return view('acta.registrar',compact('comunicados'));
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'id_comunicado' => 'required',
            'tipo' => 'required',
            'responsable' => 'required|max:50',
            'accion' => 'required|max:50'
        ]);

        $acta = acta::create([
            'ac_tipo' => $request->tipo,
            'ac_accion' => $request->accion,
            'ac_responsable' => $request->responsable,
            'ac_conclusion' => $request->conclusion,
            'id_comunicado' => $request->id_comunicado
        ]);

        return redirect()->route('acta.registrar')
            ->with('mensaje', 'El acta ha sido registrado');
    }

    public function listar($ComunidadoId)
    {
        $actas = acta::where('id_comunicado',$ComunidadoId)->get();
        $comunicado = comunicado::findOrFail($ComunidadoId);
        return view('acta.listar', compact('comunicado','actas'));
    }

}
