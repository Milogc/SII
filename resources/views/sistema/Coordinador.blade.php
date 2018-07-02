@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-left">  {{-- primer fila --}}
      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#registrado" alt="">
          <map name="registrado" id="registrado">
            <area alt="" title="" href="registrados" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Proyectos registrados:{{$proyecto}}
      </div>
      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#convocatoria" alt="">
          <map name="convocatoria">
            <area alt="" title="" href="convocatoria" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Convocatorias:  {{$convocatorias}}
      </div>
      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"   usemap="#map" alt="">
          <map name="map">
            <area alt="" title="" href="crudgastos" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Catalogo de gastos: {{$gastos}}
      </div>
      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#linea" alt="">
          <map name="linea" id="linea">
            <area alt="" title="" href="crudlineas" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Lineas de investigacion:{{$lineas}}
      </div>

      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map0" style=" " alt="">
          <map name="Map0">
            <area alt="" title="Listar" href="crudusers" shape="poly" coords="13,11,499,14,498,498,14,500" />
            <area alt="" title="Agregar" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Usuarios registrados: {{$count}}
      </div>


    </div> {{-- primer fila --}}
    <div class="row justify-content-left"> {{-- segunda fila --}}
      <div class="col-3 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#longitud" alt="">
          <map name="longitud" id="longitud">
            <area alt="" title="" href="crudlongitudecaracteres" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Partes y longitudes del protocolo:{{--$longitud--}}
      </div>


    </div> {{-- segunda fila --}}
    <div class="row justify-content-left"> {{-- tercer fila --}}
      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#entregable" alt="">
          <map name="entregable" id="crudentregable">
            <area alt="" title="" href="crudentregables" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Entregables:{{$entregable}}
      </div>
      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#Map1" alt="">
          <map name="Map1">
            <area alt="" title="" href="crudareas" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Areas registradas:{{$catalogo}}
      </div>
      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#tipo" alt="">
          <map name="tipo">
            <area alt="" title="" href="crudinvestigacion" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Tipos de investigacion:{{$tipo}}
      </div>
    </div>{{-- tercer fila --}}
@endsection
@section('styles')
<style>
div[class^='col-']{
  border: 1px solid white;

}
img{
  width:40%; 
  display: block;
}
</style>
@endsection



