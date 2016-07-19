<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vuelo;

class VuelosController extends Controller
{
  public function index(){
    // mostrar todos los vuelos
    $allVuelos = Vuelo::all();

    return view('vuelos.index', ['vuelos'=>$allVuelos]);
  }
}
