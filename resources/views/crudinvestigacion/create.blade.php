@extends('layouts.app')
@section('content')

  <div class="container">
    <h2>Tipos de investigacion </h2><br/>
    <form method="post" action="{{url('crudinvestigacion')}}" enctype="multipart/form-data">

      @csrf
      <div class="row">
        <div class="form-group col-lg-10">
          <label for="name">Investigacion:</label>
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
