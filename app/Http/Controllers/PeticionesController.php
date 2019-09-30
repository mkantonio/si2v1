<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Zona;
use App\TipoInmueble;
use App\TipoOferta;
use App\Publicacion;


class PeticionesController extends Controller
{
    //

    public function peticiones(Request $request){


        if($request->tipoofertas && $request->zonas && $request->tipoinmuebles){
            $tipooferta = $request->tipoofertas;
            $zona = $request->zonas;
            $tipoinmueble = $request->tipoinmuebles;

            // $publicaciones = Publicacion::where('estado','disponible')->whereIn('idTiOf',$tipooferta)->get();

            $rpublicaciones = Publicacion::whereIn('idTiOf',$tipooferta)
            ->join('INMUEBLE','idInm','=','idInmueble')
            ->join('TIPOINMUEBLE','idTip','=','idTipo')
            ->join('ZONA','idZon','=','idZona')
            ->whereIn('idZona',$zona)
            ->whereIn('idTipo',$tipoinmueble)
            // ->select('idPub','preventa')
            ->get();

            // return $rpublicaciones;
            return view ('layoutspublic.busqueda',compact('rpublicaciones'));
            // return redirect()->route ('inicio',compact('rpublicaciones'));

        }

        
    }
}
