<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Administrador</h1>
      <p>Pepe's Shop</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="active"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Inicio </a></li>
    <li><a href="{{ url('view_category') }}"> <i class="icon-grid"></i>Categorias </a></li>

    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Productos </a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{url('add_product')}}">Añadir Producto</a></li>
        <li><a href="{{url('view_product')}}">Ver Productos</a></li>        
      </ul>
    </li>

    <li><a href="{{ url('view_orders') }}"> <i class="icon-grid"></i>Ordenes </a></li>

  </ul>
</nav>