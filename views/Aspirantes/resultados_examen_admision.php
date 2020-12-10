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
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../css/styles.css" rel="stylesheet" />
    <!-- Datatables -->
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>

    <link href="../../css/resultados_examen_admision.css" rel="stylesheet" />
    <link href="../../css/servicios.css" rel="stylesheet" />

    <!-- JavaScript -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</head>

<body id="page-top">
    <!-- Navigation-->

    <?php include '../Plantillas/header.php'; ?>

    <!-- Masthead-->
    <header class="masthead text-white">

        <div class="container">


            <div class="text-center">

                <div class="" id="TSU">
                    <button type="button" id="btnTSU" class="btn btn-primary" data-toggle="modal" data-target="#modalTSU">Resultados de admision TSU</button>
                </div>
                <div class="" id="Ingenieria">
                    <button type="button" id="btnIngenieria" class="btn btn-primary" data-toggle="modal" data-target="#modalIngenieria">Resultados de admision Ingenieria</button>
                </div>
                <div class="" id="procesoAdmision">
                    <div id="banderilla">
                        <p class="titulosEA">&nbsp;Proceso de inscripción virtual 2020-TSU</p>
                    </div>
                    <button class="btn btn-primary"><a href="https://media.utng.edu.mx/index.php/s/Vc16zelAvq4dby6">Campus Dolores Hidalgo</a></button>
                    <button class="btn btn-primary"><a href="https://media.utng.edu.mx/index.php/s/frnepmA1Jh4vimc">Campus Victoria</a></button>
                </div>

            </div>

            <!--Modal: Name-->
            <div class="modal fade" id="modalTSU" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body">
                            <ul class="nav nav-tabs" style="margin-top:-4rem;" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home11" role="tab" aria-controls="home" aria-selected="true"> Campus Dolores Hidalgo </a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile11" role="tab" aria-controls="profile" aria-selected="false"> Campus Victoria</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home11" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card border-white">
                                        <div class="card-body mx-auto">
                                            <button class="btn btn-primary"><a href="https://media.utng.edu.mx/index.php/s/d5lnYmb0xim5m8S">EXAMEN 10 DE JULIO(Dolores)</a></button>
                                            <button class="btn btn-primary" style="margin-left: 5rem;"><a href="https://media.utng.edu.mx/index.php/s/yFjdzfYtXFoo8yG">EXAMEN 28 DE AGOSTO(Dolores)</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile11" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card border-white">
                                        <div class="card-body mx-auto">
                                            <button class="btn btn-primary ml-6"><a href="https://media.utng.edu.mx/index.php/s/Vqxk2YK4wWrbtKa">EXAMEN 10 DE JULIO(Victoria)</a></button>
                                            <button class="btn btn-primary" style="margin-left: 5rem;"><a href="https://media.utng.edu.mx/index.php/s/ztldPtdw5vNWvOx">EXAMEN 28 DE AGOSTO(Victoria)</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4 mr-0" data-dismiss="modal">Cerrar</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>


            <!--Modal: Name-->
            <div class="modal fade" id="modalIngenieria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body">
                            <ul class="nav nav-tabs" style="margin-top:-4rem;" id="myTab1" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home112" role="tab" aria-controls="home" aria-selected="true"> Campus Dolores Hidalgo </a></li>
                                <li class="nav-item"><a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile112" role="tab" aria-controls="profile" aria-selected="false"> Campus Victoria</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home112" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card border-white">
                                        <div class="card-body mx-auto">
                                            <button class="btn btn-primary"><a href="https://media.utng.edu.mx/index.php/s/4EGqFuF46rggAIV">EXAMEN 08 DE AGOSTO(Dolores)</a></button>
                                            <button class="btn btn-primary" style="margin-left: 5rem;"><a href="https://media.utng.edu.mx/index.php/s/s4CaxwmzcnP0N87">EXAMEN 29 DE AGOSTO(Dolores)</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile112" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="card border-white">
                                        <div class="card-body mx-auto">
                                            <button class="btn btn-primary ml-6"><a href="https://media.utng.edu.mx/index.php/s/gqaFdRc3M1Ss9OB">EXAMEN 08 DE AGOSTO(Victoria)</a></button>
                                            <button class="btn btn-primary" style="margin-left: 5rem;"><a href="https://media.utng.edu.mx/index.php/s/G7n1PW2uq4Gfu7j">EXAMEN 29 DE AGOSTO(Victoria)</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <!--Footer-->
                        <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4 mr-0" data-dismiss="modal">Cerrar</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>


        </div>
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
                    <ul class="list-group list-group-flush mt-0" id="contactoinfo">
                        <li class="list-group-item"> <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                            </svg><!-- <i class="fas fa-user"></i> --> José Alfredo González Méndez.</li>
                        <li class="list-group-item"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                            </svg><!-- <i class="fas fa-envelope"></i> --> agonzalez@utng.edu.mx</li>
                        <li class="list-group-item"><svg class="svg-inline--fa fa-phone-square fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z"></path>
                            </svg><!-- <i class="fas fa-phone-square"></i> --> Tel: 18 2 55 00 ext. 1253</li>
                    </ul>
                </div>

            </div>

        </div>

    </header>

    <style>
        #mydatatable tfoot input {
            width: 100% !important;
        }

        #mydatatable tfoot {
            display: table-header-group !important;
        }
    </style>


    <?php include '../Plantillas/footer.php'; ?>


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

    <!-- Datatables -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../../assets/datatable_recursos/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/datatable_recursos/popper/popper.min.js"></script>
    <script src="../../assets/datatable_recursos/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../../assets/datatable_recursos/datatables/datatables.min.js"></script>
    <script src="../../js/resultadosadmision.js"></script>
</body>

</html>