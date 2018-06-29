@extends('layouts.app')
@section('content')
  <section class="content">
    <div class="container">

    <table class="table table-striped">
    <thead>
      <tr>
        <th>Descripcion</th>
        <th>Valor</th>
        <th >Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($longitud as $longitu)
      <tr>
      <td>  {{$longitu->descripcion}}</td>
      <td>  {{$longitu->valor}}</td>
      <td>
        {{-- href="{{action('CrudGastosController@edit', $gastos->id)}}"  --}}
        <a href="{{action('Coordinador\CrudDeLongitudecaracteres@edit', $longitu->id)}}" class="btn btn-warning">Edit</a>
      </td>
      </tr>
    @endforeach
  </tbody>
  </table>

  </section>

  </div>
@endsection
