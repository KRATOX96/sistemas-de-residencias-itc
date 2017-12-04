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
                <div class="modal fade " id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="row">

                  <br>
                            <div class="col-lg-10 col-md-offset-2 ">


                                 <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Nombre del proyecto:</label>
                                  <div class="col-lg-10 ">
                                    <input type="text" class="form-control" id="NombreP" name="NombreP" placeholder="" readonly="" value="{{  $alumno->PROYECTONOMBRE }}" style="margin-bottom: 20px">
                    
                                  </div>
                                </div>

                                            <div class="form-group">
                                              <label for="" class="col-lg-10 control-label" style="text-align:left">Lugar de realizacion de residencias:</label>
                                              <div class="col-lg-10">
                                                <input type="text" class="form-control" id="Lugar" placeholder="" disabled="" value="{{  $alumno->PROYECTOLUGAR }}" style="margin-bottom: 20px">
          
                                              </div>
                                </div>

                                <div class="form-group">
                                  <label for="textArea" class="col-lg-10 control-label " style="text-align:left">Descripción:</label>
                                  <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" disabled="" value="" style="margin-bottom: 50px">{{  $alumno->PROYECTODESCRIPCION }}
                                    </textarea>
                                  </div>
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
                <p style="text-align:left">En esta ventana usted debe proporcionar un documento con la calificacion del alumno, por favor pulse sobre el cuadro de texto "adjuntar archivo",elija un documento  y a continuacion pulse en el boton aceptar.
                <br> Si desea, tambien puede revisar la informacion del alumno pulsando en el boton detalles que esta ubicado a un lado de el numero de control o la informacion del proyecto pulsando igualmente, sobre el boton a un lado del nombre del proyecto.</p>
            </div>


                <div class="col-md-5  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:50px ;">Enviar calificacion del alumno</h3>
                        </div>
                      
                        <div class="panel-body " style="background-color:#F0F8FF;"  >
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >
                              
                              <fieldset>

                                <div class="form-group">
                                  <div class="col-lg-12 ">
                                    @if ($message = Session::get('info'))
                                  <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                          <strong>{{ $message }}</strong>
                                  </div>
                                  @endif

                                {{ csrf_field()}}
                                <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Asesor del alumno:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NODECONTROL" name="NODECONTROL" placeholder="" readonly="" value=" {{$asesores->ASESORNOMBRE}}">
                                  </div>
                                </div>
                              

                                 
            

                                 <div class="form-group">
                                  <label for="" class="col-lg-6 control-label" style="text-align:left">Numero de control del alumno:</label>
                                  <div class="col-lg-8 ">
                                    <input type="text" class="form-control" id="NODECONTROL" name="NODECONTROL" placeholder="" readonly="" value="{{$alumno->NODECONTROL }}">
                    
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
                                  <div class="col-lg-4">

                                    <a data-toggle="modal"  data-target="#modal2" style=" color: black ;align:center; "><button class="btn  btn-skin-green btn-xs"  > <span class="glyphicon glyphicon-eye-open"></span>
                                     <span class="glyphicon-class">Ver</span></button></a>
                                  </div>
                                </div>


                              <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-1">
                                    <input type="file" class="" id="archivo4" name="archivo4" > 

                                  </div>
                                </div>


                                <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary" id="aceptar"  >Aceptar </button>

                                  </div>
                                </div>


                              </fieldset>
                            </form>
                </div>
            </div>
        </div>


@endsection
