<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    use HasFactory;

    protected $table = "mensaje"; 

    protected $primaryKey = 'm_id';
    protected $fillable = [
        'm_asunto',
        'm_body',
        'm_fecha',
        'm_estado',
        'id_usuario'
    ];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }
    
}
