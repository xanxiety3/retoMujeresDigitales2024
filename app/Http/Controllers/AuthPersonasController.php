<?php

namespace App\Http\Controllers;

use App\Models\gen_m_persona;
use App\Models\sex_p_lista;
use App\Models\tipos_p_identificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthPersonasController extends Controller
{
    public function index(){
        // Obtener todos los tipos de documentos
        $persona= gen_m_persona::all();
        $tiposDocumentos = tipos_p_identificacion::all();
        return view('users.login', compact('tiposDocumentos', 'persona'));
}


public function login(Request $request){

    // VALIDAR DATOS 
    $request->validate([
        'id_tipoid' => 'required|string',
        'numeroid' => 'required|string',
        'fechanac' => 'required|date_format:Y-m-d',
    ]);

    // ENCONTRAR LOS DATOS ESPECIFICOS
    $persona = gen_m_persona::where('id_tipoid', $request->id_tipoid)
                             ->where('numeroid', $request->numeroid)
                             ->where('fechanac', $request->fechanac)
                             ->first();

    if ($persona) {
        // INICIO DE SESION
        Auth::login($persona);
        return redirect()->intended('/resultados');
    }

    return back()->withErrors([
        'login' => 'Las credenciales no son válidas.',
    ]);
}

    public function logout(){
        Auth::logout();
    return view("users.login");
    }


    public function show($id)
{ 
    // Obtener la persona
    $persona = gen_m_persona::findOrFail($id);
    
    // Obtener tipo de identificación
    $tipoId = tipos_p_identificacion::find($persona->id_tipoid);
    
// para obtener el sexo 
    $sexoBiologico = sex_p_lista::find($persona->id_sexobiologico);
    // dd($persona, $tipoId, $sexoBiologico);

    // Pasar los datos a la vista
    return view('complementos.show', data: compact('persona', 'tipoId', 'sexoBiologico'));
}

    
    
}
