@extends('layouts.tech')
@section('title', 'Index')
@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/techindex.css')}}" rel="stylesheet">
@endpush

@section('content')
<!-- Total -->
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>Total</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">Filtar Tabla</span>
                <span class="pull-right"><i class="fa fa-filter"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<!-- Total -->
<!-- Abiertas -->
<div class="col-lg-3 col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-folder-open fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>Abiertas</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">Filtar Tabla</span>
                <span class="pull-right"><i class="fa fa-filter"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<!-- Abiertas -->
<!-- Cerradas -->
<div class="col-lg-3 col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-folder fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>Cerradas</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">Filtar Tabla</span>
                <span class="pull-right"><i class="fa fa-filter"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<!-- Cerradas -->
<!-- Cerradas -->
<div class="col-lg-3 col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-pause fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>Pausada</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">Filtar Tabla</span>
                <span class="pull-right"><i class="fa fa-filter"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<!-- Cerradas -->

<h1>{{$id or ''}}</h1>
@endsection
