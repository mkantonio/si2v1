<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\EsAdmin;

class AdministradorController extends Controller
{
    public function _construct(){
		// $this->middleware('EsAdmin');
	}

	public function index()
    {
        return view('home');
    }
}
