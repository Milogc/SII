@extends('layouts.app')
@section('content')
<div class="container">

    @if (\Session::has('danger'))
      <div class="alert alert-danger" >
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <p>{{ \Session::get('danger') }}</p>
      </div><br />
     @endif
    @if (\Session::has('error'))
    <div class="alert alert-danger ">
      <p>{{ \Session::get('error') }}</p>
    </div><br/>
    @endif
    MOSTRARLE SOLO LOS PROYECTOS QUE TIENE QUE REVISAR
      <div class="row">
        <div class="col-md-6">
          <ul class="pagination" role="navigation">
            <li class="page-item"><a class="page-link" href="#" rel="prev" aria-label="« Anterior">‹</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#" rel="next" aria-label="Siguiente »">›</a></li>
          </ul>
        </div>
        <div class="col-md-6">
            <div class="text-center">Nomenclatura</div>
            <div class="alert-danger border border-dark">Proyecto QUE DEBE ALGUN REPORTE</div>
            <div class="alert-success border border-dark">Proyecto QUE HA PRESENTADO SUS REPORTES</div>
         </div>
      </div>
    
    <br>
    Proyectos Registrados Por Convocatoria
    <table class="table">
    <thead>
      <tr>
        <th>Convocatoria</th>
        <th colspan="2">Proyecto(s)</th>
      </tr>
    </thead>
    <tbody>
              <tr class="info">
          <td>
            CONVOCATORIA PARA ARAÑAS<br>
            (2018-09-01 a 2018-11-01)
          </td>        
        </tr>
                          <tr>
                <td>
                  
                </td>
                <td class="alert-danger">
                  Titulo: DISEÑO Y CONSTRUCCIÓN DE UN CUADRICÓPTERO DE VIGILANCIA”. (2da. ETAPA: CONSTRUCCIÓN) <br>
                  Linea: ROBÓTICA <br>
                  Perido: ( 2018-01 de  ) <br>
                  Director: M.C. RAÚL MORENO RINCÓN<br>
                  Financiado:  NO  <br>
                  Colaboradores:<ul>
                                          <li>Jorge Octavio Guzmán
                         
                          - ya acepto  
                         </li>
                                          <li>Héctor Guerra Crespo
                         
                          - ya acepto  
                         </li>
                      
                  </ul>
                </td>
                <td class="alert-danger">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Documentos<span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                      <ol>
                                                <li><a class="drowpdown-item" href="http://sii.ittg.mx/pdfdci01/2">REPORTE PARCIAL 01</a></li>                        
                                                <li><a class="drowpdown-item" href="http://sii.ittg.mx/pdfdci02/2">REPORTE PARCIAL 02</a></li>
                                                <li><a class="drowpdown-item" href="http://sii.ittg.mx/pdfdci02/2">REPORTE FINAL</a></li>
                      </ol>
                    </div>
                  </div>
                </td>
              </tr>
                          <tr>
                <td>
                  
                </td>
                <td class="alert-success">
                  Titulo: Diseño y construcción de un robot en forma de Araña hexápoda para pruebas de tecnicas de inteligencia artificial <br>
                  Linea: ROBÓTICA <br>
                  Perido: ( 2018-01 de  ) <br>
                  Director: Raul Moreno Rincon<br>
                  Financiado:  SI  <br>
                  Colaboradores:<ul>
                      
                  </ul>
                </td>
                <td class="alert-success">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Documentos<span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                      <ol>
                                                <li><a class="drowpdown-item bg-danger text-white" href="http://sii.ittg.mx/pdfci01/3">REPORTE PARCIAL 01</a></li>
                                                <li><a class="drowpdown-item bg-danger text-white" href="http://sii.ittg.mx/pdfci02/3">REPORTE PARCIAL 02</a></li>
                                                <li><a class="drowpdown-item" href="http://sii.ittg.mx/pdfdci02/2">REPORTE FINAL</a></li>
                    </div>
                  </div>
                </td>
              </tr>
                     </tbody>
  </table>



  </div>
@endsection

@section('sctipts')
<script language="javascript">
  $( document ).ready(function() {
    $(".btnaceptar").click(aceptar);    
    $(".btnrechaza").click(rechaza);    
  });
</script>
 <script src="{{asset('js/aceptacion.js')}}"></script>
 @endsection