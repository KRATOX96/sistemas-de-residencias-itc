@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" text-align="center">
                    @include('layouts.NavBarJefeDivision')

                                         <div class="row">
            <div class="col-lg-4 col-md-offset-0" >

                <b><p class="text-primary" style="text-align:center">Instrucciones:</p> </b>
                <p style="text-align:left">En esta ventana usted debera enviar el informe tecnico,pulse sobre el boton "adjuntar archivo",elija un documento  y a continuacion pulse en el boton aceptar.</p>
            </div>
                
                <div class="col-lg-8  ">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="margin-left:20px ;">Informe tecnico</h3>
                        </div>

                        <div class="panel-body " style="background-color:#F0F8FF;" >
                            <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data" >

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
                                              <label for="" class="col-lg-8 col-lg-offset-3 control-label" style="text-align:left; margin-bottom:10px;">Por favor seleccione un archivo:</label>    

                                </div>

                              <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-1">
                                    <input type="file" class="" id="archivo2" name="archivo2" style="margin-bottom:10px" > 

                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-lg-8 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" id="subir"  >Aceptar </button>

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