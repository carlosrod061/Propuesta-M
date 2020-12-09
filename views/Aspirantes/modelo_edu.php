<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>UTNG - Modelo Educativo</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../../css/styles.css" rel="stylesheet" />
  <link href="../../css/servicios.css" rel="stylesheet" />
  <!--Alertas-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body id="page-top">
  <!-- Navigation-->

  <?php include '../Plantillas/header.php';?>

  <!-- Masthead-->
  <header class="masthead ">
    <div class="container">

      <div class="card text-white" id="tituloServicio">
        <div class="card-body">
          <h4>
            Modelo Educativo
          </h4>
        </div>
      </div>

      <!--CARROUSEL CON IMAGENES-->
      <div id="carouselExampleIndicators" class="carousel slide col-md-8 mx-auto" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../../assets/img/ModeloEdu/ModeloEducativo.jpg" alt="First slide" height="350">
          </div>
        </div>
      </div>

      <div class="card text-white" id="tituloServicio">
        <div class="card-body">
          <h4>
            Modalidades de estudio
          </h4>
        </div>
      </div>

      <!-- CONTENIDO RELEVANTE DE LA SECCION-->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Técnico Superior Universitario
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <!--Info TSU-->
            <div class="container">
                <br>
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Escolarizado</h5>
                                <p class="card-text">Clases de lunes a viernes de 8:00 a 16:00 horas, 6 cuatrimestres.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Semiescolarizado</h5>
                                <p class="card-text">Clases viernes de 16:00 a 22:00 horas y sábados de 8:00 a 16:00 horas, 9 cuatrimestres.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
            </div>
            <!--Info TSU-->
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Ingenierías
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <!--Info Ingenierias-->
            <div class="container">
                <br>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Escolarizado</h5>
                                <p class="card-text">Clases de lunes a viernes de 16:00 a 22:00 horas, 5 cuatrimestres.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Semiescolarizado</h5>
                                <p class="card-text">Clases viernes de 16:00 a 22:00 horas y sábados de 8:00 a 18:00 horas, 6 cuatrimestres.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
            </div>
            <!--Info Ingenierias-->
            </div>
        </div>

    </div> 

      <!--Info para llamar al servicio-->
        <div class="card text-white mx-auto mt-4" style="width: 50%;" id="infoservicio">
            <div class="row">
            <div class="col-md-2">
                <img class="card-img mt-4 ml-5" src="../../assets/img/GaleriaServicios/logo.png" alt="Card image cap">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                <h5 class="card-title">Contacto</h5>
                <p class="card-text">Atención de lunes a viernes de 8:00 a 16:00 hrs.</p>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush" id="contactoinfo">
                <li class="list-group-item"> <i class="fas fa-user"></i> José Alfredo González Méndez.</li>
                <li class="list-group-item"><i class="fas fa-envelope"></i> agonzalez@utng.edu.mx</li>
                <li class="list-group-item"><i class="fas fa-phone-square"></i> Tel: 18 2 55 00 ext. 1253</li>
                </ul>
            </div>
         
        </div>
       
      </div>

    </div>


  </header>

  <?php include '../Plantillas/footer.php';?>

  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>