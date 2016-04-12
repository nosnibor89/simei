@extends('layouts.tech')
@section('title', 'TMS')
@push('customstyles')
<!-- Custom CSS -->
<link href="{{asset('Content/css/tms.css')}}" rel="stylesheet">
@endpush

@section('content')
<!-- Welcome -->
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h3>Conexion a TMS</h3>

    <form class="form-horizontal">
      <div class="col-md-6">
        <div class="form-group">
          <label  class="control-label col-md-3">Nombre</label>
          <div class="col-md-5">
            <input type="text" class="form-control input-sm" >
          </div>
        </div>
        <div class="form-group ">
          <label class="control-label col-md-3">Nombre</label>
          <div class="col-md-5">
            <input type="text"  class="form-control input-sm" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Nombre</label>
          <div class="col-md-5">
            <input type="text"  class="form-control input-sm">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Activar TPDU
            </label>
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="form-group">
          <label for="select" class="col-md-3 control-label">Tamaño De Data</label>
          <div class="col-md-3">
            <select class="form-control" id="select" name="impact">
              <option value="">2</option>
              <option value="">4</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-2 control-label">APPNM</label>
          <div class="col-md-4">
            <input type="text"  class="form-control input-sm">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <div class="col-md-12">
            <label>Data Recibida</label>
            <textarea  rows="8" cols="40" class="form-control" id="resolution" required></textarea>
          </div>
        </div>
      </div>


        <div class="form-group">
          <div class="col-md-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default btn-sm">Limpiar</button>
            <button type="submit" class="btn btn-default btn-sm">Desconectar</button>
            <button type="reset" class="btn btn-default btn-sm" id="show-modal">Conectar</button>
            <button type="submit" class="btn btn-default btn-sm">Cerrar</button>
          </div>
        </div>

    </form>
  </div>

</div>
<!-- Welcome -->

<!-- Modal - Delete User Confirmation -->

<div class="modal fade" id="tmsModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <h3>Conectando a TMS...</h3>
    </div>
  </div>
</div>
<!-- Modal - Delete User Confirmation -->


@endsection

@push('customscripts')
<!-- Custom JS -->
<script src="{{asset('Content/js/tms.js')}}" ></script>
@endpush
