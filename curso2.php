<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mi primera aplicacion con Php</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</head>
<body>


  <!--Barra de navegacion-->
  <nav class="navbar navbar-expand-lg navbar-dark teal lighten-1">
    <a class="navbar-brand" href="#"><img src="imagenes/logo.png" width="150" height="38"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link waves-effect waves-light" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink"               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="curso1.php">Diseño de personajes</a>
                    <a class="dropdown-item waves-effect waves-light" href="curso2.php">Aprende Adobe Photoshop</a>
                    <a class="dropdown-item waves-effect waves-light" href="curso3.php">Diseño de ilustraciones botánicas</a>
                </div>
            </li>
        </ul>
        <form class="form-inline">
            <div class="md-form my-0">
              
                <input class="form-control mr-sm-2" type="text" placeholder="¿Que quieres aprender?" aria-label="Search">
            </div>
            
        </form>
    </div>
</nav>
<!--Fin Barra de navegacion-->



<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 " src="imagenes/15.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">EXPERTO<br>EN DISEÑO GRÁFICO</h3>
        <p>Aprende desde cero el software más usado en el mundo del Diseño. 
        Irás paso a paso por las herramientas, aplicando ejercicios que te pongan a prueba.</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 " src="imagenes/16.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
      <h3 class="h3-responsive">EXPERTO<br>EN DISEÑO GRÁFICO</h3>
        <p>Aprende desde cero el software más usado en el mundo del Diseño. 
        Irás paso a paso por las herramientas, aplicando ejercicios que te pongan a prueba.</p>
      </div>
      
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 " src="imagenes/17.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
      <h3 class="h3-responsive">EXPERTO<br>EN DISEÑO GRÁFICO</h3>
        <p>Aprende desde cero el software más usado en el mundo del Diseño. 
        Irás paso a paso por las herramientas, aplicando ejercicios que te pongan a prueba.</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->





<!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        <img src="imagenes/14.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
              <br>
              <h4 class="h4 mb-4">Por Carles Marsal, Artista Visual</h4>
                
              
              <p class="font-weight-normal">Comenzarás conociendo la interfaz y las herramientas principales 
              de Adobe Photoshop. Aprenderás a gestionar y combinar documentos, a trabajar con capas, selecciones
              y algo fundamental en este tipo de proyectos: las máscaras. Después te sumergirás en el mundo del 
              fotomontaje y adquirirás conocimientos fundamentales.
              <br>
            
              </p>

              
              <a>
              <div class="mask rgba-white-slight"></div>
              </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

    <form class="text-center border border-light p-5" action="./procesos.php" method="POST">

<p class="h4 mb-4">Inscribete y comienza a aprender</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- Nombre -->
        <input type="text" id="Nom" name="Nom" class="form-control" placeholder="Ingresa tu nombre">
    </div>
    <div class="col">
        <!-- Apellido -->
        <input type="text" id="Ape" name="Ape" class="form-control" placeholder="Ingresa tu apellido">
    </div>
</div>

<div class="form-row mb-4">
    <div class="col">
        <!--Email -->
        <input type="email" id="Email" name="Email" class="form-control" placeholder="Email">
    </div>
    <div class="col">
        <!-- Telefono -->
        <input type="number" id="Tel" name="Tel" class="form-control" placeholder="Número telefónico">
    </div>
</div>
<!--Direccion-->
<input type="text" id="Dir" name="Dir" class="form-control" placeholder="Ingresa tu dirección." aria-describedby="defaultRegisterFormPasswordHelpBlock">
<br>

<!-- Interes -->
<select class="browser-default custom-select" name="interes">
          <option selected>Interés por el curso</option>
          <option value="Profesional">Profesional</option>
          <option value="Estudiante">Estudiante</option>
          
</select>

<br>
<br>

<select class="browser-default custom-select" name="cursos">
          <option selected>Ingrese el curso a registrar</option>
          <option value="Diseño de personajes para animación y videojuegos">Diseño de personajes para animación y videojuegos</option>
          <option value="Adobe Photoshop desde cero">Adobe Photoshop desde cero</option>
          <option value="Ilustración botánica con acuarela">Ilustración botánica con acuarela</option>
          
</select>

<!-- Newsletter -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
    
</div>

<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>

<!-- Social register -->


<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

<hr>

<!-- Terms of service -->
<p>Al hacer click en 
    <em>Enviar</em> aceptas nuestras
    <a href="" target="_blank">condiciones y politicas  de privacidad</a>

</form>
      

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->








<!-- Formulario de isncripcion -->

<!-- Default form register -->





<!-- Inicio Footer -->
<footer class="page-footer font-small teal lighten-1 pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">¿Quieres publicar?</h5>
        <p>Si tienes una convocatoria, artículo u oportunidad que desees publicar 
          en nuestra plataforma, escríbenos a convocatorias@udemy.org</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Publicaciones recientes</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Cursos Certificados y Gratuitos</a>
          </li>
          <li>
            <a href="#!">Oportunidades laborales en Udemy</a>
          </li>
          <li>
            <a href="#!">Manual de diseño de proyectos</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Categorias</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Artículos</a>
          </li>
          <li>
            <a href="#!">Becas</a>
          </li>
          <li>
            <a href="#!">Investigación y eventos</a>
          </li>
          <li>
            <a href="#!">Premios y concursos</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->




  <!-- Social icons -->
  <div class="pb-4 text-center" >
    <a href="https://www.facebook.com/mdbootstrap" target="_blank">
      <i class="fab fa-facebook-f mr-3"></i>
    </a>

    <a href="https://twitter.com/MDBootstrap" target="_blank">
      <i class="fab fa-twitter mr-3"></i>
    </a>

    <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
      <i class="fab fa-youtube mr-3"></i>
    </a>

    <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
      <i class="fab fa-google-plus-g mr-3"></i>
    </a>

    <a href="https://dribbble.com/mdbootstrap" target="_blank">
      <i class="fab fa-dribbble mr-3"></i>
    </a>

    <a href="https://pinterest.com/mdbootstrap" target="_blank">
      <i class="fab fa-pinterest mr-3"></i>
    </a>

    <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
      <i class="fab fa-github mr-3"></i>
    </a>

    <a href="http://codepen.io/mdbootstrap/" target="_blank">
      <i class="fab fa-codepen mr-3"></i>
    </a>
  </div>
  <!-- Social icons -->



  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Udemy.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




</body>
</html>