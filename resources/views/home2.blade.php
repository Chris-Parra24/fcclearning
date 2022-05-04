<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>FCCLearning!!</title>
  <meta name="viewport"
    content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
  <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>
  <header class="header">
    <div class="contenedor">
      <img src="img/logo.png" alt="logoApp" title="" width="" class="logo">
      <span class="icon-menu" id="btn-menu"></span>
      <nav class="nav" id="nav">
        <ul class="menu">
          <li class="menu__item"><a href="#" class="menu__link">Home</a></li>
          <li class="menu__item"><a href="#" class="menu__link">Foro</a></li>
          <li class="menu__item"><a  href="#" class="menu__link">Recursos</a></li>
          <li class="menu__item"><a  href="#" class="menu__link">Ayuda</a></li>
          <li class="menu__item"><a  href="#" class="menu__link">Nosotros</a></li>
          <li class="menu__item"><a  href="{{ route('login') }}" class="menu__link">Login</a></li>
          <li class="menu__item"><a  href="{{ route('register') }}" class="menu__link">Registrarse</a></li>
          
        </ul>
      </nav>
    </div>
  </header>

  <div class="banner" id="inicio">
    <img src="img/imagen.jpg" alt"" title="">
    <div class="contenedor">
      <h1 class="banner__titulo">FCCLearning!!</h1>
      <p class="banner__txt">Complementa tu aprendizaje</p><br><br>
      <a class="boton" href="#" target="_blank">Iniciar Sesión</a>
    </div>
  </div>

 
  
  <!--Seccion acerca de nosotros-->
  <section id="nosotros">
    
    <h2 class="titulo"> MÁS SOBRE NOSOTROS</h2><br><br>
    <div class="icono-nosotros">
      <div class="iconos">
        <img src="img/img2.png" alt="Nosotros" class="icon">
        <h3>Nosotros</h3><br><br>
        <p> --- <br><br>
      </div>
      <div class="iconos">
        <img src="img/img3.jfif" alt="Precio" class="icon">
        <h3>Nosotros</h3><br><br>
        <p> -----
        </p><br><br>
      </div>

    </div>
  </section>

  <footer class="footer">
    <p class="copy">&copy; Equipo 5 </p>
  </footer>
  <script src="{{ asset('js/menu.js') }}"></script>
</body>

</html>