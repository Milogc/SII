@extends('layouts.app')
@section('content')
  <div class="container">
    <h2>Editar una area</h2><br  />
      <form method="post" action="{{action('Coordinador\CrudAreasController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
      <div class="row">
        <div class="form-group col-lg-12">
          <label for="name">Area:</label>
          <input type="text" class="form-control" name="area" value="{{$catalagos->area}}">
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
