<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //Constructor de consultas

use App\TipoOferta;

use Illuminate\Http\Request;
use App\Bitacora;
use Auth;
class TipoOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipooferta = TipoOferta::all();
        return view ('tipooferta.index',compact('tipooferta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tipooferta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipooferta=new TipoOferta();
        //crear tipoOferta
        $tipooferta->tipTran = $request->input('tipTran');
        $tipooferta->save();
                $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nueva Oferta";
        $bitacora->tabla = "Oferta";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('tipooferta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipooferta = TipoOferta::find($id);
        return view ('tipooferta.show', compact('tipooferta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipooferta = TipoOferta::find($id);
        return view ('tipooferta.edit', compact('tipooferta'));
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

        $tipooferta=TipoOferta::find($id);
        $tipooferta->tipTran = $request->tipTran;
        $tipooferta->save();
                $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de un Tipo de Oferta";
        $bitacora->tabla = "Tipo de Oferta";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('tipooferta.show',$tipooferta->idOf);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipooferta=TipoOferta::find($id);
        $tipooferta->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion de un Tipo de Oferta";
        $bitacora->tabla = "Oferta";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('tipooferta.index');
    }
}
