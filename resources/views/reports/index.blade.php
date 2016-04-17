@extends('layouts.tech')
@section('title', 'Reportes')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/reports.css')}}" rel="stylesheet">
@endpush
@section('content')

  <div class="row">

    <div class="col-md-6">
      <h3>Ordenes Por Tecnico</h3>
        <div id="orders-by-tech-chart" class="chart">

        </div>
    </div>
    <div class="col-md-6">
      <h3>Ordenes Por Impacto</h3>
      <div id="orders-by-impacts" class="chart">

      </div>
    </div>
  </div>



@endsection

@push('customscripts')
<!-- Custom JS -->
  <script src="{{asset('Content/js/report.js')}}" ></script>


@endpush
