<?php

namespace App\Http\Controllers;
use App\Models\servicio_publico;
use App\Models\casa;
use App\Models\servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function create()
    {
        return view('servicio.registrar');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'monto' => 'required',
            'fechaini' => 'required',
            'fechafin' => 'required',
        ]);

        if ($request->fechaini > $request->fechafin){
            return back()->withErrors([
                'LA FECHA DE INICIO TIENE QUE SER MENOR QUE LA FECHA A TERMINAR.',
            ]);
        }

        if (intval($request->monto) < 0){
            return back()->withErrors([
                'POR FAVOR INTRODUCIR UN MONTO MAYOR A CERO.',
            ]);
        }

        $servicio_publico = servicio_publico::create([
            'sp_nom' => $request->nombre,
            'sp_monto' => $request->monto,
            'sp_fini' => $request->fechaini,
            'sp_ffin' => $request->fechafin,
            'id_usuario' => auth()->user()->usuario->u_id
        ]);

        return redirect()->route('servicio.registrar')
            ->with('mensaje', 'EL SERVICIO A SIDO REGISTRADO');
    }

    public function listar(){
        $servicio_publicos = servicio_publico::all();
        return view('servicio.listar', compact('servicio_publicos'));
    }

    public function listarAlta(){
        $servicio_publicos = servicio_publico::listarAlta();
        return view('servicio.listarAlta', compact('servicio_publicos'));
    }

    public function listarBaja(){
        $servicio_publicos = servicio_publico::listarBaja();
        return view('servicio.listarBaja', compact('servicio_publicos'));
    }

    public function Ver($ServicioId){
        $servicio_publico = servicio_publico::findOrFail($ServicioId);
        return view('servicio.modificar', compact('servicio_publico'));
    }

    public function modificar(Request $request){
        $request->validate([
            'idsp' => 'required',
            'nombre' => 'required|max:50',
            'monto' => 'required',
            'fechaini' => 'required',
            'fechafin' => 'required',
        ]);

        if ($request->fechaini > $request->fechafin){
            return back()->withErrors([
                'LA FECHA DE INICIO TIENE QUE SER MENOR QUE LA FECHA A TERMINAR.',
            ]);
        }

        if (intval($request->monto) < 0){
            return back()->withErrors([
                'POR FAVOR INTRODUCIR UN MONTO MAYOR A CERO.',
            ]);
        }

        $servicio_publico = servicio_publico::findOrFail($request->idsp);
        $servicio_publico->sp_nom = $request->nombre;
        $servicio_publico->sp_monto = $request->monto;
        $servicio_publico->sp_fini = $request->fechaini;
        $servicio_publico->sp_ffin = $request->fechafin;
        $servicio_publico->id_usuario = auth()->user()->usuario->u_id;
        $servicio_publico->save();

        return redirect()
            ->route('servicio.listar')
            ->with('mensaje', 'El servicio a sido modificado');
    }

    public function delete($ServicioId){
        $servicio_publico = servicio_publico::findOrFail($ServicioId);
        $servicio_publico->delete();
        return redirect()
        ->route('servicio.listar')
        ->with('mensaje', 'El servicio a sido eliminado');
    }

    public function altaServicio($ServicioId){
        $servicio_publico = servicio_publico::findOrFail($ServicioId);
        $casas = casa::listar();
        $cantCasas = sizeof($casas); 
        $montoUnitario = $servicio_publico['sp_monto']/$cantCasas;
        $fecha = $servicio_publico['sp_ffin'];
        $servicio = null;
        foreach ($casas as $casa) {
            $servicio = servicio::create([
                's_monto' => $montoUnitario,
                's_fecha' => $fecha,
                'id_casa' => $casa->ca_id,
                'id_serviciopublico' => $servicio_publico['sp_id'],
                'id_notaventa' => null
            ]);
        }

        return redirect()
            ->route('servicio.listar.alta')
            ->with('mensaje', 'EL SERVICIO A SIDO ACTIVADO');

    }

    public function bajaServicio($ServicioId){
        $servicio = servicio::eliminar($ServicioId);
        return redirect()
        ->route('servicio.listar.baja')
        ->with('mensaje', 'EL SERVICIO SE HA DESACTIVADO');

    }

    public function listarTodoUser(){
        $servicio_publicos = servicio::ServicioUserTodo(auth()->user()->usuario->u_id);
        return view('servicio.listarTodoUser', compact('servicio_publicos'));
    }

    public function listarPagadosUser(){
        $servicio_publicos = servicio::ServicioUserPagado(auth()->user()->usuario->u_id);
        //return $servicio_publicos;
        return view('servicio.listarPagadoUser', compact('servicio_publicos'));
    }


}
