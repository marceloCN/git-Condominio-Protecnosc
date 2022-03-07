<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class casa extends Model
{
    use HasFactory;

    protected $table = "casa"; 

    protected $primaryKey = 'ca_id';
    protected $fillable = [
        'ca_nro',
        'ca_dimension',
        'id_manzana'
    ];
    public $timestamps = false;

    public function manzana()
    {
        return $this->belongsTo(manzana::class, 'id_manzana', 'ma_id');
    }

    public function usuario()
    {
        return $this->hasMany(usuario::class, 'ca_id', 'id_casa');
    }

    //me devuelve el listado de las casas con sus usuarios que viven
    public static function listado(){
        $datos = DB::select("SELECT c.ca_id, u.u_nom, r.r_tipo,r.r_cargo, c.ca_nro, c.ca_dimension, m.ma_nro, con.con_nom
        FROM usuario u, casa c, rol r, manzana m, condominio con
        Where u.id_casa = c.ca_id and u.id_tipo = r.r_id and c.id_manzana = m.ma_id and m.id_condominio = con.con_id");
        return $datos;
    }

    public static function casaLibre(){
        $datos = DB::select("SELECT casa.ca_id, casa.ca_nro, casa.ca_dimension, m.ma_nro, co.con_nom
        from casa, manzana m, condominio co
        where casa.ca_id not in (
        select ca.ca_id
        from  casa ca, usuario u
        where ca.ca_id = u.id_casa 
        group by ca.ca_id)
        and casa.id_manzana = m.ma_id and m.id_condominio = co.con_id
        ");
        return $datos;
    }

    public static function listar(){
        $datos = DB::select("SELECT c.ca_id from casa c, usuario u where c.ca_id = u.id_casa and u.id_propietario is null;");
        return $datos;
    }

}
