<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InmuebleStoreRequest;
use App\Categoria;
use App\Zona;
use App\TipoOferta;
use App\Inmueble;
use App\Ambiente;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();
        $zona = Zona::all();
        $tipooferta = TipoOferta::all();
        return view ('logeado.inmueble.index',compact('categoria','zona','tipooferta'));
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
    // public function store(InmuebleStoreRequest $request)
    public function store(Request $request)
    {
        // $this->validate( $request, $rules, $request->messages());
        $inmueble = new Inmueble();
        $inmueble->superficie=$request->superficie;
        $inmueble->descripcion=$request->descripcion;
        $inmueble->amoblado=$request->amoblado;
        $inmueble->idCategoria=$request->categoria;
        $inmueble->idTipo=$request->tipooferta;
        $inmueble->idZona=$request->zona;
        $inmueble->save();
        return view ('logeado.ambiente.index',compact('inmueble'));
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
