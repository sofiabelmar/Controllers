<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){
        $noticias = array();
        $noticias[] = array("titulo"=> "Descubren cura del cancer", "fecha" => "10/01/2021");
        $noticias[] = array("titulo"=> "Vuelven a clases presenciales", "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles(){
        return "Estas en la lista :p";
    }
}
