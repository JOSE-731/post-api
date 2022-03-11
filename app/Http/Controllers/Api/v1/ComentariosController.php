<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Comentarios;
use Illuminate\Http\Request;

use App\Http\Resources\v1\ComentariosResource;
use App\Http\Resources\v1\ComentariosCollection;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ComentariosCollection(Comentarios::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*{
            "posts_id" : 2,
            "contenido" : "data"
        }*/

        $comentarios = new Comentarios;

        $comentarios->posts_id = $request->posts_id;

        $comentarios->contenido = $request->contenido;

        $comentarios->save();

        return response('Guardado exitosamente', 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ComentariosResource(Comentarios::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comentarioUpdate = Comentarios::find($id);

        $comentarioUpdate->posts_id = $request->posts_id;

        $comentarioUpdate->contenido = $request->contenido;

        $comentarioUpdate->save();

        return response('Editado exitosamente', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comentarios::destroy($id);

        return response('Eliminado exitosamente', 200);
    }
}
