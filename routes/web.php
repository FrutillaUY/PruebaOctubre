<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
