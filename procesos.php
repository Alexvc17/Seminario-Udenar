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

<body background="imagenes/fondo4.jpg">

<br>
<div class="text-center">

  <a href="index.php"><img src="imagenes/logo.png" class="img-fluid" alt="" width="300" height="280"></a>

</div>


<br>
<br>



<?php

    $NomCli = $_POST["Nom"];
    $ApeCli = $_POST["Ape"];
    $EmailCli = $_POST["Email"];
    $TelCli = $_POST["Tel"];
    $DirCli = $_POST["Dir"];
    $InteresCli = $_POST["interes"];
    $CursoCli = $_POST["cursos"];


?>





</body>





<div class="row">

    <div class="col">
    
    </div>


    <div class="col-6">


  <!--Datos-->

       <!--Inicio Card-->
        <div class="card">
            <div class="card-body">

 
    <!-- Subtitle -->
    
                <h2 class="font-weight-bold deep-orange-lighter-hover mb-3 text-center">
                <p class="text-danger">¡Gracias por registrarte en Udemy!</h2>
                
                
               
                
                <p class="brown-lighter-hover text-xl-center">Revisa tu bandeja de entrada para ver información adicional, 
                si nuestros emails te aparecen en la bandeja de promociones, pincha en ellos y arrástralos 
                hasta la bandeja de entrada. Te informaremos puntualmente de nuestros cursos online gratuitos.
               </p>

               <h6 class="font-weight-bold indigo-text py-2 text-center">
                Bienvenido al curso de  <?php echo $CursoCli ?></h6>
                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                <strong>TUS DATOS</strong>
                </div>

                <br>
                <br>
                
                
                <p class="note note-info">

                    <strong>Nombre: </strong> <?php echo $NomCli ?>
                    <br>
                    <strong>Apellido: </strong> <?php echo $ApeCli ?>
                    <br>
                    <strong>Email: </strong> <?php echo $EmailCli ?>
                    <br>
                    


                </p>
                <p class="note note-warning">


                    <strong>Teléfono: </strong> <?php echo $TelCli ?>
                    <br>
                    <strong>Dirección: </strong> <?php echo $DirCli ?>
                    <br>
                    <strong>Interes por el curso: </strong> <?php echo $InteresCli ?>
                    


                </p>
                
            </div>
            
        </div>
        <!--Fin Card-->
        
    </div>

    <div class="col">
     
    </div>

   
</div>

<br>
<!--Boton-->
<div class="container">
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2">
    &nbsp&nbsp&nbsp<a class="btn btn-danger btn-md" href="index.php" data-toggle="button" aria-pressed="false" autocomplete="off">
    <i class="fas fa-arrow-left mr-1"></i>
  Volver</a>
    
    
    </div>
    <div class="col-md-5"></div>
  </div>
</div>



</html>