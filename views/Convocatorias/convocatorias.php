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

    <link href="../../css/convocatorias.css" rel="stylesheet" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

            <div class="card col-md-12 mt-5 pb-5" style="margin-bottom: 6rem; background-color:#1abc9c">
                <div class="card-title mx-auto">
                    <h4 class="mx-auto">Listado de convocatorias</h4>
                </div>
                <div class="card-body border border-dark" style=" background-color:white;">
                    <table id="tl_convocatoria" class="table table-bordered table-hover">
                        <thead>
                            <tr class="" style="background-color: #5dbcd2; color:white">
                                <th>Nombre de la convocatoria</th>
                                <th>Fecha de publicación</th>
                                <th>Tipo</th>
                                <th>Area</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-light">
                                <td>Convocatoria Ingles</td>
                                <td>07/09/2020</td>
                                <td>Externa</td>
                                <td>Ingles</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Consultores</td>
                                <td>05/10/2020</td>
                                <td>Interna-Externa</td>
                                <td>Emprendimiento</td>
                                <td>
                                    <a class="btn btn-success" href="../../archivos/convocatorias/convocatoriaconsultores.pdf" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Personal de asignatura TIC's</td>
                                <td>07/09/2020</td>
                                <td>Interna-Externa</td>
                                <td>TIC's</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Docente Licenciaturas en Administracion, Comunicacion o areas afines</td>
                                <td>08/08/2020</td>
                                <td>Interna-Externa</td>
                                <td>Administracion</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Docente Ingles</td>
                                <td>25/08/2020</td>
                                <td>Interna-Externa</td>
                                <td>Ingles</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Facilitadores en cursos de ingles.</td>
                                <td>19/02/2020</td>
                                <td>Externa</td>
                                <td>Ingles</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 03012020</td>
                                <td>03/01/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal de promoción</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Externa Inglés 2020</td>
                                <td>27/07/2020</td>
                                <td>Externa</td>
                                <td>Inglés</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 05012020_2da.</td>
                                <td>05/12/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal de promoción</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 02012020</td>
                                <td>02/12/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal de promoción</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria externa EC0586.01</td>
                                <td>17/03/2020</td>
                                <td>Externa</td>
                                <td>Evaluador</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 04012020_2da.</td>
                                <td>04/12/2020</td>
                                <td>Interna-Externa</td>
                                <td>Laboratorista</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 01012020</td>
                                <td>01/12/2020</td>
                                <td>Interna-Externa</td>
                                <td>Especialista en Programación y Presupuesto</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria externa EC0301/EC0217</td>
                                <td>02/03/2020</td>
                                <td>Externa</td>
                                <td>Evaluador</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 05012020</td>
                                <td>05/01/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal de promoción</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>CONVOCATORIA Núm. de Proceso 211220193ra</td>
                                <td>21/12/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal Docente</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                            <tr class="bg-light">
                                <td>Convocatoria Docente de asignatra</td>
                                <td>07/08/2020</td>
                                <td>Interna-Externa</td>
                                <td>Personal Docente</td>
                                <td>
                                    <a class="btn btn-success" style="color:white" id="">Ver convocatoria</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </header>



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
    <script src="../../js/convocatorias.js"></script>
</body>

</html>