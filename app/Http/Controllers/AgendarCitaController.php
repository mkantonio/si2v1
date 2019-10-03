<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgendarCita;
use App\Publicacion;

class AgendarCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mostrar($idPublicacion){

        $agendarcita = AgendarCita::where('idPublicacion',$idPublicacion)->get();
        $publicacion = Publicacion::find($idPublicacion);
        return view ('logeado.agendarcita.mostrar',compact('agendarcita','publicacion'));

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //"http://localhost:8000/publicacion/12"
        $string = session()->get('_previous')['url'];
        //$idPublicacion = preg_replace("/http:\/\/localhost:8000\/publicacion\//", '', $string);
        $idPublicacion = substr($string,-2);
        // $idPublicacion = preg_replace("/http:\/\/localhost:8000\/agendarcita\/mostrar\/", '', $string);

        session(['idPublicacion' => $idPublicacion]);

        return view ('logeado.agendarcita.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $agendarcita = new AgendarCita();
        $agendarcita->fecha = $request->fecha;
        $agendarcita->hora = $request->hora;
        $agendarcita->direccion = $request->direccion;
        $agendarcita->idPublicacion = $request->idPublicacion;
        $agendarcita->idUsuario = $request->idUsuario;
        $agendarcita->save();

        return $agendarcita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
