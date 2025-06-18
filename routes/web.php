<?php

use App\Http\Controllers\calculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/somar', [calculadoraController::class, 'somar']);
Route::post('/calcularSoma', [calculadoraController::class,'calcularSoma']);