@extends('vuelos.layout')

@section('title','Modificar')

@section('content')
  <form action="/mod/{{ $vuelo->id }}" method="post">
    {{ csrf_field() }}
    <!-- hidden token -->
    <div class="form-group">
      <label for="nombre">Escoge un nuevo nombre del vuelo</label>
      <input type="text" name="nombre" class="form-control" value="{{ $vuelo->nombre }}">
    </div>
    <div class="form-group">
      <label for="aerolinea">Escoge una nueva aerolínea</label>
      <input type="text" name="aerolinea" class="form-control" value="{{ $vuelo->aerolinea }}">
    </div>
    <button type="submit" class="btn btn-success">Modificar</button>
  </form>
@endsection
