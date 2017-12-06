@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                    @include('layouts.NavBarJefeDivision')
        
                </div>
            </div>
        </div>
     	<div class="col-md-10 col-md-offset-1">
	        <table class="table table-striped table-hover ">
			  <thead>
			    <tr  class="success">
			      <th class="col-md-2">Numero de control</th>
			      <th>Nombre           </th>
			      <th>Carrera        </th>
			      <th>Nombre del proyecto</th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($alumnos as $alumno)
			    <tr class="active">
			      <td style='text-indent: 1em'><t>{{$alumno->NODECONTROL}}</td>
			      <td>{{  $alumno->NOMBREALUMN}} {{  $alumno->APELLIDOSALUMN}}</td>
			      <td>{{$alumno->CARRERANOMBRE}}</td>
			      <td>{{$alumno->PROYECTONOMBRE}}</td>

			      <td><a href="{{route('comprobante',$alumno->NODECONTROL)}}" style=" color: black ;"><button class="btn  btn-skin-green btn-xs"  > <span class="glyphicon glyphicon-eye-open"></span>
        <span class="glyphicon-class">Ver</span></button></a></td>
			    </tr>
				@endforeach

				@if(count($alumnos)==0)
						<tr class="active">
					      <td style='text-indent: 1em'><td></td>
					      <td></td>
					      <td></td>
					      <td></td>

				@endif
			  </tbody>
		</table> 

{{ $alumnos->links() }}
	</div>
	
@endsection