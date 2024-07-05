<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return "bienvenido a la categoría";
    }

    public function subcategoria()
    {
        return "aquí verás la subcategoría de dentro de la categoría";
    }

    public function variable($categoria)
    {
        return "bienvenido a la categoria de {$categoria}";
    }
}
