<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_m_orden_resultados extends Model
{
    use HasFactory;
  

    protected $table = 'lab_m_orden_resultados';

    
    // Relación con lab_m_orden
    public function orden()
    {
        return $this->belongsTo(lab_m_orden::class, 'id_orden');
    }

    // Relación con lab_p_procedimientos
    public function procedimiento()
    {
        return $this->belongsTo(lab_p_procedimientos::class, 'id_procedimiento');
    }

    // Relación con lab_p_pruebas
    public function prueba()
    {
        return $this->belongsTo(lab_p_pruebas::class, 'id_prueba');
    }

    // Relación con lab_p_pruebas_opciones
    public function opcion()
    {
        return $this->belongsTo(lab_p_pruebas_opciones::class, 'id_pruebaopcion');
    }
}

