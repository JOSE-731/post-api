<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

     //Nombre de la tabla
     protected $table = "categorias";

     //Nombre de los campos
     protected $fillable = ['nombre'];

}
