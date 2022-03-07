<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notaventa extends Model
{
    use HasFactory;

    protected $table = 'notaventa';
    protected $primaryKey = 'nv_id';
    public $timestamps = false;
    protected $fillable = ['nv_fecha', 'nv_monto', 'id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }

}


