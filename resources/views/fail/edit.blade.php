@extends('layouts.tech')
@section('title', 'Editar')

@push('customstyles')
<!-- Custom CSS -->
  <!-- <link href="{{asset('Content/css/create-fail.css')}}" rel="stylesheet"> -->
@endpush
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" method="post" action="{{url('fail/update')}}">
         {!! csrf_field() !!}
      <fieldset>
        <legend>Editar Falla</legend>
        <div class="form-group">
          {{ method_field('PUT') }}
          <input type="hidden" name="id" value="{{$fail->id}}">
          <label for="name" class="col-lg-2 control-label">Nombre</label>
          <div class="col-lg-10">
            <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Nombre"  value="{{$fail->name}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Prioridad</label>
          <div class="col-lg-10">
            <select class="form-control" id="select" name="priority">
              @foreach($prioritys as $priority)
              <option value="{{$priority->id}}" {{$fail->priority_id == $priority->id ? "selected" : ""}}>{{$priority->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Impacto</label>
          <div class="col-lg-10">
            <select class="form-control" id="select" name="impact">
              @foreach($impacts as $impact)
              <option value="{{$impact->id}}" {{$fail->impact_id == $impact->id ? "selected" : ""}}>{{$impact->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default btn-sm" id="cancel">Cancelar</button>
            <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>


@endsection

@push('customscripts')
<!-- Custom JS -->
  <!-- <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script> -->
    <script src="{{asset('Content/js/clear.js')}}" ></script>
@endpush
