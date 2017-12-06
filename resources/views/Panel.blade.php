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
            <div class="col-md-1 col-md-offset-2">
                 <img src="https://icon-icons.com/icons2/317/PNG/512/user-male-icon_34332.png" alt="perfil" class="img-rounded" alt="Cinque Terre" width="100" height="100" style="border: 2px solid silver;">

                <b>        
                    <p class="text-primary">{{$alumnos->NODECONTROL}}</p>
                    <p class="text-primary">{{$alumnos->NOMBREALUMN }}</p>
                    <p class="text-primary">{{$alumnos->APELLIDOSALUMN}}</p>
                </b>
            </div>
                
                <div class="col-md-5 col-md-offset-0 ">
                    <div class=" panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title">Datos academicos</h3>
                        </div>
                        <div class="panel-body " style="background-color:#F0F8FF; ">
                            <p><b>Carrera:</b> {{  $NombreCarrera}}</p>
                            <p><b>Plan de estudios:</b> {{$alumnos->plan}}</p>
                            <p><b>Creditos acumulados:</b> {{$alumnos->creditos}}</p>
                            <p><b>Periodo Actual o Ultimo:</b> Semestre {{$alumnos->semestre}} </p>
                            <p><b>Servicion social:</b>{{$alumnos->servicioS}}</p>
                            <p><b>Actividades complementarias:</b> {{$alumnos->actividadesC}}</p>
                            <p><b>Situacion escolar:</b> {{$alumnos->situacionE}}</p>

                        </div>
                    </div>
                </div>
                <script>
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
