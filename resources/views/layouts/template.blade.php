<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>@yield('title')</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <!--BARRA DE NAVEGACION-->
    <div class="container-fluid">
      <nav
        class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="img/logo.png" alt="" width="70" height="70" />
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#MenuNavegacion"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="MenuNavegacion" class="collapse navbar-collapse">
            <!-- <ul class="navbar-nav ms-3"> -->
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('forum') }}" class="nav-link">Foro</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('resources') }}" class="nav-link">Recursos</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('help') }}" class="nav-link">Ayuda</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">Nosotros</a>
              </li>
            </ul>
            <div class="d-flex">
              <a
                href="{{ route('login') }}"
                class="btn text-decoration-none bg-primary text-white me-2"
                >Iniciar Sesión</a
              >
              <a
                href="{{ route('register') }}"
                class="btn text-decoration-none bg-primary text-white me-2"
                >Registrarse</a
              >
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!--FIN BARRA DE NAVEGACION-->

    <!--CONTENIDO-->
    @yield('content')


    <!--FOOTER-->
    <section class="">
      <footer class="text-center text-white" style="background-color: #0a4275">
        <div class="container p-4 pb-0">
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">¡Registrate Gratis!</span>
              <button type="button" class="btn btn-outline-light btn-rounded">
                Registrarse
              </button>
            </p>
          </section>
        </div>
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2020 Copyright:
          <a class="text-white" href="index.html">FCCLearning!!</a>
        </div>
      </footer>
    </section>
    <!--FIN FOOTER-->

    <!-- Bootstrap CSS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
