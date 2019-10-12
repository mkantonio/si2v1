<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use App\Inmueble;
use App\Destacados;
use App\Categoria;
use App\TipoOferta;
use App\Zona;
use App\TipoInmueble;
use Barryvdh\DomPDF\Facade as PDF;
use Auth;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoria(){

        $categoria = Categoria::all();
        $inmueble = Inmueble::all();
        // return $categoria;
        // return $inmueble;
        return view ('reporte.categoria',compact('categoria','inmueble'));
    }

    public function categoriapdf()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
        **/
        $categoria = Categoria::all();
        $inmueble = Inmueble::all();
        $pdf = PDF::loadView('pdf.categoria',compact('categoria','inmueble'));
        return $pdf->download('categoriapdf.pdf');
    }

    public function tipooferta(){
        $publicacion = Publicacion::all();
        $tipooferta = TipoOferta::all();
        return view ('reporte.tipooferta',compact('publicacion','tipooferta'));

    }

    public function tipoofertapdf(){
        $publicacion = Publicacion::all();
        $tipooferta = TipoOferta::all();
        $pdf = PDF::loadView('pdf.tipooferta',compact('publicacion','tipooferta'));
        return $pdf->download('tipoofertapdf.pdf');
    }

    public function tipoinmueble(){

    }

    public function zona(){
        $zona = Zona::all();
        $inmueble = Inmueble::all();
        return view ('reporte.zona',compact('zona','inmueble'));
    }

    public function zonapdf(){
        $zona = Zona::all();
        $inmueble = Inmueble::all();
        $pdf = PDF::loadView('pdf.zona',compact('zona','inmueble'));
        return $pdf->download('zonapdf.pdf');
    }


     public function index()
    {

//        die();
//                dd(session());
//         dd(request()->ip());

        $publicacion     = Publicacion::all();
        $inmueble       = Inmueble::all();
        $destacado      = Destacados::all();
        $categoria      = Categoria::all();
        $tipooferta     = TipoOferta::all();
        $zona           = Zona::all();
        $tipoinmueble   = TipoInmueble::all();

        return view ('reporte.index', compact('publicacion','inmueble','destacado','categoria','tipooferta','zona','tipoinmueble'));
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
        //
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
