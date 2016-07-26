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

  public function preEdit($id){
    // Asegurar que hemos encontrado el especificado
    $vuelo = Vuelo::where('id', $id)->first();
    return view('vuelos.form_edit',['vuelo'=>$vuelo]);
  }
  public function edit(Request $request, $id){
    $nuevoNombre = $request->input('nombre');
    $nuevaAerolinea = $request->input('aerolinea');

    // Primero buscamos el vuelo a modificar
    // con el ID enviado
    $vuelo = Vuelo::find($id);
    // Modificamos los datos una vez seleccionado
    $vuelo->nombre = $nuevoNombre;
    $vuelo->aerolinea = $nuevaAerolinea;
    $vuelo->save();

    return view('vuelos.modificado');
  }
}
