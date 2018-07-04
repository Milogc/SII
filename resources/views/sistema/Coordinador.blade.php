@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-left">  {{-- primer fila --}}
      <div class="col-2 bg-primary text-white">
        <img style='float:left;clear:none;' src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#linea" alt="">
          <map name="linea" id="linea">
            <area alt="" title="" href="registrados" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#convocatoria" alt="" >
            <map name="convocatoria">
              <area alt="" title="" href="/proyecto/especial" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
            <br>
            <br>
          <br>
             Proyectos registrados:{{$proyecto}}
      </div>

      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"   usemap="#map" alt="">
          <map name="map">
            <area alt="" title="" href="convocatoria" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#create" alt="" >
            <map name="create">
              <area alt="" title="" href="/convocatoria/create" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        Convocatorias:  {{$convocatorias}}
      </div>

      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"   usemap="#map1" alt="">
          <map name="map1">
            <area alt="" title="" href="crudgastos" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#gasto" alt="" >
            <map name="gasto">
              <area alt="" title="" href="/crudgastos/create" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        Catalogo de gastos: {{$gastos}}
      </div>

      <div class="col-2 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#linea1" alt="">
          <map name="linea1" id="linea">
            <area alt="" title="" href="crudlineas" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#linea2" alt="" >
            <map name="linea2">
              <area alt="" title="" href="/crudlineas/create" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        Lineas de investigacion:{{$lineas}}
      </div>

      <div class="col-2 bg-primary text-white">
        <img src="https://cdn2.iconfinder.com/data/icons/social-productivity-line-art-2/128/profile-photo-512.png" usemap="#Map0" style=" " alt="">
          <map name="Map0">
            <area alt="" title="Listar" href="crudusers" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#user" alt="" >
            <map name="user">
              <area alt="" title="" href="/crudusers/create" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        Usuarios registrados: {{$count}}
      </div>
    </div> {{-- primer fila --}}

    <div class="row justify-content-left"> {{-- segunda fila --}}


      <div class="col-3 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#adscri" alt="">
          <map name="adscri" id="adscri">
            <area alt="" title="" href="crudadscripcion" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" usemap="#ads" alt="" >
            <map name="ads">
              <area alt="" title="" href="/crudadscripcion/create" shape="poly" coords="13,11,499,14,498,498,14,500" />
            </map>
        Adscripción{{--$longitud--}}
      </div>


      <div class="col-3 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#longitud" alt="">
          <map name="longitud" id="longitud">
            <area alt="" title="" href="crudlongitudecaracteres" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Partes y longitudes del protocolo{{--$longitud--}}
      </div>

      <div class="col-3 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#registro" alt="">
          <map name="registro" id="registro">
            <area alt="" title="" href="rregistro" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
        Restricciones de registro{{--$registro--}}
      </div>



    </div> {{-- segunda fila --}}

    <div class="row justify-content-left"> {{-- tercer fila --}}
      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#entregable" alt="">
          <map name="entregable" id="crudentregable">
            <area alt="" title="" href="crudentregables" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" alt="" usemap="#Map" />
          <map name="Map" id="Map">
              <area alt="" title="" href="crudentregables/create" shape="poly" coords="7,6,497,10,495,464,8,482" />
          </map>

        Entregables:{{$entregable}}
      </div>
      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#Map1" alt="">
          <map name="Map1">
            <area alt="" title="" href="crudareas" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" alt="" usemap="#Map" />
          <map name="Map" id="Map">
              <area alt="" title="" href="crudareas/create" shape="poly" coords="7,6,497,10,495,464,8,482" />
          </map>
        Areas registradas:{{$catalogo}}
      </div>

      <div class="col-4 bg-primary text-white">
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#tipo" alt="">
          <map name="tipo">
            <area alt="" title="" href="crudinvestigacion" shape="poly" coords="13,11,499,14,498,498,14,500" />
          </map>
          <img id="mas" src="https://cdn.icon-icons.com/icons2/635/PNG/512/add-button_icon-icons.com_58943.png" alt="" usemap="#Map" />
          <map name="Map" id="Map">
              <area alt="" title="" href="crudinvestigacion/create" shape="poly" coords="7,6,497,10,495,464,8,482" />
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
