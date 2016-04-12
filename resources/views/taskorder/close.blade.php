@extends('layouts.tech')
@section('title', 'Cerrar Orden')
@push('customstyles')
{{--Custom CSS --}}
<link href="{{asset('Content/css/taskorder-all.css')}}" rel="stylesheet">
<link href="{{asset('Content/css/close-task.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form class="form" method="post" action="{{url('taskorder/closeorder')}}">
         {!! csrf_field() !!}
      <fieldset>
        <legend>Cerrar Orden</legend>
        <h5>Orden Nro. {{$task->id}}</h5>
        <p>
          Asunto: {{$task->title}}
        </p>
        <div class="form-group">
          <input type="hidden" name="id" value="{{$id}}">
          <label for="resolution" >Nota de Resolucion</label>
          <div class="col-lg-10">
            <textarea name="resolution" rows="8" cols="40" class="form-control" id="resolution" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default btn-sm" id="cancel">Cancelar</button>
            <button type="submit" class="btn btn-success btn-sm">Cerrar Orden</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

@endsection

@push('customscripts')
{{-- Custom JS --}}
<script src="{{asset('Content/js/clear.js')}}" ></script>
@endpush
