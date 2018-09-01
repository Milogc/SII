@extends('layouts.app')
@section('content')


    <div class="container">
      <h2>Editar Programa Educativos</h2><br  />
        <form method="post" action="{{action('Coordinador\CrudProgramaEducativo@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="form-group col-lg-12">
        <label for="name">Actualizar Programa Educativo:</label>
            <input type="text" class="form-control" name="programa" value="{{$programaeducativo->programa}}">
          <br>
            <input type="text" class="form-control" name="nivel" value="{{$programaeducativo->nivel}}">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-12" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
          </div>
        </div>
    </form>
    </div>
  @endsection
