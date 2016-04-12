@extends('layouts.tech')
@section('title', 'Usuarios - Index')

@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/user-index.css')}}" rel="stylesheet">
@endpush
@section('content')

  <div class="row">

    <div class="col-md-6">
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
  <!-- <script src="{{asset('Content/js/user-index.js')}}" ></script> -->
  <script>
    var gra = '';
    var url = "http://localhost:8000/reportajax";
    $.ajax(url,{
      success: function(data){
        new Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'orders-by-tech-chart',
            data: data,
            xkey: 'name',
            ykeys: ['value'],
            labels: ['name']
        });
      }
    });

      // var info = JSON.parse(gra);
      // console.log(gra);
      // new Morris.Bar({
      //     // ID of the element in which to draw the chart.
      //     element: 'orders-by-tech-chart',
      //     data: info,
      //     xkey: 'name',
      //     ykeys: ['value'],
      //     labels: ['name']
      // });
  </script>
@endpush
