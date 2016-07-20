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
    return view('vuelos.form_insert')
  }

  public function insertar(Request $request){
    $nombre = $request->input('nombre');
    $aerolinea = $request->input('aerolinea');

    Vuelo::table('vuelos')->insert([
      'nombre'=>$nombre,
      'aerolinea'=>$aerolinea]
    );

    echo "<div class='row'>
      Vuelo insertado. <a href='/insertar'>Volver</a>
    </div>"
  }
}
