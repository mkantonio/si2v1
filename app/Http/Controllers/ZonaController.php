<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zona;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zona = Zona::all();
        return view ('zona.index',compact('zona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('zona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zona=new zona();
        $zona->nombreZon = $request->input('nombre');
        $zona->save();
        return	redirect()->route('zona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zona = Zona::find($id);
        return view ('zona.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zona = Zona::find($id);
        return view ('zona.edit', compact('zona'));
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
        $zona=Zona::find($id);
        $zona->nombreZon = $request->nombre;
        $zona->save();
        return	redirect()->route('zona.show',$zona->idZon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zona=Zona::find($id);
        $zona->delete();
        return	redirect()->route('zona.index');
    }
}
