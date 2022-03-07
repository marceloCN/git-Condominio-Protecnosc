<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\CondominioController;
use App\Http\Controllers\ManzanaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CasaController;
use App\Http\Controllers\ComunicadoController;
use App\Http\Controllers\ActaController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PagosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("inicio");

Route::get('/login', [AccesoController::class, 'login'])->name('acceso.ingresar');
Route::post('/login', [AccesoController::class, 'ingresar'])->name('usuario.ingresar');
Route::get('/acceso-listar', [AccesoController::class, 'listar'])->name('acceso.listar');
Route::put('/acceso-editar', [AccesoController::class, 'editar'])->name('acceso.editar');
Route::put('/usuario-editar-residente-acceso', [AccesoController::class, 'editarResidente'])->name('acceso.editarResidente');
Route::post('/logout', [AccesoController::class, 'logout'])->name('logout');

Route::get('/usuario-listar', [UsuarioController::class, 'listar'])->name('usuario.listar');
Route::get('/usuario-listar-inquilinos', [UsuarioController::class, 'listarInquilino'])->name('usuario.listar.inquilinos');
Route::get('/registrar-usuario', [UsuarioController::class, 'create'])->name('usuario.registrar');
Route::post('/registrar-usuario', [UsuarioController::class, 'registrar'])->name('usuario.CrearRegistro');
Route::get('/usuario-perfil', [UsuarioController::class, 'perfil'])->name('usuario.perfil');
Route::put('/usuario-perfil', [UsuarioController::class, 'editar'])->name('usuario.editar');
Route::put('/residente-añadir-casa', [UsuarioController::class, 'residente'])->name('usuario.residente');
Route::put('/residente-inquilino-añadir-casa', [UsuarioController::class, 'residenteInquilino'])->name('usuario.residente.inquilino');
Route::put('/usuario-tipo', [UsuarioController::class, 'modificarTipoCargo'])->name('usuario.tipo');
Route::get('/usuario-editar-residente/{UsuarioId}', [UsuarioController::class, 'perfilResidente'])->name('usuario.modificarResidente');
Route::put('/usuario-editar-residente', [UsuarioController::class, 'editarResidente'])->name('usuario.editarResidente');
Route::delete('/usuario-eliminar-residente/{UsuarioId}', [UsuarioController::class, 'delete'])->name('usuario.eliminarResidente');

Route::get('/registrar-condominio', [CondominioController::class, 'create'])->name('condominio.registrar');
Route::post('/registrar-condominio', [CondominioController::class, 'registrar'])->name('condominio.CrearRegistro');
Route::get('/listar-condominio', [CondominioController::class, 'listar'])->name('condominio.listar');
Route::get('/modificar-condominio/{CondominioId}', [CondominioController::class, 'verCondominio'])->name('condominio.modificar');
Route::put('/modificar-condominio', [CondominioController::class, 'modificar'])->name('condominio.crearModificar');
Route::delete('/eliminar-condominio/{CondominioId}', [CondominioController::class, 'delete'])->name('condominio.eliminar');

Route::get('/registrar-area-comun', [ManzanaController::class, 'create'])->name('manzana.registrar');
Route::post('/registrar-area-comun', [ManzanaController::class, 'registrar'])->name('manzana.CrearRegistro');
Route::get('/listar-area-comun', [ManzanaController::class, 'listar'])->name('manzana.listar');

Route::get('/registrar-reserva', [ReservaController::class, 'create'])->name('reserva.registrar');
Route::post('/registrar-reserva', [ReservaController::class, 'registrar'])->name('reserva.CrearRegistro');
Route::get('/listar-reserva', [ReservaController::class, 'listar'])->name('reserva.listar');

Route::get('/registrar-casa', [CasaController::class, 'create'])->name('casa.registrar');
Route::post('/registrar-casa', [CasaController::class, 'registrar'])->name('casa.CrearRegistro');
Route::get('/listar-casa', [CasaController::class, 'listar'])->name('casa.listar');


Route::get('/registrar-comunicado', [ComunicadoController::class, 'create'])->name('comunicado.registrar');
Route::post('/registrar-comunicado', [ComunicadoController::class, 'registrar'])->name('comunicado.CrearRegistro');
Route::get('/listar-comunicado', [ComunicadoController::class, 'listar'])->name('comunicado.listar');

Route::get('/registrar-acta', [ActaController::class, 'create'])->name('acta.registrar');
Route::post('/registrar-acta', [ActaController::class, 'registrar'])->name('acta.CrearRegistro');
Route::get('/listar-acta/{ComunidadoId}', [ActaController::class, 'listar'])->name('acta.listar');

Route::get('/registrar-mensaje', [MensajeController::class, 'create'])->name('mensaje.registrar');
Route::post('/registrar-mensaje', [MensajeController::class, 'registrar'])->name('mensaje.CrearRegistro');
Route::get('/listar-mensaje', [MensajeController::class, 'listar'])->name('listar.mensaje');
Route::get('/listar-mensaje-usuario', [MensajeController::class, 'listarPersonal'])->name('listar.mensaje.usuario');
Route::get('/listar-mensaje-usuario/modificar/{MensajeId}', [MensajeController::class, 'Ver'])->name('mensaje.modificar');
Route::put('/listar-mensaje-usuario/modificar/', [MensajeController::class, 'modificar'])->name('mensaje.crearModificar');
Route::delete('/listar-mensaje-usuario/modificar/{MensajeId}', [MensajeController::class, 'delete'])->name('mensaje.eliminar');

Route::get('/registrar-servicio', [ServicioController::class, 'create'])->name('servicio.registrar');
Route::post('/registrar-servicio', [ServicioController::class, 'registrar'])->name('servicio.CrearRegistro');
Route::get('/listar-servicio', [ServicioController::class, 'listar'])->name('servicio.listar');
Route::get('/listar-servicio-alta', [ServicioController::class, 'listarAlta'])->name('servicio.listar.alta');
Route::get('/listar-servicio-baja', [ServicioController::class, 'listarBaja'])->name('servicio.listar.baja');
Route::get('/listar-servicio/modificar/{ServicioId}', [ServicioController::class, 'Ver'])->name('servicio.modificar');
Route::put('/listar-servicio/modificar', [ServicioController::class, 'modificar'])->name('servicio.crearModificar');
Route::delete('/listar-servicio/modificar/modificar/{ServicioId}', [ServicioController::class, 'delete'])->name('servicio.eliminar');
Route::get('/listar-servicio-baja/Activar-Servicio/{ServicioId}', [ServicioController::class, 'altaServicio'])->name('servicio.altaServicio');
Route::get('/listar-servicio-alta/Desactivar-Servicio/{ServicioId}', [ServicioController::class, 'bajaServicio'])->name('servicio.bajaServicio');

Route::get('/listar-servicio-usuario-todo', [ServicioController::class, 'listarTodoUser'])->name('pagos.listar');
Route::get('/listar-servicio-usuario-pagado', [ServicioController::class, 'listarPagadosUser'])->name('pagos.listar.pagados');
Route::get('/listar-servicio-usuario-todo/Pagar-Servicio/{ServicioId}', [PagosController::class, 'pagar'])->name('servicio.pagarServicio');
Route::post('/listar-servicio-usuario-pagado', [PagosController::class, 'ServicioPagar'])->name('pagar.servicio');

Route::get('/busqueda', [ReporteController::class, 'busqueda'])->name('buscar');