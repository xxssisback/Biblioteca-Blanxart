<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Associació Canabica">
    <meta name="author" content="Sergio Muñoz and Carlos Martinez">
    <link rel="shortcut icon" href="img/logo_favicon.png" />
    <title>Biblioteca Blanxart | Modifica un treballador</title>
    <?php
        session_start();
        if(!isset($_SESSION["login"]))
            header("location:login.php");
        elseif(!$_SESSION["login"])
            header("location:login.php");
        ?>

    <!-- Fuentes del template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- Custom CSS del template-->
    <link href="css/aso.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3"><img class="logo_menu" src="img/logo_header.png" style="
                    width: 150px;
                    height: 90px;
                "></sup></div>
            </a>

            <!-- Divididor (HR) -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panell de control</span></a>
            </li>

            <!-- Divididor (HR) -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Operacions
            </div>

            <!-- Nav Item - Vendes Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseVendes"
                    aria-expanded="true" aria-controls="collapseVendes">
                    <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt-cutoff" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v13h-1V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51L2 2.118V15H1V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zM0 15.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                        <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-8a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                      </svg></i>
                    <span>Vendes</span>
                </a>
                <div id="collapseVendes" class="collapse" aria-labelledby="headingVendes" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opcions disponibles:</h6>
                        <a class="collapse-item" href="nova_venda.php">Registrar una nova venda</a>
                        <a class="collapse-item" href="llistat_vendes.php">Llistat de vendes</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Productes Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseProductes"
                    aria-expanded="true" aria-controls="collapseProductes">
                    <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                      </svg></i>
                    <span>Productes</span>
                </a>
                <div id="collapseProductes" class="collapse" aria-labelledby="headingProductes"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opcions disponibles:</h6>
                        <a class="collapse-item" href="nou_producte.php">Registrar un nou producte</a>
                        <a class="collapse-item" href="llistat_productes.php">Llistat de productes</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pressupostos Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePressupostos"
                    aria-expanded="true" aria-controls="collapsePressupostos">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
  <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z"/>
</svg></i>
                    <span>Pressupostos</span>
                </a>
                <div id="collapsePressupostos" class="collapse" aria-labelledby="headingPressupostos"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opcions disponibles:</h6>
                        <a class="collapse-item" href="nou_pressupost.php">Registrar un nou pressupost</a>
                        <a class="collapse-item" href="gestio_pressupostos.php">Gestió de pressupostos</a>
                    </div>
                </div>
            </li>

             <!-- Divididor (HR) -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Usuaris
             </div>
 
             <!-- Nav Item - Clients Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseClients"
                     aria-expanded="true" aria-controls="collapseClients">
                     <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg></i>
                     <span>Clients</span>
                 </a>
                 <div id="collapseClients" class="collapse" aria-labelledby="headingClients" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Opcions disponibles:</h6>
                         <a class="collapse-item" href="nou_client.php">Registrar un nou client</a>
                         <a class="collapse-item" href="llistat_clients.php">Llistat de clients</a>
                     </div>
                 </div>
             </li>
 
             <!-- Nav Item - Treballadors Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTreballadors"
                     aria-expanded="true" aria-controls="collapseTreballadors">
                     <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-badge-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                      </svg></i>
                     <span>Treballadors</span>
                 </a>
                 <div id="collapseTreballadors" class="collapse" aria-labelledby="headingTreballadors"
                     data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Opcions disponibles:</h6>
                         <a class="collapse-item" href="nou_treballador.php">Registrar un nou treballador</a>
                         <a class="collapse-item" href="llistat_treballadors.php">Llistat de treballadors</a>
                     </div>
                 </div>
             </li>

             <!-- Divididor (HR) -->
             <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                 Funcions
             </div>
 
             <!-- Nav Item - Xarxa de dispositius Collapse Menu -->
             <li class="nav-item">
                 <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseXarxa"
                     aria-expanded="true" aria-controls="collapseXarxa">
                     <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z"/>
                      </svg></i>
                     <span>Xarxa de dispositius</span>
                 </a>
                 <div id="collapseXarxa" class="collapse" aria-labelledby="headingXarxa" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Opcions disponibles:</h6>
                         <a class="collapse-item" href="nou_dispositiu.php">Registrar un nou dispositiu</a>
                         <a class="collapse-item" href="llistat_dispositius.php">Llistat de dispositius</a>
                     </div>
                 </div>
             </li>

            <!-- Nav Item - Carregar dades-->
            <li class="nav-item">
                <a class="nav-link" href="carregar_dades.php">
                    <i><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                      </svg></i>
                    <span>Carregar dades</span></a>

                    
            </li>

            <!-- Divididor (HR) -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "" .$_SESSION["usuari"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">
    <?php 
        $dbLink=mysqli_connect("localhost", "usuari", "123456", "aso_cafe") or exit(mysqli_connect_error()); 
        $sql="SELECT * FROM tb_treballadors WHERE id_treballador=".$_GET["usuari"];
        $result=mysqli_query($dbLink,$sql) or exit(mysqli_connect_error($dbLink));
        $treballador=mysqli_fetch_array($result);
        ?>
        <div class="recuadro_menu">
        <h1 class="nou-usuari">Modificar treballador</h1>
        <hr>
        <form action=gravar_modificar_treballador.php method="POST">
            <label for=nom_i_cognom>Nom i cognom: </label>
            <input type="hidden" id=id_treballador name=id_treballador value="<?php echo $treballador["id_treballador"]; ?>" size="20">
            <input class="form-textbox form-textbox-text" type="text" id=nom_i_cognom name=nom_i_cognom value="<?php echo $treballador["nom_i_cognom"]; ?>" size="20"><br><br>
            <label for=data_naixament>Data de naixament: </label>
            <input class="form-textbox form-textbox-text" type="date" id=data_naixament name=data_naixament value="<?php echo $treballador["data_naixament"]; ?>" size="40"><br><br>
            <label for=correu_electronic>Correu electronic: </label>
            <input class="form-textbox form-textbox-text" type="text" id=correu_electronic name=correu_electronic value="<?php echo $treballador["correu_electronic"]; ?>" size="40"><br><br>
            <label for=numero_contacte>Numero de contacte: </label>
            <input class="form-textbox form-textbox-text" type="tel" id=numero_contacte name=numero_contacte value="<?php echo $treballador["numero_contacte"]; ?>" size="40"><br><br>  
            <label for=poblacio>Població: </label>
            <input class="form-textbox form-textbox-text" type="text" id=poblacio name=poblacio value="<?php echo $treballador["poblacio"]; ?>" size="40"><br><br>
            <label for=dni>DNI: </label>
            <input class="form-textbox form-textbox-text" type="text" id=dni name=dni value="<?php echo $treballador["dni"]; ?>" size="40"><br><br>
            <label for=carrec>Càrrec: </label>
            <input class="form-textbox form-textbox-text" type="text" id=carrec name=carrec value="<?php echo $treballador["carrec"]; ?>" size="40"><br><br>       
            <div align="center">
            <input class="button button-block-info as-tradeupinline-button" type="submit" value="Gravar"/>
            <input class="button-white button-block-petit as-tradeupinline-button" type="reset" value="Reiniciar"/><br>
            </form>
             </div>      
        </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

<!-- Footer -->
<?php include("layout/footer.php"); ?>

</div>
<!-- End of Content Wrapper -->
    </div>
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
