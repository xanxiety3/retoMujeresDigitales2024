<?php

use App\Http\Controllers\AuthPersonasController;
use App\Http\Controllers\LabMOrdenController;
use App\Models\lab_m_orden;
use Illuminate\Support\Facades\Route;
Route::get('', [AuthPersonasController::class, 'index'])->name('users.login');
Route::post('/login', [AuthPersonasController::class, 'login']);

Route::get('/resultados', [LabMOrdenController::class, 'index'])->name('complementos.index');
