<nav class=" navbar navbar-expand-lg bg-light">
    <div class=" bg-success p-2 text-dark bg-opacity-50 container-fluid">
      <a class="navbar-brand {{menuNavegation('home')}}" href="{{route('home')}}">Loor / Ballesteros</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon " ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{menuNavegation('home')}}" href="{{route('home')}}" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{menuNavegation('destreza')}}" href="{{route('destreza')}}">Destrezas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{menuNavegation('nosotros')}}" href="{{route('nosotros')}}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{menuNavegation('contacto')}}" href="{{route('contacto')}}">Contactos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>