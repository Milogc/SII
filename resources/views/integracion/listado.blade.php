<!-- index.blade.php -->
@extends('layouts.app')
@section("content")
    <div class="container">
      <div class="row">
        <div class="col-md-6">{{ $convocatorias->links() }}</div>
        <div class="col-md-6">
            <div class="text-center">Nomenclatura</div>
            <div class="alert-success border border-dark">Proyecto ya sometido</div>
            <div class="alert-warning border border-dark">Proyecto no sometido aun</div>
         </div>
      </div>
    
    <br />
    Proyectos Registrados Por Convocatoria
    <table class="table">
    <thead>
      <tr>
        <th>Convocatoria</th>
        <th colspan="2">Proyecto(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($convocatorias as $convocatoria)
        <tr class="info">
          <td>
            {{$convocatoria['Nombre']}}<br>
            ({{$convocatoria['Fecha_inicio']}} a {{$convocatoria['Fecha_fin']}})
          </td>        
        </tr>
            @foreach($convocatoria->proyectos as $proyecto)
              <tr>
                <td>
                  
                </td>
                <td @if($proyecto['sometido'] == "")
                    class="alert-warning"
                  @else
                    class="alert-success"
                  @endif >
                  Titulo: {{$proyecto['titulo']}} <br>
                  Linea: {{$proyecto['linea']}} <br>
                  Perido: ( {{$proyecto['fecha_inicio']}} de {{$proyecto['fecha_fin']}} ) <br>
                  Director: {{$proyecto->director->name}}<br>
                  Financiado: @if($proyecto['financiado']==0) SI @else NO @endif <br>
                  Colaboradores:<ul>
                    @foreach($proyecto->colaboradores as $colaborador)
                      <li>{{$colaborador->quien->name}}</li>
                    @endforeach
                  </ul>
                </td>
                <td @if($proyecto['sometido'] == "")
                    class="alert-warning"
                  @else
                    class="alert-success"
                  @endif >
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Documentos<span class="caret"></span>
                    </button>
                    <ol class="dropdown-menu text-left">
                      <li><a class="drowpdown-item" href="{{action('DocumentosController@ci01', $proyecto['id'])}}">CI-01</a></li>
                      <li><a class="drowpdown-item" href="{{action('DocumentosController@ci02', $proyecto['id'])}}">CI-02</a></li>
                      @if($proyecto['vinculacion'] != "")
                      <li><a href="{{action('DocumentosController@vinculacion', $proyecto['id'])}}">Vinculacion</a></li>
                      @endif
                      <!-- <li><a href="{{action('Investigador\SometerController@someter', $proyecto['id'])}}">7. Someter</a></li> -->
                    </ol>
                  </div>
                </td>
              </tr>
            @endforeach
     @endforeach
    </tbody>
  </table>
  </div>
@endsection
 