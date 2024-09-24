<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gen_p_eps extends Model
{
    use HasFactory;
    protected $fillable = [
        "codigo",
        "razonsocial",
        "nit",
        "habilita"
    ];
}
