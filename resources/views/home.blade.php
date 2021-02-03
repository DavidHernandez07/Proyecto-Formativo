
    <div class="card">
       <div class="card-header">
          <h1 class="card-title">Inicio</h1>
      </div>
      <div class="card-body">
           <p></p>
           <a class="fa fa-power-off btn btn-danger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"> Cerrar Sesión</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
               </form>
      </div>
   </div>
   