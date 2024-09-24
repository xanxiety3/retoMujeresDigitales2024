<?php

namespace App\Http\Controllers;

use App\Models\lab_m_orden;
use Illuminate\Http\Request;

class LabMOrdenController extends Controller
{
   

    public function index(Request $request)
    {
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

        return view('complementos.index', compact('resultados', 'search', 'orderBy', 'startDate', 'endDate'));
    }
}


