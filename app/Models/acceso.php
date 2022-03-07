<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use DB;
class acceso extends Authenticable
{
    use HasFactory;

    protected $table = "acceso"; 

    protected $primaryKey = 'a_id';
    protected $guarded = ['a_id'];
    protected $fillable = [
        'a_acc',
        'a_pass'
    ];
    public $timestamps = false;

    public function usuario()
    {
        return $this->hasOne(usuario::class, 'id_acceso', 'a_id');
    }

    public static function listado(){
        $datos = DB::select("SELECT a.a_id, a.a_acc, a.a_pass, r.r_tipo, r.r_cargo 
            FROM acceso a, usuario u, rol r
            Where a.a_id = u.id_acceso and u.id_tipo = r.r_id;");
        return $datos;
    }

}


