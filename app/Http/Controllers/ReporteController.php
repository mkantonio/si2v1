<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Destacados;
use App\Inmueble;
use App\Publicacion;
use App\TipoInmueble;
use App\TipoOferta;
use App\Zona;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoria()
    {

        $categoria = Categoria::all();
        $inmueble = Inmueble::all();
        // return $categoria;
        // return $inmueble;
        return view('reporte.categoria', compact('categoria', 'inmueble'));
    }

    public function categoriapdf()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
         **/
        $categoria = Categoria::all();
        $inmueble = Inmueble::all();
        $pdf = PDF::loadView('pdf.categoria', compact('categoria', 'inmueble'));
        return $pdf->download('categoriapdf.pdf');
    }

    public function tipooferta()
    {
        $publicacion = Publicacion::all();
        $tipooferta = TipoOferta::all();
        return view('reporte.tipooferta', compact('publicacion', 'tipooferta'));

    }

    public function tipoofertapdf()
    {
        $publicacion = Publicacion::all();
        $tipooferta = TipoOferta::all();
        $pdf = PDF::loadView('pdf.tipooferta', compact('publicacion', 'tipooferta'));
        return $pdf->download('tipoofertapdf.pdf');
    }

    public function tipoinmueble()
    {

    }

    public function zona()
    {
        $zona = Zona::all();
        $inmueble = Inmueble::all();
        return view('reporte.zona', compact('zona', 'inmueble'));
    }

    public function zonapdf()
    {
        $zona = Zona::all();
        $inmueble = Inmueble::all();
        $pdf = PDF::loadView('pdf.zona', compact('zona', 'inmueble'));
        return $pdf->download('zonapdf.pdf');
    }

    public function index()
    {

        // $data = DB::table('publicacion as p')
        //     ->join('inmueble as i', 'p.idInmueble', '=', 'i.idInm')
        //     ->join('tipoferta as t', 'p.idTiOf', '=', 't.idOf')
        //     ->join('zona as z', 'i.idZona', '=', 'z.idZon')
        //     ->join('tipoinmueble as tp', 'i.idTipo', '=', 'tp.idTip')
        //     ->join('categoria as c', 'i.idCategoria', '=', 'c.idCat')
        //     ->get(); //Devuelve una COLECCION ITERABLE array

        //     $data[0]->idCategoria;
        // return $data;

//        die();
        //                dd(session());
        //         dd(request()->ip());

        // $p = Publicacion::with('INMUEBLE')->get();
        // $p = Publicacion::with('INMUEBLE.idCategoria')->get();
        // $p = Publicacion::all();
        // $p->load('inmueble');
        // return $p[0]->inmueble;
        // dd($p);die();
        // return $p;
        // $s = compact('p');
        // // return $s['idPub'];
        // dd($s);die();
        // return compact('p');

        $publicacion = Publicacion::all();
        $inmueble = Inmueble::all();
        $destacado = Destacados::all();
        $categoria = Categoria::all();
        $tipooferta = TipoOferta::all();
        $zona = Zona::all();
        $tipoinmueble = TipoInmueble::all();

        return view('reporte.index', compact('publicacion', 'inmueble', 'destacado', 'categoria', 'tipooferta', 'zona', 'tipoinmueble'));
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
        $precio = $request->precio;
        $categoria = $request->categoria;
        $oferta = $request->oferta;
        $estado = $request->estado;
        $tipoinmueble = $request->tipoinmueble;
        $zona = $request->zona;
        $fechainicio = $request->fechainicio;
        $fechafin = $request->fechafin;


        

        $bandera = 0;
        $consulta = [];

        if ($oferta != '') {
            array_push($consulta, ['p.idTiOf', '=', $oferta]);
            $bandera = 1;
        }



        if ($fechainicio != '') {
            if ($fechafin != '') {
                array_push($consulta, ['p.fecPub', '>=', $fechainicio]);
                array_push($consulta, ['p.fecPub', '<=', $fechafin]);
                $bandera = 1;
            } else {
                array_push($consulta, ['p.fecPub', '>=', $fechainicio]);
                $bandera = 1;
            }
        }

        if ($zona != '') {
            array_push($consulta, ['i.idZona', '=', $zona]);
            $bandera = 1;
        }

        if ($categoria != '') {
            array_push($consulta, ['i.idCategoria', '=', $categoria]);
            $bandera = 1;
        }

        if ($tipoinmueble != '') {
            array_push($consulta, ['i.idTipo', '=', $tipoinmueble]);
            $bandera = 1;
        }

        if ($bandera == 1) {
            array_push($consulta, ['p.estado', '=', $estado]);
        }

        $data = DB::table('publicacion as p')
            ->join('inmueble as i', 'p.idInmueble', '=', 'i.idInm')
            ->join('tipoferta as t', 'p.idTiOf', '=', 't.idOf')
            ->join('zona as z', 'i.idZona', '=', 'z.idZon')
            ->join('tipoinmueble as tp', 'i.idTipo', '=', 'tp.idTip')
            ->join('categoria as c', 'i.idCategoria', '=', 'c.idCat')
            ->where(($bandera == 0) ? [['p.estado', '=', $estado]] : $consulta)
            ->get();

        // return compact('data');
        return view('reporte.reporte2', compact('data'));

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
