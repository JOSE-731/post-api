<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Pasamos los datos que queremos que se vean en la vista
        return[
            'id' => $this->id,
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'categoria_id' => $this->categoria_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
