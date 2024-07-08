<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostController;  

use function Pest\Laravel\patch;

//blog.test/
Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

/*
//blog.test/categoria
Route::get('/categoria', [CategoriaController::class, 'index']);

//blog.test/categoria/subcategoria
Route::get('/categoria/subcategoria', [CategoriaController::class, 'subcategoria']);

//blog.test/posts
Route::get('/posts', [PostController::class, 'index']);

//blog.test/posts/######
Route::get('/posts/{categoria}', [PostController::class, 'variable']);

//blog.test/######
Route::get('/{categoría}', [CategoriaController::class, 'variable']);

//blog.test/######/######
Route::get('/{categoria}/{subcategoria}', function($categoria, $subcategoria) {
    return "te has dirigido a la categoria de {$categoria} y te encuentras en {$subcategoria}";
});
*/

/* TIPOS DE PETICIONES */

//Get
//Post
//Put
//Patch
//Delete

