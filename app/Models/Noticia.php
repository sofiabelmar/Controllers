<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    //laravel busca una tabla que se llame igual, pero en minusculas
    //Y con una ´s´al final

    //o podemos decirle que tabla queremos
    protected $table = "noticias";
}
