<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manzana;
use App\Models\reserva;

class ReservaController extends Controller
{
    public function create()
    {
        $manzanas=manzana::join('condominio','manzana.id_condominio','=','condominio.con_id')
        ->select('manzana.ma_id','manzana.ma_tipo','condominio.con_nom','manzana.ma_dimension')->whereIn('manzana.ma_tipo', ['parque', 'rural', 'area verde'])->get();
        
        //return $manzanas;
        return view('reserva.registrar',compact('manzanas'));
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'id_manzana' => 'required',
            'fecha' => 'required',
            'horaini' => 'required|max:4',
            'horafin' => 'required|max:4',
            'acontecimiento' => 'required|max:50',
            'descripcion' => 'required|max:50',
        ]);

        //convirtiendo string a int
        $horaMen = intval($request->horaini);
        $horaMay = intval($request->horafin);
        
        if ($horaMen>$horaMay && ($horaMen>=0 && $horaMen<=2359) && ($horaMay>=0 && $horaMay<=2359)){
            return back()->withErrors([
                'ERROR!!! La hora de inicio debe ser menor que la hora fin.',
            ]);
        }

        

        $resultado=reserva::where('res_fecha','=',$request['fecha'])
        ->where('id_manzana','=',$request['id_manzana'])
        ->get();
        
        foreach ($resultado as $valor) {
            if ((intval($valor->res_hini) <= $horaMen && $horaMen <=intval($valor->res_hfin)) ||
                (intval($valor->res_hini) <= $horaMay && $horaMay <=intval($valor->res_hfin))){
                    return back()->withErrors([
                        'ERROR!!! No puede registrar esa reserva en ese horario y area comun.',
                    ]);
            }
        }

        $reserva = reserva::create([
            'id_usuario' => auth()->user()->usuario->u_id,
            'id_manzana' => $request->id_manzana,
            'res_acontecimiento' => $request->acontecimiento,
            'res_descripcion' => $request->descripcion,
            'res_fecha' => $request->fecha,
            'res_hini' => $request->horaini,
            'res_hfin' => $request->horafin
        ]);
        
        return redirect()->route('reserva.registrar')
            ->with('mensaje', 'La reserva ha sido registrado');

    }

    public function listar()
    {
        $reservas = reserva::all();
        return view('reserva.listar', compact('reservas'));
        // $reservas=reserva::select('c_id','c_tipo','c_fecha','c_hora','c_asunto')->orderBy('c_fecha','desc')->take(5)->get();
        // return view('reserva.listar', compact('reservas'));
    }


}
