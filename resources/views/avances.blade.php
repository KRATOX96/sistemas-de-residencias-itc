@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" text-align="center">
                    @include('layouts.NavBarJefeDivision')
        			@if ($alumnos->ESTADO ==1 || $alumnos->ESTADO ==2 || $alumnos->ESTADO ==6 || $alumnos->ESTADO ==7   )
        			<div class="alert alert-success alert-block" style="height:200px;text-align:center;padding-top: 75px">
                                    
                                          <strong >SU SOLICITUD SE ENCUENTRA EN PROCESO </strong>
                                  </div>
        		
        			@endif

                    @if($alumnos->ESTADO ==9)
                    <div class="alert alert-danger alert-block" style="height:100px;text-align:center;padding-top: 28px">
                        <strong >LO SENTIMOS USTED NO CUMPLE LOS REQUISITOS PARA LA FINALIZACION DE SUS RESIDENCIAS, CUALQUIER DUDA DIRIGIRCE CON EL JEFE DE DIVISION DE ESTUDIOS PROFESIONALES</strong>
                         </div>

                            <div class="form-group" style="margin-top: 20px">
                                  <label for="textArea" class="col-lg-8 control-label col-lg-offset-2" style="text-align:left">Motivo por el cual se rechazo la solicitud:</label>
                                  <div class="col-lg-8 col-lg-offset-2">
                                    <textarea class="form-control" rows="5" id="textArea" name="textArea" value="textArea" disabled="" >{{ $alumnos->comentario}}</textarea>
                                  </div>
                                </div>
                    
                @endif

                    @if($alumnos->ESTADO ==8)
                    <div class="alert alert-success alert-block" style="height:200px;text-align:center;padding-top: 75px">
                        <strong >SUS  RESIDENCIAS  FUERON  ACREDITADAS SATISFCATORIAMENTE,  SI  NECESITA  ALGUN  COMPROBANTE  DIRIJASE A SERVICIOS  ESCOLARES</strong>
   

                    
                @endif

          
</div>
</div>
</div>
@endsection
@section('scripts')
<script src="/js/usuarios/edit.js"></script>
@endsection