<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";
    protected $primaryKey = 'u_id';
    protected $fillable = [
        'u_nom',
        'u_app',
        'u_ci',
        'u_sex',
        'u_telf',
        'u_email',
        'u_ocupacion',
        'id_acceso',
        'id_tipo',
        'id_propietario',
        'id_casa'
    ];
    public $timestamps = false;

    public function acceso()
    {
        return $this->belongsTo(acceso::class, 'id_acceso', 'a_id');
    }

    public function rol()
    {
        return $this->belongsTo(rol::class, 'id_tipo', 'r_id');
    }

    // error si lo hay
    public function propietario()
    {
        return $this->belongsTo(usuario::class, 'id_propietario', 'u_id');
    }

    public function casa()
    {
        return $this->belongsTo(casa::class, 'id_casa', 'ca_id');
    }

    public static function listadoXusuario($tipoUser){
        $datos=null;
        if ($tipoUser == "ADMINISTRADOR"){
            $datos = DB::select("SELECT u.u_id, u.u_nom, u.u_app,r.r_tipo,r.r_cargo
            FROM usuario u, rol r
            Where u.id_tipo = r.r_id and r.r_cargo <> 'INQUILINO' and r.r_tipo <> 'ADMINISTRADOR' and u.id_propietario is null
            and u.id_casa is null order by u.u_id asc");
        }elseif ($tipoUser == "COMITE"){
            $datos = DB::select("SELECT u.u_id, u.u_nom, u.u_app,r.r_tipo,r.r_cargo from usuario u, rol r
            where u.id_tipo = r.r_id and r.r_cargo = 'DUEÑO' and r.r_tipo = 'PROPIETARIO' and u.id_propietario is null
            and u.id_casa is null
            order by u.u_id asc");
        }else{
            $datos = DB::select("SELECT u.u_id, u.u_nom, u.u_app,r.r_tipo,r.r_cargo
            from usuario u, rol r
            where u.id_tipo = r.r_id and r.r_cargo = 'INQUILINO' and r.r_tipo = 'PROPIETARIO' and u.id_propietario is null
            and u.id_casa is null
            order by u.u_id asc");
        }
        return $datos;
    }

    public static function listarTodo(){
        $datos = DB::select("SELECT u.u_id, u.u_nom, u.u_app,r.r_tipo,r.r_cargo,r.r_fechafin
        FROM usuario u, rol r
        Where u.id_tipo = r.r_id and r.r_cargo <> 'INQUILINO' and r.r_tipo <> 'ADMINISTRADOR'");
        return $datos;
    }
}

