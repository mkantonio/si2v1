<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Ubicacion;
use Auth;
use Illuminate\Http\Request;

class GestionarUbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoria = Categoria::select('nombreCat')->get();
        $gestionarubicacion = Ubicacion::all();
        return view('gestionarubicacion.index', compact('gestionarubicacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionarubicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestionarubicacion = new Ubicacion();
        //crear usuario
        $gestionarubicacion->nombreCat = $request->input('nombreCat');
        $gestionarubicacion->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nueva gestionarubicacion";
        $bitacora->tabla = "gestionarubicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarubicacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gestionarubicacion = Ubicacion::find($id);
        return view('gestionarubicacion.show', compact('gestionarubicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestionarubicacion = Ubicacion::find($id);
        return view('gestionarubicacion.edit', compact('gestionarubicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gestionarubicacion = Ubicacion::find($id);
        $gestionarubicacion->uv = $request->uv;
        $gestionarubicacion->manzano = $request->manzano;
        $gestionarubicacion->barrio = $request->barrio;
        $gestionarubicacion->calle = $request->calle;
        $gestionarubicacion->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un gestionarubicacion";
        $bitacora->tabla = "gestionarubicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarubicacion.show', $gestionarubicacion->idUbic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestionarubicacion = Ubicacion::find($id);
        $gestionarubicacion->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion gestionarubicacion";
        $bitacora->tabla = "gestionarubicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarubicacion.index');
    }
}

