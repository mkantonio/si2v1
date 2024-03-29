<?php

namespace App\Http\Controllers;
use App\Bitacora;
use Illuminate\Support\Facades\DB; //Constructor de consultas

use App\Categoria;
use Auth;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    // public function __construct(){
    //     return $this->middleware('auth','esAdmin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoria = Categoria::select('nombreCat')->get();
        $categoria = Categoria::all();
        return view ('categoria.index',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria=new Categoria();
        //crear usuario
        $categoria->nombreCat = $request->input('nombreCat');
        $categoria->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Registro de nueva categoria";
        $bitacora->tabla = "Categoria";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categoria = Categoria::find($id);
        return view ('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view ('categoria.edit', compact('categoria'));
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
        $categoria=Categoria::find($id);
        $categoria->nombreCat = $request->nombre;
        $categoria->save();
        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Edicion de una categoria";
        $bitacora->tabla = "Categoria";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('categoria.show',$categoria->idCat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        $categoria->delete();

        $bitacora = new Bitacora();
        $bitacora->user_id = Auth::user()->id;
        $bitacora->accion = "Eliminacion categoria";
        $bitacora->tabla = "Categoria";
        $bitacora->ip = request()->ip();
        $bitacora->save();

        return	redirect()->route('categoria.index');
    }
}
