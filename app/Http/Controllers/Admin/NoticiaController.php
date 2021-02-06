<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        $noticias = Noticia::all();
        $argumentos=array();
        $argumentos["noticias"] = $noticias;
        return view("admin.noticias.index", $argumentos);
    }
}
