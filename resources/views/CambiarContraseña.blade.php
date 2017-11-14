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
            <div class="col-md-2 col-md-offset-2" >
                
                <b><p class="text-primary" style="text-align:center">Cambiar Contraseña</p> </b>
                <p style="text-align:center">Aqui Cambia tu contraseña por una que recuerdes con mas facilidad.</p>
            </div>
                
                <div class="col-md-5 col-md-offset-0 ">
                    <div class="panel panel-info ">
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
