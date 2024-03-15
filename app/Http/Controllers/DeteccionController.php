<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeteccionController extends Controller
{
    public function evento(){
        return view('deteccion/evento');
    }

    public function inhabilitacion(){
        return view("deteccion/inhabilitacion");
    }

    public function informe(){
        return view("deteccion/informe");
    }

    public function consulta(){
        return view('deteccion/consulta');
    }
}
