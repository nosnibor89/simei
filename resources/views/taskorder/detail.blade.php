@extends('layouts.tech')
@section('title', 'Detalle')
@push('customstyles')
 {{--Custom CSS --}}
  <link href="{{asset('Content/css/task-detail.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h4 class="detail-title">Detalle de Incidencia</h4>
      <div class="list-group">
        <div class="list-group-item active">
            <strong>Incidencia Nro. {{$task->id}}</strong>
        </div>

        <div class="list-group-item">
        <p class="key">Titulo:</p> {{$task->title}}
        </div>
        <div class="list-group-item">
        <p class="key">Usuario:</p>  {{$task->user->name}}
        </div>
        <div class="list-group-item">
        <p class="key">Estado:</p>  {{$task->status->name}}
        </div>
        <div class="list-group-item">
          <p class="key">Tpo de Falla:</p>
          <div class="fail-detail">
            {{$task->fail->name}}
            <p>Prioridad:  {{$task->fail->priority_id}}| Impacto: {{$task->fail->impact_id}}</p>
          </div>
        </div>
        <div class="list-group-item">
        <p class="key">Fecha de Apertura:</p>  {{$task->startDate}}
        </div>
        <div class="list-group-item">
        <p class="key">Fecha de Cierre:</p>  {{$task->startDate or "Abierta Aun"}}
        </div>
        <div class="list-group-item">
        <p class="key">Descripcion:</p>  {{$task->desription}}
        </div>

      </div>
      <br>
      <a href="{{url('/taskorder/edit')}}/{{$task->id}}" class="btn btn-info btn-sm edit">Editar</a>

    </div>
</div>

@endsection

@push('customscripts')
{{-- Custom JS --}}
  <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script>
@endpush
