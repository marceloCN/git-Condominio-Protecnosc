<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class comunicado extends Model
{
    use HasFactory;

    protected $table = 'comunicado';
    protected $primaryKey = 'c_id';
    public $timestamps = false;
    protected $fillable = ['c_fecha', 'c_hora', 'c_asunto','c_tipo','id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }

    public static function listado(){
        $datos = DB::select("SELECT c.c_id, u.u_nom, c.c_fecha, c.c_hora, c.c_asunto, c.c_tipo 
            FROM comunicado c, usuario u
            Where u.u_id = c.id_usuario");
        return $datos;
    }

}

