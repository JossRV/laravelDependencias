<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    public function index(){
        $titulo = "Categorias";
        $categorias = categoria::all();
        return view('dependencias',compact('titulo','categorias'));
    }
}
