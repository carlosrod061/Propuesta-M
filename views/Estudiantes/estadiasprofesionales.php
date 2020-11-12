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
  <link href="../../css/styles.css" rel="stylesheet" />
  <link href="../../css/servicios.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  

</head>

<body id="page-top">
  <!-- Navigation-->

    <script>$(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>

  <?php include '../Plantillas/header.php';?>

  <!-- Masthead-->
  <header class="masthead text-white">
    <div class="container">

      <div class="card" id="tituloServicio">
        <div class="card-body">
          <h4>
            Estadías Profesionales
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
            <img class="d-block w-100" src="../../assets/img/GaleriaServicios/desarrollodesoftware/SoftwareBanner.jpg" alt="First slide" height="350">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div>
      <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
      </div>

      <!-- CONTENIDO RELEVANTE DE LA SECCION-->
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                Descripción
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p class="text-justify">
              ©CADES Somos un Centro Avanzado de Desarrollo de Software (CADES), nos dedicamos a brindar soluciones a través del desarrollo de software a la medida que le permita a nuestros clientes mejorar su proceso, comunicación entre las áreas, efectividad en los resultados y con esto reducir costos, tiempo y esfuerzos.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                Servicios
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <!-- Contenido servicios-->
              <ul class="list-group">
                <li class="list-group-item">* <b>Desarrollo de software a medida: </b> 
                <p>Ofrecemos soluciones informáticas para sus procesos empresariales. Nuestro equipo se encargará de estudiar las necesidades tecnológicas que su negocio pueda tener para ofrecerle una solución personalizada que le haga ganar en tiempo, productividad y rentabilidad.</p>
                </li>
                <li class="list-group-item">* <b> Diseño de paginas web:</b> 
                <p>El Diseño de página web de su empresa es su carta de presentación ante el mundo. La calidad de su sitio web tiene que reflejar la calidad de sus productos y servicios. Planificamos, diseñamos y desarrollamos la web que se ajuste a las necesidades de su empresa. Combinando estrategia, creatividad y diseño creamos sitios web que buscan el mayor impacto a la hora de comunicar su negocio</p></li>
                <li class="list-group-item">* <b> Tienda en linea: </b>
                <p>Al igual que en las tiendas físicas tradicionales los productos o servicios están expuestos para que el cliente los pueda ver, valorar y finalmente comprar.</p></li>
                <li class="list-group-item">* <b>Diseño multimedia: </b> 
                <p>Ofrecemos productos multimedia tales como: imagen corporativa, logotipos, videos, spot publicitarios, fotografía de producto y retoque, animaciones, catalogos y aplicaciones interactivas, etc.</p></li>
                <li class="list-group-item">* <b>Desarrollo de aplicaciones móviles: </b> 
                <p>Desarrollamos aplicaciones nativas para IOS, Android, Windows Phone y aplicaciones multi-plataforma.</p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                Proyectos
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">* <b>Sistema integral administrativa: </b> 
                <p>Sistema que permite gestionar y dar seguimiento a los Programas Operativos Anuales de las distintas áreas. Cuenta con un semáforo que indica el cumplimiento o no cumplimiento de alguna meta en un área específica en algún área. Permite asociar las metas a estrategias, ejes y objetivos particulares del Plan Nacional de Desarrollo.</p>
                </li>
                <li class="list-group-item">* <b> Atención ciudadana:</b> 
                <p>Sistema que gestiona las solicitudes de los ciudadanos a los distintos programas de apoyo que ofrecen los municipios, así también gestiona las solicitudes (ventanilla única) hacia las distintas áreas manejando un semáforo para las fechas compromiso. El sistema detecta apoyos anteriormente otorgados a los solicitantes, a sus familiares y a las personas que viven en el mismo domicilio.</p></li>
                <li class="list-group-item">* <b> Programa Operativo Anual: </b>
                <p>Sistema que permite gestionar y dar seguimiento a los Programas Operativos Anuales de las distintas áreas. Cuenta con un semáforo que indica el cumplimiento o no cumplimiento de alguna meta en un área específica en algún área. Permite asociar las metas a estrategias, ejes y objetivos particulares del Plan Nacional de Desarrollo.</p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#CollapseFour"
                aria-expanded="false" aria-controls="CollapseFour">
                Clientes
              </button>
            </h5>
          </div>
          <div id="CollapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item"> <b>Pollo Feliz Dolores Hidalgo</b></li>
                <li class="list-group-item"> <b> Presidencia Municipal San Jose Iturbide </b></li>
                <li class="list-group-item"> <b>Instituto de Ecologia del Estado de Guanajuato</b> </li>
                <li class="list-group-item"> <b>Congreso del Estado de Guanajuato </b> </li>
              </ul>
            </div>
          </div>
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
              <li class="list-group-item"> <i class="fas fa-user"></i> Sergio Humberto Vázquez Barrientos </li>
              <li class="list-group-item"><i class="fas fa-envelope"></i> sergiovazquez@utng.edu.mx</li>
              <li class="list-group-item"><i class="fas fa-phone-square"></i> Tel:18 2 55 00 ext. 1391</li>
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

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</html>