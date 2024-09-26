<?php

use App\Http\Controllers\AuthPersonasController;
use App\Http\Controllers\LabMOrdenController;
use App\Http\Controllers\LabMOrdenResultadosController;
use App\Models\lab_m_orden;
use Illuminate\Support\Facades\Route;
Route::get('/',  [AuthPersonasController::class, 'index'])->name('users.login');

Route::get('/login', [AuthPersonasController::class, 'index'])->name('users.login');
Route::post('/login', [AuthPersonasController::class, 'login']);
Route::delete('logout', action: [AuthPersonasController::class,'logout']);

Route::get('/resultados', [LabMOrdenController::class, 'index'])->name('complementos.index');
Route::get('/persona/{id}', [AuthPersonasController::class, 'show'])->name('complementos.show');
Route::get('/resultados/{id}', [LabMOrdenController::class, 'mostrarResultados'])->name('complementos.showResult');
