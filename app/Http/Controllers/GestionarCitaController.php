<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\GestionarCita;
use Auth;
use Illuminate\Http\Request;

class GestionarCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoria = Categoria::select('nombreCat')->get();
        $gestionarcita = GestionarCita::all();
        return view('gestionarcita.index', compact('gestionarcita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionarcita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestionarcita = new GestionarCita();
        //crear usuario
        $gestionarcita->nombreCat = $request->input('nombreCat');
        $gestionarcita->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nueva GestionarCita";
        $bitacora->tabla = "GestionarCita";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarcita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gestionarcita = GestionarCita::find($id);
        return view('gestionarcita.show', compact('gestionarcita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestionarcita = GestionarCita::find($id);
        return view('gestionarcita.edit', compact('gestionarcita'));
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
        $gestionarcita = GestionarCita::find($id);
        $gestionarcita->nombreCat = $request->nombre;
        $gestionarcita->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un GestionarCita";
        $bitacora->tabla = "GestionarCita";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarcita.show', $gestionarcita->idCat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestionarcita = GestionarCita::find($id);
        $gestionarcita->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion gestionarcita";
        $bitacora->tabla = "gestionarcita";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarcita.index');
    }
}
