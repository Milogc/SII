@extends('layouts.app')
@section('content')

  <div class="container">
    <h2>Lineas </h2><br/>
    <form method="post" action="{{url('Coordinador\CrudLongitudCaracteresControllers@updet', $idproy)}}" >

      @csrf
        <input name="_method" type="hidden" value="PATCH">
      <div class="row">
        <div class="form-group col-lg-12">
          <label for="name">{{$longitud->descripcion}}</label>
            <input type="text" class="form-control" name="valor" value="{{$longitud->valor}}">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-lg-12" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
        </div>
      </div>
      </div>

    </form>
  @endsection
