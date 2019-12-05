<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\Inmueble;
use Auth;
use Illuminate\Http\Request;

class GestionarInmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoria = Categoria::select('nombreCat')->get();
        $gestionarinmueble = Inmueble::all();
        return view('gestionarinmueble.index', compact('gestionarinmueble'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionarinmueble.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gestionarinmueble = new Inmueble();
        //crear usuario
        $gestionarinmueble->superficie = $request->input('superficie');
        $gestionarinmueble->descripcion = $request->input('descripcion');
        $gestionarinmueble->amoblado = $request->input('amoblado');
        $gestionarinmueble->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nuevo inmueble";
        $bitacora->tabla = "inmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarinmueble.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gestionarinmueble = Inmueble::find($id);
        return view('gestionarinmueble.show', compact('gestionarinmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gestionarinmueble = Inmueble::find($id);
        return view('gestionarinmueble.edit', compact('gestionarinmueble'));
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
        $gestionarinmueble = Inmueble::find($id);
        $gestionarinmueble->superficie = $request->input('superficie');
        $gestionarinmueble->descripcion = $request->input('descripcion');
        $gestionarinmueble->amoblado = $request->input('amoblado');
        $gestionarinmueble->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un inmueble";
        $bitacora->tabla = "inmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarinmueble.show', $gestionarinmueble->idCat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gestionarinmueble = Inmueble::find($id);
        $gestionarinmueble->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion inmueble";
        $bitacora->tabla = "inmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('gestionarinmueble.index');
    }
}
