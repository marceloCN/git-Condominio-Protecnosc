<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    
    protected $table = "rol"; 

    protected $primaryKey = 'r_id';
    protected $fillable = [
        'r_tipo',
        'r_cargo',
        'r_fechaini',
        'r_fechafin'
    ];
    public $timestamps = false;

}

