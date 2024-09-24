<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class gen_m_persona extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        "id_tipoid",
        "numeroid",
       "fechanac" 
    ];
}
