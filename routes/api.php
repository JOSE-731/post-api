<?php

use App\Http\Controllers\Api\v1\CategoriasController;
use App\Http\Controllers\Api\v1\ComentariosController;
use App\Http\Controllers\Api\V1\PostsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('v1/posts', PostsController::class);
Route::apiResource('v1/comentarios', ComentariosController::class);
Route::apiResource('v1/categorias', CategoriasController::class);
