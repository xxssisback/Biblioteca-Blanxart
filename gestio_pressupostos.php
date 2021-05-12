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
                        <h1 class="h3 mb-0 text-gray-800">Gestió pressupostos</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <!-- Contadores -->

                        <!-- Pendents de presentar -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <a href="carregar_taula_pressupostos.php?estat=pendents_presentar">Pendents</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pendents_presentar"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-archive fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Presentats -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            <a href="carregar_taula_pressupostos.php?estat=presentats">Presentats</a></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="presentats"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-inbox fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vençuts -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            <a href="carregar_taula_pressupostos.php?estat=vençuts">Vençuts</a>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="vençuts"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-times fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aprovats -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href="carregar_taula_pressupostos.php?estat=aprovats">Aprovats</a>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="aprovats"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rebutjats -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            <a href="carregar_taula_pressupostos.php?estat=rebutjats">Rebutjats</a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="rebutjats"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-times fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Anem a buscar les dades de pressupostos en elaboració
                        carregar_total_pressupostos("pendents_presentar")
                        carregar_total_pressupostos("presentats")
                        carregar_total_pressupostos("aprovats")
                        carregar_total_pressupostos("rebutjats")
                        carregar_total_pressupostos("vençuts")

                        function carregar_total_pressupostos(estat) {
                            // Aquí recollirem la informació del formulari i l'enviarem al servidor mitjançant AJAX
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function() {
                                if(this.readyState>2) {
                                    document.getElementById(estat).innerHTML=this.responseText;
                                }
                            };
                            xhr.open("POST","functions/carregar_total_pressupostos.php",true);
                            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                            xhr.send("estat="+estat);
                        }
                        function acceptar_pressupost(id_pressupost) {
                            var xhr=new XMLHttpRequest();
                            xhr.onreadystatechange = function () {
                                if(this.readyState>2) {
                                    //document.getElementById("taula_resultat").innerHTML=this.responseText;
                                    carregar_total_pressupostos("presentats");
                                    carregar_taula_pressupostos("presentats");
                                }
                            }
                            xhr.open("POST","acceptar_pressupost.php",true);
                            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                            xhr.send("id_pressupost="+id_pressupost);
                        }
                    </script>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-10 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafic pressuposts</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
            </div>
            <!-- End of Main Content -->

<!-- Footer -->
<?php include("layout/footer.php"); ?>

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