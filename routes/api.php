<?php
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;


Route::post('/personas', [PersonaController::class, 'store']);
Route::put('/personas/{id}', [PersonaController::class, 'update']);
Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);
 