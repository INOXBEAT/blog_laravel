<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\patch;

//blog.test/
Route::get('/', function () {
    return "Hola, este mensaje aparecerá como entrada a la app";
});

//blog.test/categoria
Route::get('/categoria', function() {
    return "bienvenido a la categoría";
});

//blog.test/categoria/#######
Route::get('/categoria/{subcategoria}', function($subcategoria) {
    return "aquí verás la subcategoría de {$subcategoria} dentro de la categoría";
});

//blog.test/######
Route::get('/{categoría}', function($categoria){
    return "bienvenido a la categoria de {$categoria}";
});

//blog.test/######/######
Route::get('/{categoria}/{subcategoria}', function($categoria, $subcategoria) {
    return "te has dirigido a la categoria de {$categoria} y te encuentras en {$subcategoria}";
});


/* TIPOS DE PETICIONES */

//Get
//Post
//Put
//Patch
//Delete

