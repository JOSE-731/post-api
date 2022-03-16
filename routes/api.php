<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\v1\PostsController;
use App\Http\Controllers\Api\v1\CategoriasController;
use App\Http\Controllers\Api\v1\ComentariosController;


Route::apiResource('v1/posts', PostsController::class);
Route::apiResource('v1/comentarios', ComentariosController::class);
Route::apiResource('v1/categorias', CategoriasController::class);
