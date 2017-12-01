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
                <p style="text-align:left">En esta ventana usted podra enviar su solicitud de residencia, por favor pulse sobre el cuadro de texto "seleccionar proyecto",elija un proyecto del banco de proyectos y a continuacion pulse en el boton aceptar.</p>
            </div>
                
                <div class="col-md-5  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:50px ;">Solicitar residencia</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;"  >
                              @if (($alumnos->creditos<208|| $alumnos->actividadesC!='acreditadas' ||$alumnos->situacionE=='especial'||$alumnos->servicioS!='acreditado') && $alumnos->plan!='plan viejo')
                                  <div class="alert alert-danger">
                                      <ul>
                                          Usted no cumple con los requisitos para solicitar la residencia:<br>
                                          @if($alumnos->creditos<208)
                                           <li>Creditos insuficientes</li>
                                          @endif

                                          @if($alumnos->actividadesC!='acreditadas')
                                           <li>Actividades complementarias no acreditadas</li>
                                          @endif

                                          @if($alumnos->situacionE=='especial')
                                           <li>Estas en especial</li>
                                          @endif

                                          @if($alumnos->servicioS!='acreditado')
                                           <li>Servicio escolar no acreditado</li>
                                          @endif
                                            
                                      </ul>
                                  </div>
                              @endif
                              @if($alumnos->plan=='plan viejo'&&$alumnos->creditos<202)
                                  <div class="alert alert-danger">
                                      <ul>
                                          Usted no cumple con los requisitos para solicitar la residencia:<br>
                                          @if($alumnos->creditos<202)
                                           <li>Creditos insuficientes</li>
                                          @endif
                                      </ul>
                                  </div>
                              @endif

                                
                            <form class="form-horizontal" action="" method="POST" >

                              <fieldset>
                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Seleccionar proyecto:</label>
                                  <div class="col-lg-8 ">
                                    <select type="text" class="form-control" id="NombreProyecto"  >
                                      <option value="">Seleccione un proyecto</option>
                                    @foreach($proyectos as $proyecto)
                                        <option value="{{$proyecto->PROYECTOID }}">{{$proyecto->PROYECTONOMBRE}}</option>
                                      @endforeach

                                    </select>
                                  </div>
                                </div>
                                 @if ($alumnos->creditos<208|| $alumnos->actividadesC!='acreditadas' ||$alumnos->situacionE=='especial'||$alumnos->servicioS!='acreditado' )
                                    <script > document.getElementById("NombreProyecto").disabled = true;</script>
                                @endif

                                @if($alumnos->plan=='plan viejo'&&$alumnos->creditos>=202)
                                  <script > document.getElementById("NombreProyecto").disabled = false;</script>
                                @endif
                                {{ csrf_field()}}
                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Nombre del proyecto:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NombreP" name="NombreP" placeholder="" readonly="">
                                  </div>
                                </div>

                                <div class="form-group">
                                              <label for="" class="col-lg-6 control-label" style="text-align:left">Lugar de realizacion de residencias:</label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="Lugar" placeholder="" disabled="">
                                              </div>
                                </div>

                                <div class="form-group">
                                  <label for="textArea" class="col-lg-6 control-label " style="text-align:left">Descripción:</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" disabled=""></textarea>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" id="aceptar" method="post" >Aceptar </button>

                                  </div>
                                </div>

                              </fieldset>
                            </form>
                        </div>
                    </div>
                </div>


@endsection
@section('scripts')
<script src="/js/usuarios/edit.js"></script>
@endsection