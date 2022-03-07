<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class servicio_publico extends Model
{
    use HasFactory;

    protected $table = 'servicio_publico';
    protected $primaryKey = 'sp_id';
    public $timestamps = false;
    protected $fillable = ['sp_nom', 'sp_monto', 'sp_fini','sp_ffin','id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }


    public static function listarAlta(){
        $datos = DB::select("SELECT sp.*, u.u_nom, u.u_app
        from servicio_publico sp, servicio s, usuario u
        where sp.sp_id = s.id_serviciopublico and sp.id_usuario = u.u_id
        group by sp.sp_id, u.u_nom, u.u_app");
        return $datos;
    }

    public static function listarBaja(){
        $datos = DB::select("SELECT sp.* , u.u_nom, u.u_app
        from servicio_publico sp, servicio s, usuario u
        where sp.sp_id not in(select s.id_serviciopublico from servicio s) and sp.id_usuario = u.u_id
        group by sp.sp_id, u.u_nom, u.u_app");
        return $datos;
    }
}

