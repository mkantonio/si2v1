<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MetodoPago;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodopago = MetodoPago::all();
        return view ('metodopago.index',compact('metodopago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('metodopago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metodopago=new MetodoPago();
        //crear usuario
        $metodopago->nombre = $request->input('nombre');
        $metodopago->descripcion = $request->input('descripcion');
        $metodopago->save();
        return	redirect()->route('metodopago.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $metodopago = MetodoPago::find($id);
        return view ('metodopago.show', compact('metodopago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodopago = MetodoPago::find($id);
        return view ('metodopago.edit', compact('metodopago'));
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
        $metodopago=MetodoPago::find($id);
        $metodopago->nombre = $request->nombre;
        $metodopago->save();
        return	redirect()->route('metodopago.show',$metodopago->idMet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metodopago=MetodoPago::find($id);
        $metodopago->delete();
        return	redirect()->route('metodopago.index');
    }
}