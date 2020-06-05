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
               <a class="nav-link waves-effect waves-light" href="#">Inicio <span class="sr-only">(current)</span></a>
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
        <img class="d-block w-100 " src="imagenes/4.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">APRENDE A TU RITMO</h3>
        <p>En cualquier momento y en cualquier lugar. 
          <br>
          ¡Empieza a aprender hoy mismo!</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 " src="imagenes/2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">CURSOS VIRTUALES GRATUITOS</h3>
        <p>¡Inscríbase  en los cursos virtuales sin costo de  junio 2020, cupos limitados! 
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 " src="imagenes/1.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">BECAS DE FORMACIÓN</h3>
        <p>Misión y Responsabilidad Social. 
         </p>
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
        <img src="imagenes/8.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>


    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->

     

      <h4 class="h4 mb-4">Conviértete en instructor</h4>


      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">¿Algun requisito a cumplir?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">¿Que aprobación necesito?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">¿Cómo se me pagará?</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
          Los cursos deben tener al menos 30 minutos de contenido en vídeo 
          y al menos 5 clases o módulos de aprendizaje. Para garantizar 
          que los estudiantes tengan experiencias de aprendizaje extraordinarias, 
          también disponemos de un proceso de revisión de políticas al que se someten todos los cursos.
        </div>
        
        
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
            
            No se necesita aprobación de ningún tipo para empezar. Puedes empezar 
            a crear tu curso a través de este enlace. Ten en cuenta que, 
            para crear cursos de pago, debes disponer de una cuenta activa de Payoneer o PayPal.
          </div>


        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><br>
          Los instructores pueden conectar su cuenta de Udemy a una cuenta de PayPal o Payoneer.
           Se te pagará cada mes y podrás consultar tu calendario de pago.
          </div>
      </div>
      

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->




<!--cards-->


<!-- Card deck -->

<blockquote class="blockquote bq-warning">
  <p class="bq-title">CERTIFICADOS DE ALTA CALIDAD</p>
  <p>Capacítate, actualiza conocimientos y enriquece tu hoja de vida con nuestros certificados virtuales, aprende con los mejores profesionales y forma parte
    de la mayor comunidad para creativos.
    Elige el certificado que más te guste, diligencia el formulario de inscripción y se parte de nosotros.
  </p>
</blockquote>


  <br>
    
  <div class="card-deck">

    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      
      <div class="view overlay">
        <img class="card-img-top" src="imagenes/5.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Diseño de personajes para animación y videojuegos</h4>
        <!--Text-->
        <p class="card-text">Aprende desde cero métodos sencillos para dibujar personajes memorables.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     
        <a class="btn btn-light-blue btn-md" href="curso1.php" role="button">Registrarse</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="imagenes/6.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Aprende Adobe Photoshop desde cero</h4>
        <!--Text-->
        <p class="card-text">Domina el mejor software de tratamiento, retoque y creación de imágenes digitales.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a class="btn btn-light-blue btn-md" href="curso2.php" role="button">Registrarse</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="imagenes/7.jpg"
          alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Curso de ilustración botánica con acuarela</h4>
        <!--Text-->
        <p class="card-text">Descubre las técnicas para crear composiciones ilustradas con plantas y flores.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a class="btn btn-light-blue btn-md" href="curso3.php" role="button">Registrarse</a>
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck -->





<!--fin cards-->




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
