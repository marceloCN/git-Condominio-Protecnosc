<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reunion extends Model
{
    use HasFactory;

    protected $table = 'reunion';
    protected $primaryKey = 're_id';
    public $timestamps = false;
    protected $fillable = ['re_comentario', 'id_usuario', 'id_comunicado'];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'u_id');
    }

    public function comunicado()
    {
        return $this->belongsTo(comunicado::class, 'id_comunicado', 'c_id');
    }

}

