<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_m_orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_documento',
        'orden',
        'fecha',
        'id_historia',
        'id_profesional_ordena',
        'profesional_externo',
        'id_persona'
    ];
 // Define la relación con la persona
 public function persona()
 {
     return $this->belongsTo(gen_m_persona::class, 'id_persona'); 
 }
 public function resultados()
 {
     return $this->hasMany(lab_m_orden_resultados::class, 'id_orden'); 
    }
}
