@extends('layouts.tech')
@section('title', 'Crear')
@push('customstyles')
{{--Custom CSS --}}
<!-- <link href="{{asset('Content/css/task-detail.css')}}" rel="stylesheet"> -->
@endpush

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" method="post" action="{{url('taskorder/store')}}">
         {!! csrf_field() !!}
      <fieldset>
        <legend>Nueva Incidencia</legend>
        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">Asunto</label>
          <div class="col-lg-10">
            <input type="text" name="title" class="form-control input-sm" id="title" placeholder="Asunto" required>
          </div>
        </div>
        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Tipo de Falla</label>
          <div class="col-lg-10">
            <select class="form-control" id="select" name="fail">
              @foreach($fails as $fail)
              <option value="{{$fail->id}}">{{$fail->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="description" class="col-lg-2 control-label">Descripcion</label>
          <div class="col-lg-10">
            <textarea name="description" rows="8" cols="40" class="form-control" id="description" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default btn-sm" id="cancel">Cancelar</button>
            <button type="submit" class="btn btn-success btn-sm">Enviar</button>
          </div>
        </div>
      </fieldset>
    </form>


  </div>
</div>

@endsection

@push('customscripts')
{{-- Custom JS --}}
<script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script>
@endpush
