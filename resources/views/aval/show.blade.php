<!-- show.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="container">
    @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
      </div><br/>
    @endif
    <form class="form-horizontal" id="frmaval"  enctype="multipart/form-data" > 
      <input id="proyecto_id" type="hidden" value="{{$proyecto->id}}">
      <div class="row">
        <div class="form-group col-9">
            <input  class="form-control"  name="namearchivo" id="archivo" type="file"  accept=".pdf" @if($proyecto->taval!= "" ) required @endif >
        </div>
        <div class="form-group col-3">
            <button class="btn btn-danger btndel" value="{{$proyecto->id}}">Eliminar</button>
        </div>
      </div> <!-- row -->
    </form>

      <embed id="pdf" type="application/pdf" src="@if ($aval->aval === null){{asset('evidencias/blanco.pdf' )}}
      @else{{asset('evidencias/'. $aval->aval)}}@endif" width="100%" height="1100px">
  </div><!-- container 
<script src="{{asset('js/pdfobject.js')}}"></script>
-->
@endsection

@section('sctipts')
    <script src="{{asset('js/aval.js')}}"></script>

<script language="javascript">
  $(document).ready(function(){
    $("#frmaval").on("click", ".btndel" , function (e){
      e.preventDefault(); 
      eliminar( this.value );
    });
    $('#archivo').on('change', agregar);
  });       
</script>

 @endsection
@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">AVAL DE ACADEMIA DEL PROYECTO: {{$proyecto->titulo}}</li>
@endsection


@section('styles')
<style>
.pdfobject-container { height: 500px;}
.pdfobject { border: 1px solid #666; }

input:invalid{
  border-color:red;
  border-width: 10px;
}
input:valid{
 border-color:blue; 
}
</style>
@endsection
