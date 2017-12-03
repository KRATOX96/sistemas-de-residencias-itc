@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" text-align="center">
                    @include('layouts.NavBarJefeDivision')
        			@if ($alumnos->ESTADO ==1 || $alumnos->ESTADO ==2 || $alumnos->ESTADO ==6 || $alumnos->ESTADO ==7   )
        			<div class="alert alert-success alert-block" style="height:200px;text-align:center;padding-top: 75px">
                                    
                                          <strong x">SU SOLICITUD SE ENCUENTRA EN PROCESO </strong>
                                  </div>
        		
        			@endif


          
</div>
</div>
</div>
@endsection
@section('scripts')
<script src="/js/usuarios/edit.js"></script>
@endsection