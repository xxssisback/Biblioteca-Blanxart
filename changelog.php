<?php include("layout/info-project.php"); ?>

<!DOCTYPE html>
<html lang="cat">

<head>
    
    <!-- Meta info -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biblioteca de l'Institut Daniel Blanxart">
    <meta name="author" content="Sergio Muñoz & Carlos Martinez">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="img/logo_favicon.png" />

    <!-- Title window -->
    <title>Biblioteca Blanxart</title>

    <!-- Validate login -->
    <?php include("functions/login.php"); ?>

    <!-- Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSS -->
    <link href="css/aso.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Menu-lateral -->
    <?php include("layout/menu-lateral.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- User logout -->
                <?php include("layout/user-logout.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Registre de canvis</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-9 col-lg-9">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Biblioteca Blanxart - Version 1.2</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                - Hemos puesto fin al código que interfería en varias funciones.<br>
                                - Hemos arreglado la base de datos, ahora muestra los datos correctamente de la empresa.<br>
                                - Hemos corregido algunas faltas de ortografía o simplemente texto mal escrito.<br>
                                - Hemos corregido el menú lateral debido a varios errores.<br>
                                - Hemos añadido la nueva funcion de informes, ahora es posible filtrar los presupuestos por fecha, trabajador, etc.<br>
                                - Hemos cambiado el diseño del logotipo.<br>
                                - Hemos arreglado por completo la estructura del diseño de pagina y ahora el footer y los espacios se respetan mas.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-8">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Comentaris a destacar</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                - Nos gustaria hacer un refactoring completo de la aplicacion, poder ordenar todos los archivos por carpetas y no<br>
                                en la misma raiz de manera desordenada. Creemos que de está manera seria mas facil para su accesibilidad, pero <br>
                                aun no hemos obtenido los conocimientos. Invitamos a cualquier desarollador a indagar en nuestro codigo y que decida<br>
                                por su cuenta hacer una mejor version de la misma.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Main Content -->
                    
            </div>
            </div>
            <!-- Footer -->
            <?php include("layout/footer.php"); ?>
        </div>
    </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <?php include("layout/logout-modal.php"); ?>

    <!-- Scripts -->
    <?php include("layout/scripts.php"); ?>

</body>

</html>