<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fac_p_cups extends Model
{
    use HasFactory;
    protected $fillable = [
        "codigo",
        "nombre",
        "habilita"
    ];
}
