@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                    @include('layouts.NavBarUsuario')
        
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-2" >
                
                <b><p class="text-primary" style="text-align:center">Cambiar Contraseña</p> </b>
                <p style="text-align:center">Aqui Cambia tu contraseña por una que recuerdes con mas facilidad.</p>
            </div>
                
                <div class="col-md-5 col-md-offset-0 ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:50px;">Cambiar Contraseña</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;" >
                            <form class="form-horizontal">
                              <fieldset>
                                <div class="form-group">
                                  <label for="inputPassword" class="col-lg-4 control-label">    Contraseña actual:</label>
                                  <div class="col-lg-8">
                                    <input type="password" class="form-control" id="ActualPasword" placeholder="Contraseña Actual">
                                  </div>
                                </div>

                                <div class="form-group">
                                              <label for="inputPassword" class="col-lg-4 control-label">Nueva contraseña:</label>
                                              <div class="col-lg-8">
                                                <input type="password" class="form-control" id="NewPasword" placeholder="Nueva Contraseña">
                                              </div>
                                </div>

                                <div class="form-group">
                                              <label for="inputPassword" class="col-lg-4 control-label">Repite la contraseña:</label>
                                              <div class="col-lg-8">
                                                <input type="password" class="form-control" id="RepitPasword" placeholder="Repite Contraseña">
                                              </div>
                                </div>
                              </fieldset>
                            </form>
                        </div>
                    </div>
                </div>


@endsection