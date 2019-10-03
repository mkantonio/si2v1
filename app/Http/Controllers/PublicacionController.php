<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Publicacion;
use App\TipoOferta;
use App\Inmueble;
use DateTime;
use Auth;



class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(session());
        // session(['idCarrito' => '123456']); //guardar variable en session
        // return session()->get('idCarrito'); //obtener variable de session
        // return Auth::user()->id;

        $publicaciones = Publicacion::where('idUsuario','=',Auth::user()->id)->get();
        
        // dd($publicaciones);
        // die();
        // foreach ($publicaciones as $key) {
        //     echo $key->idPub.'<br>';
        // }

        // die();
        // $inmueble = Inmueble::find(session()->get('idIn'));
        $tipooferta = TipoOferta::all();
        return view ('logeado.publicacion.index',compact('publicaciones','tipooferta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inmueble = Inmueble::find(session()->get('idIn'));
        $tipooferta = TipoOferta::all();
        return view ('logeado.publicacion.create',compact('inmueble','tipooferta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/La_Paz');    // Zona Horaria
        $hoy = date_default_timezone_get(); // Establecer zona horaria
        $hoy = date("Y-m-d H:i:s");         // Formato: 2019-09-24 17:21:33
        $fecExp = date("Y-m-d H:i:s", strtotime("+".$request->fecExp."days", strtotime("$hoy")));  //https://stackoverflow.com/questions/8235896/date-arithmetic-in-php

        $publicacion = new Publicacion();
        $publicacion->nombre=$request->nombre;
        $publicacion->preVenta=$request->preVenta;
        $publicacion->estado=$request->estado;
        $publicacion->idInmueble=$request->idInmueble;
        $publicacion->idTiOf=$request->idTiOf;
        $publicacion->idUsuario=$request->idUsuario;
        $publicacion->fecPub=$hoy;
        $publicacion->fecExp=$fecExp;
        $publicacion->save();

        return redirect()->route('publicacion.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Publicacion::find($id);
        return view ('logeado.publicacion.show', compact('publicacion'));
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
