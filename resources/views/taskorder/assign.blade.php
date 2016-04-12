@extends('layouts.tech')
@section('title', 'Asignar')
@push('customstyles')
{{--Custom CSS --}}
<link href="{{asset('Content/css/taskorder-all.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" method="post" action="{{url('taskorder/addtech')}}">
         {!! csrf_field() !!}
      <fieldset>
        <legend>Asignar Tecnico</legend>
        <div class="form-group">
          <input type="hidden" name="orderId" value="{{$orderId}}">
          <label for="select" class="col-lg-2 control-label">Tecnicos Disponibles</label>
          <div class="col-lg-10">
            <select class="form-control" id="select" name="techId">
              @foreach($techs as $tech)
              <option value="{{$tech->id}}">{{$tech->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-success btn-sm">Asignar</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

@endsection

@push('customscripts')
{{-- Custom JS --}}
<!-- <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script> -->
@endpush
