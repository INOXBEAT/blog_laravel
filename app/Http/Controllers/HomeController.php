<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Hola, este mensaje aparecerá como entrada a la app";
    }
}
