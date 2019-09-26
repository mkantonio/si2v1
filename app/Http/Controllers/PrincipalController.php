<?php

namespace App\Http\Controllers;

use App\Zona;
use App\TipoInmueble;


use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view ('layoutspublic.indexpublic');
    }

    public function inicio()
    {
        // $zona=Zona::select('nombreZon')->get();
        // $tipoinmueble=TipoInmueble::select('tipoInm')->get();
        $zona=Zona::all();
        $tipoinmueble=TipoInmueble::all();
        return view ('layoutspublic.inicio', compact('zona','tipoinmueble'));
    }

    public function dashboard(){
        return view ('home');
    }
    public function registrooption()
    {
        return view ('auth.registrooption');
    }

    public function registrouser()
    {
        return view ('auth.registeruser');
    }

    public function registroemp()
    {
        return view ('auth.registeremp');
    }

    public function iniciosesion()
    {
        return view ('auth.login');
    }

}
