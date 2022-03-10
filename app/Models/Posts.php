<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

     //Nombre de la tabla
     protected $table = "posts";

     //Nombre de los campos
     protected $fillable = ['categorias_id','titulo', 'contenido'];
     
    }
