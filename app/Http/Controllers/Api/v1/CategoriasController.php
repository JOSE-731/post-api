<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use Illuminate\Http\Request;

use App\Http\Resources\v1\CategoriasResource;
use App\Http\Resources\v1\CategoriasCollection;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CategoriasCollection(Categorias::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pendiente
        $request->except('update_at');
        $categorias = new Categorias;
 
        $categorias->nombre = $request->nombre;
 
        $categorias->save();

        return response('Guardado exitosamente', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CategoriasResource(Categorias::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorias $categorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorias::destroy($id);

        return response('Eliminado exitosamente', 200);
    }
}
