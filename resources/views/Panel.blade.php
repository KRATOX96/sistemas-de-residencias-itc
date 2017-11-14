@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="">
                    @include('layouts.NavBarUsuario')
        
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1 col-md-offset-2">
                 <img src="https://icon-icons.com/icons2/317/PNG/512/user-male-icon_34332.png" alt="perfil" class="img-rounded" alt="Cinque Terre" width="100" height="100" style="border: 2px solid silver;">

                <b>        
                    <p class="text-primary">Numero de control</p>
                    <p class="text-primary">Nombres</p>
                    <p class="text-primary">Apellidos</p>
                </b>
            </div>
                
                <div class="col-md-5 col-md-offset-0 ">
                    <div class=" panel panel-primary ">
                        <div class="panel-heading">
                            <h3 class="panel-title">Datos academicos</h3>
                        </div>
                        <div class="panel-body " style="background-color:#F0F8FF; ">
                            <p><b>Carrera:</b> (11)ING.SIST.COMP..</p>
                            <p><b>Plan de estudios:</b> (f)ISIC-2010-224 DE 260 CREDITOS</p>
                            <p><b>Modulo de especialidad:</b> (2)INGENIERIA DE SOFTWARE</p>
                            <p><b>Creditos acumulados:</b> 190</p>
                            <p><b>Situacion de vigencia:</b> VIGENTE</p>
                            <p><b>Periodo Actual o Ultimo:</b> Semestre 7 (2173) AGO-DIC17</p>
                        </div>
                    </div>
                </div>


@endsection
