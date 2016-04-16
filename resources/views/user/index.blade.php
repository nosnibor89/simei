@extends('layouts.tech')
@section('title', 'Usuarios - Index')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/user-index.css')}}" rel="stylesheet">
@endpush

@section('content')
<div >
  <div class="row">

    <h3>Usuarios</h3>


<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
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
                  {{ $user->role == 'user' ? "Usuario" : 'Tecnico' }}
                </td>
                <td>
                  <a href="{{url('user/edit')}}/{{$user->id}}" class="task-action" data-toggle="tooltip" data-placement="top" title="Editar"><span class="fa fa-pencil"></span></a>
                  <a href="javascript:void(0)" id="{{$user->id}}" class="task-action delete" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="fa fa-close" ></span></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<!-- Modal - Delete User Confirmation -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <h3>Eliminar Usuario?</h3>
        <div class="buttons">
          <button type="button" id="deleteButton" class="btn btn-success btn-sm" name="button">Si </button>
          <button type="button" class="btn btn-danger btn-sm" name="button" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div>
<!-- Modal - Delete User Confirmation -->

<!-- Modal - Delete Error Message -->
<div class="modal fade" id="deleteError" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <h3>No se puede eliminar</h3>
        <p class="center-block">
          Este usuario esta asociado a una o mas incidencias. Por favor contacta en al administrador del sistema
        </p>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
<!-- Modal - Delete Error Message -->
@endsection

@push('customscripts')
<!-- Custom JS -->
  <script src="{{asset('Content/js/user-index.js')}}" ></script>
@endpush
