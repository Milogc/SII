@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row justify-content-center">


  {{-- comentario --}}
  <div class="col-3">
      <div class="bg-primary text-white">
        Proyectos registrados:{{$proyecto}}
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#registrado" style="width:90px; position:relative; right: -10px; "alt="">
          <map name="registrado" id="registrado">
          <area alt="" title="" href="registrados" shape="poly" coords="13,11,499,14,498,498,14,500" />

          </map>
      </div>
  </div>
  <div class="col-3">
      <div class="bg-primary text-white">
      CRUD Convocatorias:  {{$convocatorias}}
        <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#convocatoria" style="width:90px;  "alt="">
          <map name="convocatoria">
          <area alt="" title="" href="convocatoria" shape="poly" coords="13,11,499,14,498,498,14,500" />

          </map>
      </div>
        <br>
  </div>
      <div class="col-3 ">
          <div class="bg-warning text-white">
            Usuarios registrados: {{$count}}
            <img src="https://image.flaticon.com/icons/png/512/97/97797.png" usemap="#Map0" style="width:90px; "alt="">
              <map name="Map0">
              <area alt="" title="" href="crudusers" shape="poly" coords="13,11,499,14,498,498,14,500" />
              <area alt="" title="" href="usuarios" shape="poly" coords="13,11,499,14,498,498,14,500" />
              </map>
          </div>
      </div>

      <div class="col-3">
          <div class="bg-primary text-white">
            Areas registradas:{{$catalogo}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#Map1" style="width:90px; position:relative; right: -20px;  "alt="">
              <map name="Map1">
              <area alt="" title="" href="crudareas" shape="poly" coords="13,11,499,14,498,498,14,500" />

              </map>
          </div>
      </div>

      <div class="col-3">
          <div class="bg-primary text-white">
            Entregable registrado:{{$entregable}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#entregable" style="width:90px;  "alt="">
              <map name="entregable" id="crudentregable">
              <area alt="" title="" href="crudentregables" shape="poly" coords="13,11,499,14,498,498,14,500" />

              </map>
          </div>
      </div>

      <div class="col-3 ">
          <div class="bg-primary text-white">
            Gasto de materiales : {{$gastos}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg"   usemap="#map" style="width:90px; position:relative; right: -10px; "alt="">
              <map name="map">
              <area alt="" title="" href="crudgastos" shape="poly" coords="13,11,499,14,498,498,14,500" />
              </map>
          </div>
      </div>

      <div class="col-3">
          <div class="bg-primary text-white">
            Tipos de investigacion:{{$tipo}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg" usemap="#tipo" style="width:90px; position:relative; right: -10px; "alt="">
              <map name="tipo">
              <area alt="" title="" href="crudinvestigacion" shape="poly" coords="13,11,499,14,498,498,14,500" />

              </map>
          </div>
      </div>

      <div class="col-3">
          <div class="bg-primary text-white">
            Lineas integradas:{{$lineas}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#linea" style="width:90px; position:relative; right: -30px; "alt="">
              <map name="linea" id="linea">
              <area alt="" title="" href="crudlineas" shape="poly" coords="13,11,499,14,498,498,14,500" />

              </map>
          </div>
      </div>

      <div class="col-4">
          <div class="bg-primary text-white">
            Longitud de caractares:{{$lineas}}
            <img src="https://image.flaticon.com/icons/svg/54/54551.svg"  usemap="#longitud" style="width:90px; position:relative; right: -30px; "alt="">
              <map name="longitud" id="longitud">
              <area alt="" title="" href="crudlongitudecaracteres" shape="poly" coords="13,11,499,14,498,498,14,500" />

              </map>
          </div>
      </div>


  </div>
@endsection
