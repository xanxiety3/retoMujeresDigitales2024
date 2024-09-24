<?php

namespace App\Http\Controllers;

use App\Models\lab_m_orden;
use Illuminate\Http\Request;

class LabMOrdenController extends Controller
{
    public function index(){
        $resultados = lab_m_orden::all();
        return view('complementos.index',['resultados' => $resultados]);
    }

}
