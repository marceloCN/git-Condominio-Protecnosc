<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manzana extends Model
{
    use HasFactory;

    protected $table = "manzana"; 

    protected $primaryKey = 'ma_id';
    protected $fillable = [
        'ma_nro',
        'ma_tipo',
        'ma_dimension',
        'id_condominio'
    ];
    public $timestamps = false;

    public function condominio()
    {
        return $this->belongsTo(condominio::class, 'id_condominio', 'con_id');
    }

}

