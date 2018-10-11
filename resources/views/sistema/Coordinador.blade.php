@extends('layouts.app')
@section('content')
  <div class="container" id="dashboard">
    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show">
    <p>{{ \Session::get('success') }}</p>
    </div><br/>
    @endif
    @if (\Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show">
    <p>{{ \Session::get('error') }}</p>
    </div><br/>
    @endif
    @include('sistema.registro')

</div>
@endsection
@section('styles')
<style>
div[class^='col-']{
  border: 1px solid white;
}
a img{
  width: 100%;
}
.row a{
  display: inline;
}

</style>
@endsection
