@extends('vuelos.layout')

@section('title','Listado')

@section('content')
  <table class="table">
    <thead>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>AEROLINEA</th>
      <th></th>
      <th></th>
    </thead>
  @foreach ($vuelos as $vuelo)
    <tr>
      <td>{{ $vuelo->id }}</td>
      <td>{{ $vuelo->nombre }}</td>
      <td>{{ $vuelo->aerolinea }}</td>
      <td><a href="/edit/{{ $vuelo->id }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
      <td><a href="/borra/{{ $vuelo->id }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
  @endforeach
  </table>
@endsection
