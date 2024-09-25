<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class gen_m_persona extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        
    "id",
        "id_tipoid",
        "numeroid",
       "fechanac" 
    ];
    public function id_tipoid() {
        return $this->belongsTo(tipos_p_identificacion::class, 'id_tipoid');
    }
    
    public function id_sexobiologico() {
        return $this->belongsTo(sex_p_lista::class, 'id_sexobiologico');
    }
    
    
}
