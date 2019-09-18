<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view ('layoutspublic.indexpublic');
    }

    public function inicio()
    {
        return view ('layoutspublic.inicio');
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
        return view ('layoutspublic.iniciosesion');
    }

}
