<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manzana;
use App\Models\casa;


class CasaController extends Controller
{
    public function create()
    {
        $manzanas=manzana::where('ma_tipo','urbano')->get();
        //return $manzanas;
        return view('casa.registrar',compact('manzanas'));
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'nro' => 'required',
            'dimension' => 'required|max:10',
            'id_manzana' => 'required',
            
        ]);

        $casa = casa::where('ca_nro', '=',$request['nro'])->first();
        if ($casa){
            return back()->withErrors([
                'ERROR!!! el nro del casa ya existe en dicha area.',
            ]);
        }

        $casa = casa::create([
            'ca_nro' => $request->nro,
            'ca_dimension' => $request->dimension,
            'id_manzana' => $request->id_manzana,
        ]);

        return redirect()->route('casa.registrar')
            ->with('mensaje', 'La casa ha sido registrado');
    }

    public function listar()
    {
        $casas = casa::listado();
        //return $casas;
        return view('casa.listar', compact('casas'));
    }
}
