<?php

namespace App\Http\Controllers;

use App\TipoInmueble;
use App\TipoOferta;
use App\Publicacion;
use App\Categoria;
use App\Zona;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('layoutspublic.indexpublic');
    }

    public function inicio()
    {
        // $zona=Zona::select('nombreZon')->get();
        // $tipoinmueble=TipoInmueble::select('tipoInm')->get();
        $zona = Zona::all();
        $tipoinmueble = TipoInmueble::all();
        $tipooferta = TipoOferta::all();

        $publicacion = DB::table('PUBLICACION as p')
            ->join('INMUEBLE as i', 'p.idInmueble', '=', 'i.idInm')
            ->join('TIPOFERTA as t', 'p.idTiOf', '=', 't.idOf')
            ->join('ZONA as z', 'i.idZona', '=', 'z.idZon')
            ->join('TIPOINMUEBLE as tp', 'i.idTipo', '=', 'tp.idTip')
            ->join('CATEGORIA as c', 'i.idCategoria', '=', 'c.idCat')
            ->get();
        // if(isset($request->rpublicaciones)){
        //     $vpublicaciones=$request->rpublicaciones;
        //     return view ('layoutspublic.inicio', compact('zona','tipoinmueble','tipooferta','vpublicaciones'));
        // }
        return view('layoutspublic.inicio', compact('zona', 'tipoinmueble', 'tipooferta', 'publicacion'));
    }

    public function dashboard()
    {
        return view('home');
    }
    public function registrooption()
    {
        return view('auth.registrooption');
    }

    public function registrouser()
    {
        return view('auth.registeruser');
    }

    public function registroemp()
    {
        return view('auth.registeremp');
    }

    public function iniciosesion()
    {
        return view('auth.login');
    }

}
