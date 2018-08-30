@extends('layouts.app')
@section('content')

  <div class="container">
    
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
                            <label for="tipo">Tipo</label>
                            <div class="col-md-6">
                                <select  class="form-control" name="tipo">
                                   <option>ACADEMICO</option>
                                   <option>HUMANO</option>
                                </select>
                            </div>
                        </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-12" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar</button>
        </div>
      </div>

    </form>
  @endsection
