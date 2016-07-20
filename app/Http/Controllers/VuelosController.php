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

  public function insertarForm(){
    return view('vuelos.form_insert');
  }

  public function insertar(Request $request){
    $nombre = $request->input('nombre');
    $aerolinea = $request->input('aerolinea');

    $vuelo = new Vuelo;
    $vuelo->nombre = $nombre;
    $vuelo->aerolinea = $aerolinea;
    $vuelo->save();

    return view('vuelos.insertado');
  }
}
