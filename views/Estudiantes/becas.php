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
  <!--Alertas-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body id="page-top">
  <!-- Navigation-->

  <?php include '../Plantillas/header.php';?>

  <!-- Masthead-->
  <header class="masthead text-white">
    <div class="container">

      <div class="card" id="tituloServicio">
        <div class="card-body">
          <h4>
            Becas
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
                APOYO ALIMENTICIO
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p class="text-justify">
              Consiste en la ministración de una comida al día en la Universidad a los alumnos de la modalidad escolarizada, los solicitantes              
              deberán entregar el formato de canalización del tutor académico para tener derecho  a la solicitud del apoyo.               
              </p>
              <br>
              <div class="text-justify">
                <p>Requisitos:</p>
                <ol>
                  <li>Ser alumno regular en el cuatrimestre.</li>
                  <li>Solicitud debidamente llenada y firmada con visto bueno del director del área académica correspondiente, con los siguientes documentos:</li>
                  <ul>
                      <li>Constancia de ingresos económicos familiares no mayor a un mes.</li>
                      <li>Oficio de recomendación por parte del tutor académico describiendo la necesidad del apoyo</li>
                  </ul>
                </ol>
              
              </div>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                APOYO DEPORTIVO Y CULTURAL
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
            <p class="text-justify">
            Consiste en la exención del 100% en el pago de la inscripción cuatrimestral para los alumnos del primero al quinto cuatrimestre y del 
            50% para los alumnos del séptimo al onceavo cuatrimestre, que sean seleccionados para representar a la Universidad en eventos deportivos o culturales oficiales.
            </p>
              <div class="text-justify">
                <p>Requisitos:</p>
                <ol>
                  <li>Ser alumno regular del cuatrimestre.</li>
                  <li>Registrar un promedio del cuatrimestre anterior igual o superior a 9.0 al momento de realizar la solicitud.</li>
                  <li>No registrar asignaturas no acreditadas ni aprobadas en examen de recuperación global o taller remedial del cuatrimestre anterior.</li>
                  <li>Oficio del instructor deportivo o cultural avalando la participación del solicitante en la actividad correspondiente.</li>
                  <li>Solicitud debidamente llenada y firmada con visto bueno del director del área académica correspondiente.</li>

                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                APOYO POR RENDIMIENTO ACADÉMICO
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <p  class="text-justify">
              Consiste en la exención de un porcentaje del pago de la inscripción cuatrimestral a los alumnos de la Universidad y se establece conforme a los siguientes cuatrimestres, promedios y porcentajes de excención:
              <p>
              <div class="container text-center">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header">
                        Nivel Técnico Superior Universitario
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                        Nivel Licenciatura (Ingenierías)
                    </div>                      
                    </div>
                  </div>
                </div>
                <table class="table table-borderless text-color-white">                  
                  <tbody>
                  <tr>
                    <th>Promedio obtenido</th>
                    <th>Exención porcentual</th>
                    <th>Promedio obtenido</th>
                    <th>Exención porcentual</th>
                  </tr>
                  <tr>
                    <th>9.6 - 10</th>
                    <th>75%</th>
                    <th>9.6 - 10</th>
                    <th>50%</th>
                  </tr>
                  <tr>
                    <th>9.1 - 9.5</th>
                    <th>50%</th>
                    <th>9.1 - 9.5</th>
                    <th>25%</th>
                  </tr>
                  <tr>
                    <th>8.6 - 9.0</th>
                    <th>25%</th>                   
                  </tr>                  
                  </tbody>                
                </table>

                <p><strong>Nota:</strong></p>
                <p>Los proyectos realizados dentro de los cuerpos académicos de la UTNG no podrán solicitar este apoyo</p>                
              </div>
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
              <li class="list-group-item"> <i class="fas fa-user"></i>Biólogo Marcos Carrillo Sánchez</li>
              <li class="list-group-item"><i class="fas fa-envelope"></i>marcos.carrillos@utng.edu.mx</li>
              <li class="list-group-item"><i class="fas fa-phone-square"></i>Tel:18 2 55 00 ext. 1361</li>
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