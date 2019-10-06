<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ubicacion;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view ('logeado.ubicacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $ubicacionn = new Ubicacion();
        $ubicacionn->uv=$request->uv;
        $ubicacionn->manzano=$request->manzano;
        $ubicacionn->barrio=$request->barrio;
        $ubicacionn->calle=$request->calle;
        $ubicacionn->idIn=$request->idIn;
        $ubicacionn->save();
        // return $ubicacionn;
        $idInmueble = $ubicacionn->idIn;
        session(['idIn' => $idInmueble]);
        // dd(session());

        // die();
        return redirect()->route('publicacion.create',);
        // return redirect()->action('PublicacionController@create');
        // return $idInmueble;
        // return redirect()->route('publicacion.index',[$idInmueble]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
