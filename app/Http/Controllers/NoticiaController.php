<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista(){
        $noticias = array();
        $noticias[] = array("id"=>1,"titulo"=> "Descubren cura del cancer", "fecha" => "10/01/2021");
        $noticias[] = array("id"=>2,"titulo"=> "Vuelven a clases presenciales", "fecha" => "11/01/2021");

        $argumentos = array();
        $argumentos["noticias"] = $noticias;

        return view("noticias.lista", $argumentos);
    }

    public function detalles($noticia){
        //Simulacion de solicitud de detalles de noticia
        $detalles_noticia=array();
        $detalles_noticia["titulo"]="Noticia #" . $noticia;
        $detalles_noticia["autor"]="Autor de la noticia #" . $noticia;
        $detalles_noticia["fecha"]="28/01/2020";
        $detalles_noticia["cuerpo"]="Este es el texto de la noticia #" . $noticia;
        $detalles_noticia["foto"] = "https://www.hola.com/imagenes/estar-bien/20200320162955/chihuahua-razas-perro-caracteristicas-cuidado-gt/0-797-393/corto-z.jpg";
        $argumentos= array();
        $argumentos["noticia"] = $detalles_noticia;
        return view('noticias.detalles', $argumentos);
    }
}
