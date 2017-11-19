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
        <a class="navbar-brand" href="#">Mi panel</a>
        <a class="navbar-brand" href="#">Solicitar residencia</a>
        <a class="navbar-brand" href="#">Notificaciones</a>
        <a class="navbar-brand" href="#">Instrucciones</a>
        <a class="navbar-brand" href="#">Avances</a>
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