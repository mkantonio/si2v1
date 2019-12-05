<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Publicacion;
use Auth;
use Illuminate\Http\Request;

class GestionarPublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoria = Categoria::select('nombreCat')->get();
        $gestionarpublicacion = Publicacion::all();
        return view('gestionarpublicacion.index', compact('gestionarpublicacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionarpublicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestionarpublicacion = new Publicacion();
        //crear usuario
        $gestionarpublicacion->nombre = $request->input('nombre');
        $gestionarpublicacion->preVenta = $request->input('preVenta');
        $gestionarpublicacion->fecPub = $request->input('fecPub');
        $gestionarpublicacion->fechaExp = $request->input('fechaExp');
        $gestionarpublicacion->estado = $request->input('estado');
        $gestionarpublicacion->idInmueble = $request->input('idInmueble');
        $gestionarpublicacion->idTiOf = $request->input('idTiOf');
        $gestionarpublicacion->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nueva gestionarpublicacion";
        $bitacora->tabla = "gestionarpublicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarpublicacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gestionarpublicacion = Publicacion::find($id);
        return view('gestionarpublicacion.show', compact('gestionarpublicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestionarpublicacion = Publicacion::find($id);
        return view('gestionarpublicacion.edit', compact('gestionarpublicacion'));
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
        $gestionarpublicacion = new Publicacion();
        $gestionarpublicacion->nombre = $request->input('nombre');
        $gestionarpublicacion->preVenta = $request->input('preVenta');
        $gestionarpublicacion->fecPub = $request->input('fecPub');
        $gestionarpublicacion->fecExp = $request->input('fecExp');
        $gestionarpublicacion->estado = $request->input('estado');
        $gestionarpublicacion->idInmueble = $request->input('idInmueble');
        $gestionarpublicacion->idTiOf = $request->input('idTiOf');
        $gestionarpublicacion->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un gestionarpublicacion";
        $bitacora->tabla = "gestionarpublicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarpublicacion.show', $gestionarpublicacion->idCat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestionarpublicacion = Publicacion::find($id);
        $gestionarpublicacion->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion gestionarpublicacion";
        $bitacora->tabla = "gestionarpublicacion";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarpublicacion.index');
    }
}
