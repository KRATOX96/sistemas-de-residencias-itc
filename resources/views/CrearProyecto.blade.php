@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                    @include('layouts.NavBarJefeDivision')
        
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-2" >
                
                <b><p class="text-primary" style="text-align:center">Instrucciones:</p> </b>
                <p style="text-align:left">En esta ventana usted podra  integrar un nuevo proyecto al banco de proyectos, por favor rellene los campos de texto, y a continuacion pulse en el boton aceptar.</p>
            </div>
                
                <div class="col-md-5  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:20px ;">CrearProyecto</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;" >
                            <form class="form-horizontal">
                              <fieldset>

                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Nombre del proyecto:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NombreProyecto" placeholder="" >
                                  </div>
                                </div>

                                <div class="form-group">
                                              <label for="" class="col-lg-6 control-label">Lugar de realizacion de residencias:</label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="Lugar" placeholder="" >
                                              </div>
                                </div>

                                <div class="form-group">
                                  <label for="textArea" class="col-lg-6 control-label " style="text-align:left">Descripción:</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="1" id="textArea"></textarea>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" ">Aceptar </button>
                                  </div>
                                </div>

                              </fieldset>
                            </form>
                        </div>
                    </div>
                </div>


@endsection