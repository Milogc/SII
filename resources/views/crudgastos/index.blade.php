@extends('layouts.app')
@section('content')
  <section class="content">
    <div class="container">

    <table class="table table-striped">
    <thead>
      <tr>
        <th>Gastos</th>
        <th>Tipo</th>

        <th colspan="2"><center>Acciones</center></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($gastos as $gasto)
      <tr>
      <td>  {{$gasto->descripcion}}</td>
      <td>{{$gasto->partida}}</td>
      <td>
        {{-- href="{{action('CrudGastosController@edit', $gastos->id)}}"  --}}
        <a href="{{action('Coordinador\CrudGastosController@edit', $gasto->id)}}"   class="btn btn-warning">Edit</a>
      </td>
      <td>
        {{-- action="{{action('CrudEntregablesController@destroy', $entregable->id)}}"  --}}
        <form action="{{action('Coordinador\CrudGastosController@destroy', $gasto->id)}}" method="post">
          @csrf
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      </tr>
    @endforeach
  </tbody>
  </table>
  <a href="/crudgastos/create" class="btn btn-primary">Agregar</a>
  </section>

  </div>
@endsection
