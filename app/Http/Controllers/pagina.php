<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class pagina extends Controller
{
    public function Index(){
        $titulo = 'Inicio';
        toast('Your Post as been submited!','success');
        Alert::alert('Title', 'Message', 'Type');
        return view('welcome',compact('titulo'));
    }
}
