@extends('vuelos.layout')

@section('title','Listado')

@section('content')
  <table class="table">
    <thead>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>AEROLINEA</th>
    </thead>
  @foreach ($vuelos as $vuelo)
    <tr>
      <td>{{ $vuelo->id }}</td>
      <td>{{ $vuelo->nombre }}</td>
      <td>{{ $vuelo->aerolinea }}</td>
    </tr>
  @endforeach
  </table>
@endsection
