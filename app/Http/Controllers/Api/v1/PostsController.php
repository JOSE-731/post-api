<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

use App\Http\Resources\v1\PostsResource;
use App\Http\Resources\v1\PostsCollection;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PostsCollection(Posts::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* 
          {
            "titulo": "test",
            "contenido": "Quis alias quidam.",
            "categoria_id": 11
          }         
        */
        $posts = new Posts;

        $posts->categoria_id = $request->categoria_id;

        $posts->titulo = $request->titulo;

        $posts->contenido = $request->contenido;

        $posts->save();

        return response('Guardado exitosamente', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new PostsResource(Posts::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postsUpdate = Posts::find($id);

        $postsUpdate->categoria_id = $request->categoria_id;

        $postsUpdate->titulo = $request->titulo;

        $postsUpdate->contenido = $request->contenido;

        $postsUpdate->save();

        return response('Editado exitosamente', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::destroy($id);

        return response('Eliminado exitosamente', 200);
    }
}
