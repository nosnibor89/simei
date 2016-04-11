@extends('layouts.tech')
@section('title', 'Fallas - Index')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/fail-index.css')}}" rel="stylesheet">
@endpush
@section('content')
<div >
  <div class="row">

    <h3>Fallas</h3>


<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
    <div class="col-md-10 col-md-offset-1">
      <div class="table-responsive">
        <!-- <div class="pull-right">
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-filter btn-sm" data-target="pagado">Todos</button>
            <button type="button" class="btn btn-default btn-filter btn-sm" data-target="pendiente">Tecnicos</button>
            <button type="button" class="btn btn-default btn-filter btn-sm" data-target="cancelado">Usuarios</button>
          </div>
        </div> -->
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
                Descripcion
              </td>
              <td>
                Impacto
              </td>
              <td>
                Prioridad
              </td>
            </tr>
          </thead>
          <tbody>
            @foreach($fails as $fail)
              <tr>
                <td>
                  {{$fail->id}}
                </td>
                <td>
                  {{$fail->name}}
                </td>
                <td>
                  {{$fail->priority->name}}
                </td>
                <td>
                  {{ $fail->impact->name }}
                </td>
                <td>
                  <a href="{{url('fail/edit')}}/{{$fail->id}}" class="task-action"><span class="fa fa-pencil"></span></a>
                  <a href="javascript:void(0)" id="{{$fail->id}}" class="task-action delete"><span class="fa fa-close" ></span></a>
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
        <h3>Eliminar Falla?</h3>
        <div class="buttons">
          <button type="button" id="deleteButton" class="btn btn-success btn-sm" name="button">Si </button>
          <button type="button" class="btn btn-danger btn-sm" name="button" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div>
<!-- Modal - Delete User Confirmation -->
@endsection

@push('customscripts')
<!-- Custom JS -->
  <script src="{{asset('Content/js/fail-index.js')}}" ></script>
@endpush
