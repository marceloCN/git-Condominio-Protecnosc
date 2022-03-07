<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condominio extends Model
{
    use HasFactory;

    protected $table = "condominio"; 

    protected $primaryKey = 'con_id';
    protected $fillable = [
        'con_nom',
        'con_ubic',
        'con_datosub',
        'con_dimension'
    ];
    public $timestamps = false;

    

}

