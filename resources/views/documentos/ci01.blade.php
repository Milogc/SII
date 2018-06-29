<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      h3{
        text-align: center;
      }
      h5{
        text-align: center;
      }
      p{

        text-align: justify;
      }
      table, th, td {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
      }

      thead{
        background-color: gray;
        text-align: center;        
      }


      th{
        padding: 5px;
        text-align: left;
      }

       td {
        padding: 5px;
        text-align: left;
}

    </style>
  </head>
  <body>
    <h3><b>FORMATO CONCENTRADOR DE SOLCITUD DE APOYO ECONÓMICO</b></h3>
    <h3><b>(CI-01/{{$proyecto->fecha_inicio}})</b></h3>


<table>
  <tr>
    <th colspan="2"><b>NOMBRE DE LA INSTITUTCION: </b> {{$proyecto->nombre_ies}}</th>
  </tr>
  <tr>
    <td>
      Responsable del Proyecto:
      <br>
      <b>{{$proyecto->director->name}}</b>
      <br>
      CVU-TecNM:
      <br>
      <b>IT16A058</b>
    </td>
    <td>
      Titulo del proyecto:
      <br>
      <b>{{$proyecto->titulo}}</b>
      </td>
      </tr>
        <tr>
      <td colspan="2">
        Tipo de investigación: <b>{{$proyecto->tipo_investigacion}}</b>
        <br>
        Area del conocimiento: <b>{{$proyecto->area}}</b>
        <br>
        Durcion del proyecto: <b>{{$proyecto->fecha_inicio}} al {{$proyecto->fecha_fin}}</b>
      </td>

  </tr>
</table>
<br>

<table>
  <thead>
    <tr>
      <th colspan="4">INTEGRANTES DEL PROYECTO</th>
    </tr>
    <tr>
      <td>CVU-TecNM</td>
      <td>Integrante</td>
      <td>Rol</td>
      <td>Fimra autógrafa</td>
    </tr>  
  </thead>
  <tbody>
    <tr>
      <td>{{$proyecto->director->cvutecnm}}</td>
      <td><b>{{$proyecto->director->name}}</b>
        <br>
        Adscripción: {{$proyecto->director->adscripcion}}
      </td>
      <td><center> Resposnable </center></td>
      <td></td>
    </tr>
      @foreach($proyecto->colaboradores as $colaborador)
        <tr>
              <td>{{$colaborador->quien->cvutecnm}}</td>
              <td>{{$colaborador->quien->name}}
              <br>
              Adscripción: {{$colaborador->quien->adscripcion}}
              </td>
              <td> <center> Colaborador</center></td>
              <td></td>
        </tr>
    @endforeach
  </tbody>
</table>
<br>

<table style="">
  <thead>
    <tr>
        <th><b>OBJETIVO DEL PROYECTO</b></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1. GENERAL
        <br>
        {{$proyecto->objetivo_general }}
      </td>

    </tr>

     <tr>
      <td>2. ESPECIFICO
        <br>
          {{$proyecto->objetivos_especificos}}
      </td>

    </tr>
    
  </tbody>
</table>
<br>


@php
  $entregablesa = $proyecto->entregables->where('tipo',"ACADEMICO");
  $listaa = "<ol>";
  foreach ($entregablesa as $entregable) {
    $listaa .= "<li>$entregable->descripcion: $entregable->cuantos</li>";
  }
  $listaa . "</ol>";

  $entregablesh = $proyecto->entregables->where('tipo',"HUMANO");
  $listah = "<ol>";
  foreach ($entregablesh as $entregable) {
    $listah .= "<li>$entregable->descripcion: $entregable->cuantos</li>";
  }
  $listah . "</ol>";
@endphp


<table>
  <tr>
  <th colspan="2" id="tabla2">PRODUCTOS ESNTREGABLES</sth>
  </tr>
  <tr>
    <th id="tabla2">Cotribucion a la Formacion de Recursos Humanos</th>
    <th id="tabla2">Productividad Académica</th>
    </tr>
  <tr>
    <td>{!!$listah!!}</td>
    <td>{!!$listaa!!}</td>
  </tr>
</table>

<h3>
  <center>
  <b>Cronogrma de Actividades</b>
</center>
</h3>
<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Actividad</th>
    <th>Entregables</th>
    <th>Periodo de realizacion</th>
    <th>Monto</th>
  </tr>
</thead>
<tbody>
  @php
    $actividades = $proyecto->actividades;
  @endphp
  @foreach ($actividades as $actividad)
    <tr>
       <td>{{$loop->iteration}}</td>
      <td>{{$actividad['actividad']}}</td>
      <td>{{$actividad->entregable->descripcion}}</td>
       <td>{{$actividad->fecha_inicio}} a {{$actividad->fecha_fin}}</td>
       @php
          $suma = 0;
          $gastos=$actividad->gastos;
          foreach ($gastos as $gasto) {
            $suma += $gasto->monto;
          }
       @endphp
      <td>
        {{$suma}}
      </td>
   </tr>
  @endforeach
</tbody>



</table>




  </body>
</html>
