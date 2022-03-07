<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manzana;
use App\Models\condominio;

class ManzanaController extends Controller
{
    public function create()
    {
        $condominios=condominio::all();
        return view('manzano.registrar',compact('condominios'));
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'dimension' => 'required|max:10',
            'nro' => 'required',
            'id_condominio' => 'required',
            
        ]);

        $manzana = manzana::where('ma_nro', '=',$request['nro'])
        ->where('id_condominio','=',$request['id_condominio'])
        ->first();
        if ($manzana){
            return back()->withErrors([
                'ERROR!!! el nro del area comun ya existe.',
            ]);
        }

        $manzana = manzana::create([
            'ma_tipo' => $request->tipo,
            'ma_dimension' => $request->dimension,
            'ma_nro' => $request->nro,
            'id_condominio' => $request->id_condominio
        ]);

        return redirect()->route('manzana.registrar')
            ->with('mensaje', 'El area comun ha sido registrado');
    }

    public function listar()
    {
        $manzanas = manzana::all();
        return view('manzano.listar', compact('manzanas'));
    }
}
