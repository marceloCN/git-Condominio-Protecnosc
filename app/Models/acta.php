<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acta extends Model
{
    use HasFactory;

    protected $table = 'acta';
    protected $primaryKey = 'ac_id';
    public $timestamps = false;
    protected $fillable = ['ac_tipo', 'ac_accion', 'ac_responsable','ac_conclusion','id_comunicado'];

    public function comunicado()
    {
        return $this->belongsTo(comunicado::class, 'id_comunicado', 'c_id');
    }

}

