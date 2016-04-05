@extends('layouts.tech')
@section('title', 'Index')
@push('customstyles')
<!-- Custom CSS -->
  <link href="{{asset('Content/css/techindex.css')}}" rel="stylesheet">
@endpush

@section('content')


<div class="" ng-controller="TasksController">
  <!-- Total -->
  <div class="col-lg-3 col-md-6">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                      <div class="huge">{{$total}}</div>
                      <div>Total</div>
                  </div>
              </div>
          </div>
          <a href="javascript:void(0)" ng-click="getUserTasks('all')">
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
                      <div class="huge">{{$open}}</div>
                      <div>Abiertas</div>
                  </div>
              </div>
          </div>
          <a href="javascript:void(0)" ng-click="getUserTasks('opened')">
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
                      <div class="huge">{{$closed}}</div>
                      <div>Cerradas</div>
                  </div>
              </div>
          </div>
          <a href="javascript:void(0)" ng-click="getUserTasks('closed')">
              <div class="panel-footer">
                  <span class="pull-left">Filtar Tabla</span>
                  <span class="pull-right"><i class="fa fa-filter"></i></span>
                  <div class="clearfix"></div>
              </div>
          </a>
      </div>
  </div>
  <!-- Cerradas -->
  <!-- Pausada -->
  <div class="col-lg-3 col-md-6">
      <div class="panel panel-info">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-pause fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                      <div class="huge">{{$paused}}</div>
                      <div>Pausada</div>
                  </div>
              </div>
          </div>
          <a href="javascript:void(0)" ng-click="getUserTasks('paused')">
              <div class="panel-footer">
                  <span class="pull-left">Filtar Tabla</span>
                  <span class="pull-right"><i class="fa fa-filter"></i></span>
                  <div class="clearfix"></div>
              </div>
          </a>
      </div>
  </div>
  <!-- Pausadas -->

      @{{greeting}}

      <!-- Table -->
      <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <td>
                  Titulo 1
                </td>
                <td>
                  Titulo 2
                </td>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="task in tasks">
                <td>
                  @{{task.id}}
                </td>
                <td>
                  @{{task.title}}
                </td>
                <td>
                  @{{task.description}}
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    <!-- table -->
</div>


@endsection

@push('customscripts')
<!-- Custom JS -->
  <script src="{{asset('Content/angular/controllers/simei-tech-controller.js')}}" ></script>
@endpush
