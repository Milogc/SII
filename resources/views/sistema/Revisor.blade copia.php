<!-- 

    Información básica del proyecto

Convocatoria:   Convocatoria 2018: Apoyo a la Investigación Científica y Tecnológica en los Programas Educativos de los Institutos Tecnológicos Federales y Centros
Responsable:    GUZMAN-SANCHEZ, JORGE OCTAVIO
Modalidad:  Por licenciatura
Sometido:   2018-01-24 12:03:31
Dictamen:   Aprobado con financiamiento el 2018-03-12 10:39:18  [Ver detalle]

////Información básica del proyecto
id, titulo, nombre_ies, nombre_pe, area, nivel_academico, 
actreditado_habilitado, pnpc, linea, fecha_elaboracion, 
fecha_inicio, fecha_fin, duracion, convocatoria_id, responsable, 
tipo_investigacion, sometido, dictamen, 

////protocolo
resumen, introduccion, antecedentes, hipotesis, marco_teorico, 
metas, objetivo_general, objetivos_especificos, impacto_beneficio, 
metodologia, vinculacion, referencias, lugar, infraestrucutura

//// integrantes [colaboradores]
id, users_id, proyecto_id, participacion

////entregables
id, tipo, cuantos, descripcion, proyecto_id

////cronograma  (Programa de actividades)
id, actividad, fecha_inicio, fecha_fin, monto, proyecto_id, entregables_id

////insumos-materiales y servicios

////concentrado del presupuesto solicitado

////periodos para para ejercer el recurso

//mostrar = 0,1,2 = no,ver,todo

/*
  if($proyecto->responsable==Auth::user()->id){
    if(sometido) solo ver
    else todo
  if($colaborador->users_id==Auth::user()->id) 
    solo ver
  
*/

 -->
@extends('layouts.app')
@section('content')
<div class="container">

    @if (\Session::has('success'))
      <div class="alert alert-success" >
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    @if (\Session::has('error'))
    <div class="alert alert-danger ">
      <p>{{ \Session::get('error') }}</p>
    </div><br/>
    @endif

    MOSTRARLE SOLO LOS PROYECTOS QUE TIENE QUE REVISAR

  </div>
@endsection

@section('sctipts')
 @endsection