@extends('vuelos.layout')

@section('title','Insertar')

@section('content')
  <form action="/crear" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->
    <div class="form-group">
      <label for="nombre">Nombre del vuelo</label>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label for="aerolinea">Nombre de la aerolínea</label>
      <input type="text" name="aerolinea" class="form-control" placeholder="Aerolínea">
    </div>
    <button type="submit" class="btn btn-success">Insertar</button>
  </form>
@endsection
