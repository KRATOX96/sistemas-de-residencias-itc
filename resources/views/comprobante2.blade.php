@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" text-align="center">
                    @include('layouts.NavBarJefeDivision')

                      <div class="row">
            <div class="col-lg-4 col-md-offset-0" >

                <b><p class="text-primary" style="text-align:center">Instrucciones:</p> </b>
                <p style="text-align:left">En esta ventana usted podra descargar las calificaciones del alumno y su informe tecnico, pulse en aceptar si considera que el alumno cumple con todos los requisitos para acreditar las practicas profesionales, o en rechazar en caso contrario .</p>
            </div>
                
                <div class="col-lg-8  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:20px ;">Comprobar finalizacion</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;" >
                            <form action="" method="POST" class="form-horizontal">

                              <fieldset>


                                {{ csrf_field()}}



                                <div class="form-group">
                                       <label for="" class="col-lg-3 col-lg-offset-0 control-label" style="text-align:left; margin-bottom:10px;">Informe tecnico:</label>    

                                  <div class="col-lg-2 col-lg-offset-0">
                                 <button class="btn btn-info" id="descargar1" value="descargar1" name="descargar1">Descargar  </button>
                                  </div>
          

                                </div>

                                <div class="form-group">
                                       <label for="" class="col-lg-3 col-lg-offset-0 control-label" style="text-align:left; margin-bottom:10px;">Calificacion del asesor externo:</label>    

                                  <div class="col-lg-2 col-lg-offset-0">
                                 <button class="btn btn-info" id="descargar2" value="descargar2" name="descargar2">Descargar  </button>
                                  </div>
          

                                </div>

                                 <div class="form-group">
                                       <label for="" class="col-lg-3 col-lg-offset-0 control-label" style="text-align:left; margin-bottom:10px;">Carlificacion del asesor interno:</label>    

                                  <div class="col-lg-2 col-lg-offset-0">
                                 <button class="btn btn-info" id="descargar3" value="descargar3" name="descargar3">Descargar  </button>
                                  </div>
          

                                </div>

                                <div class="form-group">
                               
                                  <div class="col-lg-4 col-lg-offset-1">
                                 <button type="submit" class="btn btn-primary" id="terminar" method="post" value="terminar" name="terminar" onclick="return confirm('En verdad has terminado las residencias?')">he terminado las residencias </button>
                                  </div>
                                </div>


                                </div>
                            </fieldset>
                            </form>
              </div>
            </div>
        </div>
    </div>

          


</div>
</div>
</div>
@endsection
@section('scripts')
<script src="/js/usuarios/edit.js"></script>
@endsection