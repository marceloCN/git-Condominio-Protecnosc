<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
    
    protected $table = 'reserva';
    protected $primaryKey = 'res_id';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario', 
        'id_manzana', 
        'res_acontecimiento',
        'res_descripcion',
        'res_fecha',
        'res_hini',
        'res_hfin'
    ];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }

    public function manzana()
    {
        return $this->belongsTo(manzana::class, 'id_manzana', 'ma_id');
    }


}

