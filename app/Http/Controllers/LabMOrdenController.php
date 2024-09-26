<?php

namespace App\Http\Controllers;

use App\Models\gen_m_persona;
use App\Models\lab_m_orden;
use App\Models\lab_m_orden_resultados;
use App\Models\lab_p_procedimientos;
use App\Models\lab_p_pruebas;
use App\Models\lab_p_pruebas_opciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LabMOrdenController extends Controller
{
   

    public function index(Request $request)
{
    $persona = Auth::user();
    $personaNombre = $persona->nombre1; 
    $personaApellido = $persona->apellido1;

    // Obtener parámetros de búsqueda
    $search = $request->input('search');
    $orderBy = $request->input('order', 'desc');
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    // Construir la consulta
   
    $query = lab_m_orden::query()->where('id_persona', $persona->id);

    if ($search) {
        $query->where('orden', 'LIKE', "%{$search}%");
    }

    if ($startDate) {
        $query->where('fecha', '>=', $startDate);
    }

    if ($endDate) {
        $query->where('fecha', '<=', $endDate);
    }

    // Ordenar por fecha
    $query->orderBy('fecha', $orderBy);

    // Paginación
    $resultados = $query->paginate(10); // 10 registros por página
    return view('complementos.index', compact('resultados', 'persona', 'personaNombre', 'personaApellido', 'search', 'orderBy', 'startDate', 'endDate'));
}


public function mostrarResultados($id)
{
    // Obtener la orden de laboratorio por ID
    $orden = lab_m_orden::with(['persona', 'resultados.prueba', 'resultados.procedimiento', 'resultados.opcion'])->findOrFail($id);
    
    // Obtener la persona asociada a la orden
    $persona = $orden->persona; // Asumiendo que tienes una relación definida en lab_m_orden

    // Agrupar resultados por procedimiento (opcional)
    $resultadosAgrupados = $orden->resultados->groupBy('id_procedimiento');

    return view('complementos.showResult', compact('orden', 'persona', 'resultadosAgrupados'));
}

    



}


