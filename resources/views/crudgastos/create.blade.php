@extends('layouts.app')
@section('content')

  <div class="container">
    <h2>Gastos </h2><br/>
    <form method="post" action="{{url('crudgastos')}}" enctype="multipart/form-data">

      @csrf
      <div class="row  col-10">
        <div class="form-group col-lg-12">
          <label for="name">Gasto:</label>
          <input type="text" class="form-control" name="descripcion" required>
        </div>
      </div>
      <div class="row  col-5">
        <div class="form-group col-lg-12">
          <label for="name">Partida:</label>
          <input type="text" class="form-control" name="partida" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-12" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar</button>
        </div>
      </div>

    </form>
@endsection
