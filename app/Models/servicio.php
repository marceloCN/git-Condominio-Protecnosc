<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class servicio extends Model
{
    use HasFactory;
    
    protected $table = 'servicio';
    protected $primaryKey = 's_id';
    public $timestamps = false;
    protected $fillable = ['s_monto', 's_fecha', 'id_casa','id_serviciopublico','id_notaventa'];

    public function casa()
    {
        return $this->belongsTo(casa::class, 'id_casa', 'ca_id');
    }

    public function notaventa()
    {
        return $this->belongsTo(notaventa::class, 'id_notaventa', 'nv_id');
    }

    public function servicio_publico()
    {
        return $this->belongsTo(servicio_publico::class, 'id_serviciopublico', 'sp_id');
    }
    
    public static function eliminar($id){
        $resp = DB::select("DELETE from servicio where id_serviciopublico = $id");
        return $resp;
    }

    public static function ServicioUserTodo($id){
        $resp = DB::select("SELECT s.s_id, sp.sp_nom, s.s_monto, s.s_fecha, s.id_notaventa from casa c, usuario u, servicio_publico sp, servicio s
        where u.u_id = $id and u.id_casa= c.ca_id and c.ca_id = s.id_casa and s.id_serviciopublico = sp.sp_id");
        return $resp;
    }

    public static function ServicioUserPagado($id){
        $resp = DB::select("SELECT s.s_id, sp.sp_nom, s.s_monto, s.s_fecha from casa c, usuario u, servicio_publico sp, servicio s
        where u.u_id = $id and u.id_casa= c.ca_id and c.ca_id = s.id_casa and s.id_serviciopublico = sp.sp_id and s.id_notaventa is not null;");
        return $resp;
    }
}

