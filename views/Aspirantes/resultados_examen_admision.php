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

                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4 mr-0" data-dismiss="modal">Close</button>

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

                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4 mr-0" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                    <!--/.Content-->

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