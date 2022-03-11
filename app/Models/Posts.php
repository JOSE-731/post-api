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

     public $timestamps = true;
     
     public function categoria(){
        
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }


    public function comentarios(){
        
        return $this->hasMany(Comentarios::class, 'posts_id');
    }

     
    }
