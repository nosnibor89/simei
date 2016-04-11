@extends('layouts.tech')
@section('title', 'Editar')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/edit-user.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" method="post" action="{{url('user/update')}}">
         {!! csrf_field() !!}
      <fieldset>
        <legend>Editar Usuario</legend>
        <div class="form-group">
          {{ method_field('PUT') }}
          <input type="hidden" name="id" value="{{$user->id}}">
          <label for="name" class="col-lg-2 control-label">Nombre</label>
          <div class="col-lg-10">
            <input type="text" name="name" class="form-control input-sm" id="name" placeholder="Nombre" value="{{$user->name}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Correo Electronico</label>
          <div class="col-lg-10">
            <input type="text" name="email" class="form-control input-sm" id="inputEmail" value="{{$user->email}}" placeholder="Correo Electronico" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
          <div class="col-lg-10">
            <input type="password" name="password" class="form-control input-sm" id="inputPassword" placeholder="Contraseña" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPasswordRepeat" class="col-lg-2 control-label">Repetir</label>
          <div class="col-lg-10">
            <input type="password" name="passwordRepeat" class="form-control input-sm" id="inputPasswordRepeat" placeholder="Contraseña" required>
          </div>
        </div>
        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Rol</label>
          <div class="col-lg-10">
            <select class="form-control" id="select" name="role">
              <option value="user" {{$user->role == "user"? "selected": ""}}>Usuario</option>
              <option value="technician" {{$user->role == "technician"? "selected": ""}}>Tecnico</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default btn-sm">Cancelar</button>
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
@endpush
