<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>UTNG</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <link href="../../css/styles.css" rel="stylesheet" />
  <link href="../../css/servicios.css" rel="stylesheet" />
  <link href="../../css/servicios/seguimiento.css" rel="stylesheet" />
  <script src="../../js/solicitud_bolsa_trabajo.js"> </script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>

<body id="page-top">
  <!-- Navigation-->

  <?php include '../Plantillas/header.php';?>

  <!-- Masthead-->
  <header class="masthead text-white">
    <div class="container">

      

    <div class="card mx-auto mt-4">
        <div class="card-header" style="background-color:#5dbcd2;">
            <div class="row mx-auto">
             <h3 style="margin-left:30rem;">Solicitud de Servicio</h3>  
            </div>
        </div>
        <div class="card-body" style="background-color:#04AC84">
                <form id="formValidar" method="POST" href="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del alumno:</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="nomAlumno" placeholder="Ingrese su nombre" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico:</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="correo" placeholder="Ingrese correo electronico valido" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Numero de control</label>
                        <input type="number" class="form-control" id="noControl" name="noControl" placeholder="No Control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Egresado de la carrera:</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nomCarrera">
                            <option>Administración Área Capital Humano</option>
                            <option>Desarrollo de Negocios Área Mercadotécnia</option>
                            <option>Ingeniería en Redes Inteligentes y Ciberseguridad</option>
                            <option>Ingeniería en Mecatrónica</option>
                            <option>Ingeniería en Desarrollo y Gestión de Software</option>
                            <option>Ingeniería en Tecnologías de la Producción</option>
                            <option>Ingeniería en Entornos Virtuales y Negocios Digitales</option>
                            <option>Licenciatura en Innovación de Negocios y Mercadotecnia</option>
                            <option>Licenciatura en Contaduría</option>
                            <option>TSU.Procesos Industriales Área Manufactura</option>
                            <option>TSU.Infraestructura de Redes Digitales</option>
                            <option>TSU.Desarrollo de Software Multiplataforma</option>
                            <option>TSU.Energias Renovables Área Calidad y Ahorro de Energía</option>
                            <option>TSU.Diseño Digital</option>
                            <option>TSU.Mecatrónica Área Instalaciones Eléctricas Eficientes</option>
                        </select>
                    </div>
                    <label for="exampleInput2">Tipo de servicio</label>
                    <select class="form-control" id="tipoServicio" onchange="getval(this);" name="nomServicio">
                        <option>Talleres para buscadores activos de empleo</option>
                        <option>Revisión de CV Tip’s para búsqueda de empleo</option>
                        <option>Bolsas de trabajo en línea</option>
                        <option>Difusión de programas de apoyo al autoempleo</option>
                        <option>Apoyo para la postulación de vacantes registradas en BT.</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Comentarios:</label>
                        <textarea class="form-control" rows="3" placeholder="Añadir comentarios" ></textarea>
                    </div>
                    

                    <div class="row" id="CargaArchivo"></div>
                    
                    <div class="center">
                      <div class="row mx-auto">
                      <input type="submit" name="enviar">
                      </div>
                    </div>
                </form>
                
               <?php include("correo.php")?>
  
        </div>
    </div>
   

      <!--Info para llamar al servicio-->
      <div class="card mx-auto mt-4" style="width: 50%;" id="infoservicio">
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
              <li class="list-group-item"> <i class="fas fa-user"></i>Cristina Vázquez Reyes Sánchez </li>
              <li class="list-group-item"><i class="fas fa-envelope"></i>cristinavazquez@utng.edu.mx</li>
              <li class="list-group-item"><i class="fas fa-phone-square"></i>Tel:18 2 55 00 ext. 1357</li>
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