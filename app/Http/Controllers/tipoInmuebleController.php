<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoInmueble;
use Auth;
use App\Bitacora;
class TipoInmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoinmueble = TipoInmueble::all();
        return view ('tipoinmueble.index',compact('tipoinmueble'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipoinmueble.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoinmueble=new TipoInmueble();
        $tipoinmueble->tipoInm = $request->input('nombre');
        $tipoinmueble->save();

                $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nuevo Tipo de Inmueble";
        $bitacora->tabla = "Tipo de Inmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();
        return	redirect()->route('tipoinmueble.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoinmueble = TipoInmueble::find($id);
        return view ('tipoinmueble.show', compact('tipoinmueble'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoinmueble = TipoInmueble::find($id);
        return view ('tipoinmueble.edit', compact('tipoinmueble'));
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
        $tipoinmueble=TipoInmueble::find($id);
        $tipoinmueble->tipoInm = $request->nombre;
        $tipoinmueble->save();

                $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un Tipo de Inmueble";
        $bitacora->tabla = "TipoInmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('tipoinmueble.show',$tipoinmueble->idTip);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoinmueble=TipoInmueble::find($id);
        $tipoinmueble->delete();
                $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion TipoInmueble";
        $bitacora->tabla = "TipoInmueble";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('tipoinmueble.index');
    }
}
