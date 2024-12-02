<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <span>Pepe's Shop</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/') }}">Inicio</a>
        </li>
        <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/shop') }}">Tienda</a>
        </li>
        <li class="nav-item {{ Request::is('why') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/why') }}">Por que comprar con nosotros</a>
        </li>
        <li class="nav-item {{ Request::is('testimonial') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('/testimonial') }}">Comentarios</a>
        </li>

      </ul>

      <div class="user_option">
        @if (Route::has('login'))
          @auth
            <a href="{{ url('myorders') }}">Mis Pedidos</a>
            <a href="{{ url('mycart') }}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              {{ $count ?? 0 }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-success" type="submit">Logout</button>
            </form>
          @else
            <a href="{{ url('/login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
            <a href="{{ url('/register') }}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>Registrarse</span>
            </a>
          @endauth
        @endif
      </div>
    </div>
  </nav>
</header>
