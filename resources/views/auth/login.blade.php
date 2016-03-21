@extends('layouts.main')
@section('title',"Login")
@section('content')
<div class="container">
       <div class="row">
           <div class="col-md-4 col-md-offset-4">
               <div class="login-panel panel panel-default">
                   <div class="panel-heading">
                       <h3 class="panel-title">Inicio de Sesion</h3>
                   </div>
                   <div class="panel-body">
                       <form role="form" method="post" action="{{ url('login') }}">
                           {!! csrf_field() !!}
                           <fieldset>
                               <!-- username -->
                               <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <input class="form-control" placeholder="Correo Electronico..." name="email" type="email" autofocus>
                                    </div>
                                   @if ($errors->has('email'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                               </div>
                                <!-- username -->
                                <!-- password -->
                               <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                   <div class="input-group">
                                       <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                                       <input class="form-control" placeholder="Contraseña..." name="password" type="password" value="">
                                   </div>
                                   @if ($errors->has('password'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif
                               </div>
                               <!-- password -->

                               <!-- button -->
                               <button type="submit" href="index.html" class="btn btn-lg btn-success btn-block">Iniciar</button>
                               <!-- button -->
                           </fieldset>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
