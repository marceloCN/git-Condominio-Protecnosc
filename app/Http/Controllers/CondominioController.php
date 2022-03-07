<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\condominio;

class CondominioController extends Controller
{
    public function create()
    {
        return view('condominio.registrar');
    }


    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'ubicacion' => 'required|max:60',
            'datos_ubic' => 'required|max:60',
            'dimension' => 'required|max:10'
        ]);

        $condominio = condominio::where('con_nom', $request['nombre'])->first();
        if ($condominio){
            return back()->withErrors([
                'ERROR!!! el nombre del condominio ya existe.',
            ]);
        }

        $condominio = condominio::create([
            'con_nom' => $request->nombre,
            'con_ubic' => $request->ubicacion,
            'con_datosub' => $request->datos_ubic,
            'con_dimension' => $request->dimension
        ]);

        return redirect()
            ->route('condominio.registrar')
            ->with('mensaje', 'El condominio ha sido registrado');
    }

    public function listar()
    {
        $condominios = condominio::all();
        return view('condominio.listar', compact('condominios'));
    }

    public function verCondominio($CondominioId){
        $condominio = condominio::findOrFail($CondominioId);
        return view('condominio.modificar',compact('condominio'));
    }

    public function modificar(Request $request){
        $request->validate([
            'IdCondominio' => 'required',
            'nombre' => 'required|max:50',
            'ubicacion' => 'required|max:60',
            'datos_ubic' => 'required|max:60',
            'dimension' => 'required|max:10'
        ]);

        $condominio = condominio::findOrFail($request->IdCondominio);
        $condominio->con_nom = $request->nombre;
        $condominio->con_ubic = $request->ubicacion;
        $condominio->con_datosub = $request->datos_ubic;
        $condominio->con_dimension = $request->dimension;
        $condominio->save();
        return redirect()
        ->route('condominio.listar')
        ->with('mensaje','Se modificaron los atributos del condominio');
    }

    public function delete($CondominioId){
        //return "estas eliminando este residente";
        $condominio = condominio::findOrFail($CondominioId);
        $condominio->delete();
        return redirect()
        ->route('condominio.listar')
        ->with('mensaje','El condominio ha sido eliminado');
    }

}
