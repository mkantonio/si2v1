<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeticionesController extends Controller
{
    //

    public function peticiones(Request $request){
        
        $zona = $request->zonas;
        foreach ($zona as $key) {
            echo $key."<br>";
        }
        // return $request;
                // echo $request;
        // echo $request->zonas;
        // echo $request->zonas;
    }
}
