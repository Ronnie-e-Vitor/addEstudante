<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/estudante', [CadastroController::class, 'store']);
Route::get('/estudante/{id}', [CadastroController::class, 'show']);
Route::get('/estudante/{id}', [CadastroController::class, 'exibirEstudante']);
Route::put('/estudante/{id}', [CadastroController::class, 'update']);



// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
