<style>
  .navbar-brand {
    float: left !important;
    padding: 9.5px 17px !important;
    font-size: 18px !important;
    line-height: 21px !important;
    height: 40px !important;
}
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-nav" >
        @if(auth()->user()->tipoid ==1)
      <a class="navbar-brand" href="{{url('/crearProyecto')}}">crearProyecto</a>
        <a class="navbar-brand" href="{{url('/instrucciones')}}">Instrucciones</a>
        @endif

             @if(auth()->user()->tipoid ==2)
            <a class="navbar-brand" href="{{url('/panel')}}">Mi panel</a>
            <a class="navbar-brand" href="{{url('/solicitarResidencia')}}">Solicitar residencia</a>
            <a class="navbar-brand" href="{{url('/notificaciones')}}">Notificaciones</a>
            <a class="navbar-brand" href="{{url('/instrucciones')}}">Instrucciones</a>
            <a class="navbar-brand" href="{{url('/avances')}}">Avances</a>
        @endif

        @if(auth()->user()->tipoid ==3)
        <a class="navbar-brand" href="{{url('/calificar')}}">Calificar</a>
        <a class="navbar-brand" href="{{url('/notificaciones')}}">Notificaciones</a>
        <a class="navbar-brand" href="{{url('/instrucciones')}}">Instrucciones</a>
        @endif

        @if(auth()->user()->tipoid ==4)
        <a class="navbar-brand" href="{{url('/comprobante')}}">Solicitudes</a>
        <a class="navbar-brand" href="{{url('/notificaciones')}}">Notificaciones</a>
        <a class="navbar-brand" href="{{url('/instrucciones')}}">Instrucciones</a>
        @endif

        @if(auth()->user()->tipoid ==5)
        <a class="navbar-brand" href="{{url('/solicitudes')}}">Solicitudes</a>
        <a class="navbar-brand" href="{{url('/notificaciones')}}">Notificaciones</a>
        <a class="navbar-brand" href="{{url('/instrucciones')}}">Instrucciones</a>
        @endif
    </div>


        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <a class="navbar-brand" href="{{ route('logout') }}"                                             onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Salir</a>
            </ul>
        </div>
  </div>
  

</nav>