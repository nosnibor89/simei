@extends('layouts.tech')
@section('title', 'Reportes')

@push('customstyles')
<!-- Custom CSS -->
  <!-- <link href="{{asset('Content/css/user-index.css')}}" rel="stylesheet"> -->
@endpush
@section('content')

  <div class="row">

    <div class="col-md-6">
      <h3>Ordenes Por Tecnico</h3>
        <div id="orders-by-tech-chart">

        </div>
    </div>
    <div class="col-md-6">
      <div id="orders-by-impacts">

      </div>
    </div>
  </div>



@endsection

@push('customscripts')
<!-- Custom JS -->
  <script src="{{asset('Content/js/report.js')}}" ></script>
  <script type="text/javascript">
    alert('hosdf');
  </script>

@endpush
