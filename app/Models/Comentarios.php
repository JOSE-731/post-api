<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

     //Nombre de la tabla
     protected $table = "comentarios";

     //Nombre de los campos
     protected $fillable = ['id', 'post_id', 'contenido', 'fecha_creacion', 'fecha_actualizacion'];
}
