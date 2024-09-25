<?php

namespace App\Http\Controllers;

use App\Models\lab_m_orden_resultados;
use Illuminate\Http\Request;

class LabMOrdenResultadosController extends Controller
{
      // Mostrar todos los resultados de órdenes
      public function index(Request $request)
      {
          // Filtrar resultados según la búsqueda y otras condiciones
          $resultados = lab_m_orden_resultados::with(['orden', 'procedimiento', 'prueba', 'pruebaOpcion'])
              ->when($request->search, function ($query) use ($request) {
                  return $query->where('id_orden', $request->search);
              })
              ->paginate(10);
  
          return view('complementos.showResult', compact('resultados'));
      }
}
