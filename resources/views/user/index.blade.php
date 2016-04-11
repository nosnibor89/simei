@extends('layouts.tech')
@section('title', 'Usuarios - Index')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/user-index.css')}}" rel="stylesheet">
@endpush
@section('content')

<div class="row">

  <h3>Usuarios</h3>

  <div class="col-md-10 col-md-offset-1">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr class="info">
            <td>
              ID
            </td>
            <td>
              Nombre
            </td>
            <td>
              Correo
            </td>
            <td>
              Rol
            </td>
            <td>
              Accion
            </td>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>
                {{$user->id}}
              </td>
              <td>
                {{$user->name}}
              </td>
              <td>
                {{$user->email}}
              </td>
              <td>
                {{$user->role}}
              </td>
              <td>
                <a href="{{url('user/edit')}}/{{$user->id}}" class="task-action"><span class="fa fa-pencil"></span></a>
                <a href="{{url('user/delete')}}/{{$user->id}}" class="task-action"><span class="fa fa-close"></span></a>
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
<!-- Custom JS -->
  <!-- <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script> -->
@endpush
