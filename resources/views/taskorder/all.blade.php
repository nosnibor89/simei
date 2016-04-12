@extends('layouts.tech')
@section('title', 'Incidencias')
@push('customstyles')
{{--Custom CSS --}}
<link href="{{asset('Content/css/taskorder-all.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h3>Incidencias</h3>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr class="info">
            <td>
              ID
            </td>
            <td>
              Titulo
            </td>
            <td>
              Usuario
            </td>
            <td>
              Tecnico
            </td>
            <td>
              Falla
            </td>
            <td>
              Estado
            </td>
            <td>
              Desde
            </td>
            <td>
              Accion
            </td>
          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
          <tr>
            <td>
              {{$task->id}}
            </td>
            <td>
              {{$task->title}}
            </td>
            <td>
              {{$task->user->name}}
            </td>
            <td>
              {{$task->technician->name or ""}}
            </td>
            <td>
              {{$task->fail->name}}
            </td>
            <td>
              {{$task->status->name}}
            </td>
            <td>
              {{$task->startDate}}
            </td>
            <td>
              <a href="{{url('/taskorder/show')}}/{{$task->id}}" class="task-action" data-toggle="tooltip" data-placement="top" title="Ver"><span class="fa fa-search"></span></a>
              <a href="{{url('/taskorder/assign')}}/{{$task->id}}" class="task-action"><span class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Asignar Tecnico"></span></a>
                <a href="{{url('/taskorder/close')}}/{{$task->id}}" class="task-action"><span class="fa fa-folder" data-toggle="tooltip" data-placement="top" title="Cerrar Incidencia"></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@push('customscripts')
{{-- Custom JS --}}
<!-- <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script> -->
@endpush
