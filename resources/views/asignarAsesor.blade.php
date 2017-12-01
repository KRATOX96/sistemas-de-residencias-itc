@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                    @include('layouts.NavBarJefeDivision')
        			          
                </div>
            </div>
        </div>  
                <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					        <div class="modal-content">
					        	<div class="row">
						            <div class="col-md-1 col-md-offset-2">
						            	<br>
										<img src="https://icon-icons.com/icons2/317/PNG/512/user-male-icon_34332.png" alt="perfil" class="img-rounded" alt="Cinque Terre" width="100" height="100" style="border: 2px solid silver;">
						                <b>        
						                    <p class="text-primary">{{$alumno->NODECONTROL}}</p>
						                    <p class="text-primary">{{$alumno->NOMBREALUMN }}</p>
						                    <p class="text-primary">{{$alumno->APELLIDOSALUMN}}</p>
						                </b>
						            </div>
						            						                        	<br>
						                <div class="col-md-5 col-md-offset-2 ">
						                    <div class=" panel panel-primary ">
						                        <div class="panel-heading">

						                            <h3 class="panel-title">Datos academicos</h3>
						                        </div>

						                        <div class="panel-body " style="background-color:#F0F8FF; ">
						                            <p><b>Carrera:</b> {{  $alumno->CARRERANOMBRE}}</p>
						                            <p><b>Plan de estudios:</b> {{$alumno->plan}}</p>
						                            <p><b>Creditos acumulados:</b> {{$alumno->creditos}}</p>
						                            <p><b>Periodo Actual o Ultimo:</b> Semestre {{$alumno->semestre}} </p>
						                            <p><b>Servicion social:</b>{{$alumno->servicioS}}</p>
						                            <p><b>Actividades complementarias:</b> {{$alumno->actividadesC}}</p>
						                            <p><b>Situacion escolar:</b> {{$alumno->situacionE}}</p>

						                        </div>
						                    </div>
                						</div>   
									

						        </div>
						    </div>
						</div>
					</div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2" >
                
                <b><p class="text-primary" style="text-align:center">Instrucciones:</p> </b>
                <p style="text-align:left">En esta ventana usted podra asignar asesor al alumno, por favor pulse sobre el cuadro de texto "seleccionar asesor",elija un asesor  y a continuacion pulse en el boton aceptar. si desea, tambien puede revisar la informacion del alumno pulsando en el boton detalles que esta ubicado a un lado de el numero de control.</p>
            </div>


                <div class="col-md-5  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:50px ;">Asignar asesor</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;"  >
                            <form class="form-horizontal" action="" method="POST" >

                              <fieldset>
                                <div class="form-group">
                                  <div class="col-lg-12 ">

                                {{ csrf_field()}}
                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Seleccionar asesor:</label>
                                  <div class="col-lg-8 ">
                                    <select type="text" class="form-control" id="NombreProyecto"  >
                                      <option value="">Seleccione un asesor</option>
                                    @foreach($asesores as $asesor)
                                        <option value="{{$asesor->ASESORNOMBRE}}">{{$asesores->ASESORNOMBRE}}</option>
                                      @endforeach

                                    </select>
                                  </div>

                                </div>
                                 <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Numero de control del alumno:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NombreP" name="NombreP" placeholder="" readonly="" value="{{  $alumno->NODECONTROL }}">
										
                                  </div>
                                  	<div class="col-lg-4">

                                 	 	<a data-toggle="modal"  data-target="#myModal" style=" color: black ;align:center; "><button class="btn  btn-skin-green btn-xs"  > <span class="glyphicon glyphicon-eye-open"></span>
        								<span class="glyphicon-class">Ver</span></button></a>
        							</div>
                                </div>

                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Nombre del proyecto:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NombreP" name="NombreP" placeholder="" readonly="" value="{{  $alumno->PROYECTONOMBRE }}">
										
                                  </div>
                                </div>

                                <div class="form-group">
                                              <label for="" class="col-lg-6 control-label" style="text-align:left">Lugar de realizacion de residencias:</label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="Lugar" placeholder="" disabled="" value="{{  $alumno->PROYECTOLUGAR }}">
          
                                              </div>
                                </div>

                                <div class="form-group">
                                  <label for="textArea" class="col-lg-6 control-label " style="text-align:left">Descripción:</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" disabled="" value="">{{  $alumno->PROYECTODESCRIPCION }}
                                    </textarea>
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