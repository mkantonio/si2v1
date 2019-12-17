<?php

namespace App\Http\Controllers;

use App\Bitacora;
use App\DestacadoPublicacion;
use App\Destacados;
use App\Publicacion;
use Auth;
use Illuminate\Http\Request;

class DestacadoPublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destacadopublicacion = DestacadoPublicacion::all();
        $publicaciones = Publicacion::all();
        return view('destacadopublicacion.index', compact('destacadopublicacion', 'publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Auth::user()->id;
        // die();
        $destacado = Destacados::all();
        $publicacion = Publicacion::where('idUsuario', '=', Auth::user()->id)->get();
        //session()->get('idPublicacion');
        //dd($publicacion);
        //die();
        // return $destacado;
        return view('destacadopublicacion.create', compact('destacado', 'publicacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $destacado = new DestacadoPublicacion();
        $destacado->idPublicacion = $request->input('idPublicacion');
        $destacado->idDestacado = $request->input('idDestacado');
        $destacado->precio = $request->input('precio');
        // $destacado->Descripcion = $request->input('Descripcion');
        $destacado->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de Publicacion Destacada";
        $bitacora->tabla = "PublicacionDestacada";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return redirect()->route('destacadopublicacion.index');
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
