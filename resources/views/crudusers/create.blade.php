@extends('layouts.app')
@section('content')

  <div class="register-box">


      <div class="register-box-body">
          <p class="login-box-msg"style="color:blue;">Registrar un nuevo usuario.</p>
          <form action="{{url('crudusers')}}" method="post" enctype="multipart/form-data">
              {!! csrf_field() !!}

              <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                         placeholder="Nombre del usuario">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                         placeholder="Correo electronico">
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                  <input type="password" name="password" class="form-control"
                         placeholder="Contraseña">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>

              <button type="submit" class="btn btn-primary btn-block btn-flat">
                Registar
              </button>
          </form>

      </div>
      <!-- /.form-box -->
  </div>


@endsection
