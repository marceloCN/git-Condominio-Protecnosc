<?php

namespace App\Http\Controllers;
use App\Models\servicio;
use App\Models\notaventa;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function pagar($ServicioId){
        $servicio = servicio::findOrFail($ServicioId);
        return view('pagar.modal_pagar',compact('servicio'));
    }

    public function ServicioPagar(Request $request){
        $servicio = servicio::findOrFail($request->idServicio);
        $date=date('Y-m-d');
        $notaventa = notaventa::create([
            'nv_fecha' => $date,
            'nv_monto' => $servicio->s_monto,
            'id_usuario' => auth()->user()->usuario->u_id
        ]);

        $servicio->id_notaventa = $notaventa->nv_id;
        $servicio->save();

        return redirect()
            ->route('pagos.listar.pagados')
            ->with('mensaje', 'El servicio a sido Pagado');
    }
}
