@extends('layouts.app')
@section('content')

<div class="container">
      <div class="register-box-body">
          <p class="login-box-msg"style="color:blue;"><h5>Editar usuario.</h5></p>
          <form action="{{action('Coordinador\CrudUsersController@update', $id)}}" method="post">
              {!! csrf_field() !!}
              <input name="_method" type="hidden" value="PATCH">
              <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="text" name="name" class="form-control" value="{{$user->name}}"
                         placeholder="Nombre del usuario">
              </div>
              <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                  <input type="email" name="email" class="form-control" value="{{$user->email}}"
                         placeholder="Correo electronico">
              </div>

              <div class="row">
                <div class="form-group col-lg-12" style="margin-top:60px">
                  <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
                </div>
              </div>
          </form>

      </div>
      <!-- /.form-box -->
  </div>
  </div>
  @endsection
