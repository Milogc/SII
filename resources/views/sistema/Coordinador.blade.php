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

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="v-pills-regi-tab" data-toggle="pill" href="#v-pills-regi" role="tab" aria-controls="v-pills-regi" aria-selected="true">REGISTRO</a>
    <a class="nav-link" id="v-pills-eval-tab" data-toggle="pill" href="#v-pills-eval" role="tab" aria-controls="v-pills-eval" aria-selected="false">EVALUACION</a>
    <a class="nav-link" id="v-pills-segu-tab" data-toggle="pill" href="#v-pills-segu" role="tab" aria-controls="v-pills-segu" aria-selected="false">SEGUIMIENTO</a>
  </div>
</nav>

<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-regi" role="tabpanel" aria-labelledby="v-pills-regi-tab">
    @include('sistema.registro')
  </div>
    
  <div class="tab-pane fade" id="v-pills-eval" role="tabpanel" aria-labelledby="v-pills-eval-tab">
    @include('sistema.evaluacion')
  </div>
  <div class="tab-pane fade" id="v-pills-segu" role="tabpanel" aria-labelledby="v-pills-segu-tab">
    @include('sistema.seguimiento')
  </div>
</div>

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
