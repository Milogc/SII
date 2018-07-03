@extends('layouts.app')
@section('content')
<section class="content">
  <div class="container">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Entregables</th>
      <th>Tipo</th>

      <th colspan="2"><center>Acciones</center></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($entregables as $entregable)
    <tr>
    <td>  {{$entregable->descripcion}}</td>
    <td>{{$entregable->tipo}}</td>
    <td>
      <a href="{{action('Coordinador\CrudEntregablesController@edit', $entregable->id)}}"  class="btn btn-warning">Edit</a>
    </td>
    <td>
      <form action="{{action('Coordinador\CrudEntregablesController@destroy', $entregable->id)}}" method="post">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </td>
    </tr>
  @endforeach
</tbody>
</table>

</section>

</div>
@endsection
