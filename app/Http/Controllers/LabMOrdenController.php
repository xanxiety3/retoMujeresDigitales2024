<?php

namespace App\Http\Controllers;

use App\Models\gen_m_persona;
use App\Models\lab_m_orden;
use App\Models\lab_m_orden_resultados;
use App\Models\lab_p_procedimientos;
use App\Models\lab_p_pruebas;
use App\Models\lab_p_pruebas_opciones;
use Illuminate\Http\Request;

class LabMOrdenController extends Controller
{
   

    public function index(Request $request)
    {
        $persona= gen_m_persona::all();

        // Obtener parámetros de búsqueda
        $search = $request->input('search');
        $orderBy = $request->input('order', 'desc');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Construir la consulta
        $query = lab_m_orden::query();

        if ($search) {
            $query->where('orden', 'LIKE', "%{$search}%");
        }

        if ($startDate && $endDate) {
            $query->whereBetween('fecha', [$startDate, $endDate]);
        }

        // Ordenar por fecha
        $query->orderBy('fecha', $orderBy);

        // Paginación
        $resultados = $query->paginate(10); // 10 registros por página
        return view('complementos.index', compact('resultados','persona', 'search', 'orderBy', 'startDate', 'endDate'));
    }
//     public function mostrarResultados($id)
//     {
//         $resultado= lab_m_orden_resultados::all();
//         // Obtener la orden de laboratorio por ID
//         $orden = lab_m_orden::findOrFail($id);
        
        
//     // Obtener la persona
//     $persona = gen_m_persona::findOrFail($id);
    
//     // Obtener elnombrede la pruebaa
//     $prueba = lab_p_pruebas::find($orden->id_prueba);
    
// // para obtener la opcion
//     $opcion = lab_p_pruebas_opciones::find($orden->id_pruebaopcion);
// //    el procedimiento 
// $procedimiento = lab_p_procedimientos::find($orden->idprocedimiento);

// return view('complementos.showResult', data: compact('resultado','persona', 'prueba', 'procedimiento', 'opcion'));
//     }
    
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


