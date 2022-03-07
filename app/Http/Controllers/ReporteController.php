<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function busqueda(Request $request)
    {
        //return $request; 
        if ($request->busqueda) {
            $busqueda = strtoupper($request->busqueda);
            $text = trim($request->busqueda);
            $result = [];
            if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR' || auth()->user()->usuario->rol->r_tipo == 'COMITE') {

                //si escribe: usuario listar
                $pos = strpos($text, 'usuario');
                if ($pos !== false) {
                    $result['Listar todos los usuario'] = route('usuario.listar');
                    $pos = strpos($text, 'registrar');
                    if ($pos !== false) {
                        $result['Registrar algun usuario'] = route('usuario.registrar');
                    }
                }

                //si escribe: casa registrar
                $pos = strpos($text, 'casa');
                if ($pos !== false) {
                    $result['Listar todas las casas'] = route('casa.listar');
                    $pos = strpos($text, 'registrar');
                    if ($pos !== false) {
                        $result['Añadir una casa (Terreno)'] = route('casa.registrar');
                    }
                }

                //si escribe: comunicado registrar
                $pos = strpos($text, 'comunicado');
                if ($pos !== false) {
                    $result['Listar todos los comunicados'] = route('comunicado.listar');
                    $pos = strpos($text, 'registrar');
                    if ($pos !== false) {
                        $result['Crear un comunicado'] = route('comunicado.registrar');
                    }
                }

                //si escribe: acta
                $pos = strpos($text, 'acta');
                if ($pos !== false) {
                    $result['Crear un acta'] = route('acta.registrar');
                }
            }

            if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR') {
                //si escribe: acceso
                $pos = strpos($text, 'acceso');
                if ($pos !== false) {
                    $result['Listar todos los login de usuarios'] = route('acceso.listar');
                }

                //si escribe: mensaje
                $pos = strpos($text, 'mensaje');
                if ($pos !== false) {
                    $result['Listar todos los mensajes'] = route('listar.mensaje');
                }

                //si escribe: condominio regitrar
                $pos = strpos($text, 'condominio');
                if ($pos !== false) {
                    $result['Listar todos los condominio'] = route('condominio.listar');
                    $pos = strpos($text, 'registrar');
                    if ($pos !== false) {
                        $result['Registrar un condominio'] = route('condominio.registrar');
                    }
                }

                //si escribe: servicio regitrar
                $pos = strpos($text, 'servicio');
                if ($pos !== false) {
                    $result['Listar todos los servicios'] = route('servicio.listar');
                    $pos = strpos($text, 'registrar');
                    if ($pos !== false) {
                        $result['Registrar un servicio'] = route('servicio.registrar');
                    }
                }

                //si escribe: alta
                $pos = strpos($text, 'alta');
                if ($pos !== false) {
                    $result['Listar Servicios Activos'] = route('servicio.listar.alta');
                }

                //si escribe: baja
                $pos = strpos($text, 'baja');
                if ($pos !== false) {
                    $result['Listar Servicios Desactivos'] = route('servicio.listar.baja');
                }
            }

            if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || (auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO' && auth()->user()->usuario->rol->r_cargo == 'DUEÑO')) {
                $pos = strpos($text, 'inquilino');
                if ($pos !== false) {
                    $result['Listar todos tus inquilinos'] = route('usuario.listar.inquilinos');
                }
            }

            //si escribe: reserva regitrar
            $pos = strpos($text, 'reserva');
            if ($pos !== false) {
                $result['Listar todas las reservas'] = route('reserva.listar');
                $pos = strpos($text, 'registrar');
                if ($pos !== false) {
                    $result['Registrar una reserva'] = route('reserva.registrar');
                }
            }

            //si escribe perfil
            $pos = strpos($text, 'perfil');
            if ($pos !== false) {
                $result['Mostrar tu perfil'] = route('usuario.perfil');
            }

            //si escribe: mensaje regitrar
            $pos = strpos($text, 'mensaje');
            if ($pos !== false) {
                $result['Listar todos tus mensajes'] = route('listar.mensaje.usuario');
                $pos = strpos($text, 'registrar');
                if ($pos !== false) {
                    $result['Registrar un mensaje'] = route('mensaje.registrar');
                }
            }

            if (auth()->user()->usuario->rol->r_tipo == 'COMITE' || auth()->user()->usuario->rol->r_tipo == 'PROPIETARIO') {
                //si escribe: pagar listar
                $pos = strpos($text, 'pagar');
                if ($pos !== false) {
                    $result['Listar todos tus Servicios'] = route('pagos.listar');
                    $pos = strpos($text, 'listar');
                    if ($pos !== false) {
                        $result['Listar tus servicios pagados'] = route('pagos.listar.pagados');
                    }
                }
            }

            return view('reporte.busquedas', compact('result', 'text', 'busqueda'));
        }
    }
}
