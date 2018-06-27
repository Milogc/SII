@extends('layouts.app')
@section('content')

  <div class="container">
    <h2>Area a ingresar </h2><br/>
    <form method="post" action="{{url('crudentregables')}}" enctype="multipart/form-data">

      @csrf
      <div class="row">
        <div class="form-group col-lg-12">
          <label for="name">Entregables:</label>
          <input type="text" class="form-control" name="descripcion" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-12">
          <label for="name">Tipo:</label>
          <input type="text" class="form-control" name="tipo" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-12" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar</button>
        </div>
      </div>

    </form>
  @endsection
