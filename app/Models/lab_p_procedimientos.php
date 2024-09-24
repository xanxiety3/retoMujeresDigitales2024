<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_p_procedimientos extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_cups",
        "id_grupo_laboratorio",
        "metodo"
    ];
}
