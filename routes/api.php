<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/gravar', 'App\Http\Controllers\Produto@gravar');
Route::put('editar', 'App\Http\Controllers\Produto@editar');
Route::delete('/deletar/{id}', 'App\Http\Controllers\Produto@deletar');
Route::get('/produtos', 'App\Http\Controllers\Produto@produto');
Route::get('/produtos/{id}', 'App\Http\Controllers\Produto@produto');