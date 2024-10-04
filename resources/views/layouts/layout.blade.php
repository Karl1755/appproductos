<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>@yield('title', 'Listado')</title>
    
</head>
<body class="body">
  <style>
    
    .body{
      background-color: #a2adb8; /* Fondo oscuro */
    }
      .custom-navbar {
          background-color: #343a40; /* Fondo oscuro */
          border-bottom: 3px solid #f8c471; /* Borde color naranja claro */
      }
      .nav-link {
          color: #fff;
      }
      .nav-link:hover {
          background-color: #f8c471; /* Fondo de enlace al pasar el ratón */
          color: #fff;
      }
      .btn-outline-light {
          color: #f8c471; /* Color del botón de búsqueda */
          border-color: #f8c471;
      }
      .btn-outline-light:hover {
          background-color: #f8c471;
          color: #fff;
      }
      .navbar-brand {
          color: #f8c471 !important; /* Color del nombre de la tienda */
      }
  </style>

  <nav class="navbar navbar-expand-lg custom-navbar">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Tienda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('categorias.index')}}">Categorías</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('formCategorias')}}">Formulario de categoría</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('proveedores.index')}}">Proveedores</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('proveedores.create')}}">Agregar proveedores</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('productos.create')}}">Agregar producto</a>
                  </li>
              </ul>
              
          </div>
      </div>
  </nav>

  @yield('contenido')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



<H2><center><footer></footer></center></H2>
</html>