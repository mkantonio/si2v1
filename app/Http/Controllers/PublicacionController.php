<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Publicacion;
use App\Categoria;
use App\TipoOferta;
use App\Inmueble;
use App\TipoInmueble;
use App\Zona;
use App\Ambiente;
use App\Ubicacion;
use DateTime;
use Auth;

class PublicacionController extends Controller
{
    
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // public function __construct(){
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::where('idUsuario','=',Auth::user()->id)->get();
        $tipooferta = TipoOferta::all();
        return view ('logeado.publicacion.index',compact('publicaciones','tipooferta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function mostrar($request)
    {

        $publicacion = Publicacion::find($id);
        return view ('logeado.publicacion.show', compact('publicacion'));
    }
    public function create()
    {

        $tipooferta  = TipoOferta::all();
        $categoria  = Categoria::all();
        $zona  = Zona::all();
        $tipoinmueble  = TipoInmueble::all();
        return view ('logeado.publicacion.create',compact('tipooferta','categoria','zona','tipoinmueble'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'superficie' => 'required',
            'amoblado' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'tipoinmueble' => 'required',
            'zona' => 'required',
            'nroBaño' => 'required',
            'nroAmb' => 'required',
            'cocina' => 'required',
            'garaje' => 'required',
            'uv' => 'required',
            'manzano' => 'required',
            'barrio' => 'required',
            'calle' => 'required',
            'nombre' => 'required',
            'preVenta' => 'required',
            'estado' => 'required',
            'idTiOf' => 'required',
            'fecExp' => 'required',
        ]);



        $inmueble = new Inmueble();
        $inmueble->superficie = $request->superficie;
        $inmueble->descripcion = $request->descripcion;
        $inmueble->amoblado = $request->amoblado;
        $inmueble->idCategoria = $request->categoria;
        $inmueble->idTipo = $request->tipoinmueble;
        $inmueble->idZona = $request->zona;
        $inmueble->save();

        $ambiente = new Ambiente();
        $ambiente->nroBaño = $request->nroBaño;
        $ambiente->nroAmb = $request->nroAmb;
        $ambiente->cocina = $request->cocina;
        $ambiente->garaje= $request->garaje;
        $ambiente->idInmueble = $inmueble->idInm;
        $ambiente->save();

        $ubicacion = new Ubicacion();
        $ubicacion->uv = $request->uv;
        $ubicacion->manzano = $request->manzano;
        $ubicacion->barrio = $request->barrio;
        $ubicacion->calle = $request->calle;
        $ubicacion->idIn = $inmueble->idInm;
        $ubicacion->save();

        date_default_timezone_set('America/La_Paz');    // Zona Horaria
        $hoy = date_default_timezone_get(); // Establecer zona horaria
        $hoy = date("Y-m-d H:i:s");         // Formato: 2019-09-24 17:21:33
        $fecExp = date("Y-m-d H:i:s", strtotime("+".$request->fecExp."days", strtotime("$hoy")));  //https://stackoverflow.com/questions/8235896/date-arithmetic-in-php

        $publicacion = new Publicacion();
        $publicacion->nombre = $request->nombre;
        $publicacion->preVenta = $request->preVenta;
        $publicacion->estado=$request->estado;
        $publicacion->fecPub=$hoy;
        $publicacion->fecExp=$fecExp;
        $publicacion->idInmueble = $inmueble->idInm;
        $publicacion->idTiOf = $request->idTiOf;
        $publicacion->idUsuario = Auth::user()->id;
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
        return $id;
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
