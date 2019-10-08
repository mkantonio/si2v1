<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Publicacion;
use App\TipoOferta;
use App\TipoInmueble;
use App\Inmueble;
use App\Zona;
use Barryvdh\DomPDF\Facade as PDF;

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
        //
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
