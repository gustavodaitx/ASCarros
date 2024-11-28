<?php

use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('carros', [CarroController::class, 'index']);
Route::get('carros/create', [CarroController::class, 'create']);
Route::post('carros', [CarroController::class, 'store']);
Route::get('carros/{id}/edit', [CarroController::class, 'edit']);
Route::put('carros/{id}', [CarroController::class, 'update']);
Route::delete('carros/{id}', [CarroController::class, 'destroy']);
