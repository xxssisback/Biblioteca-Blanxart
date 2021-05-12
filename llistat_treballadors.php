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

   <!-- Page Content -->
   <div id="page-content-wrapper">
    <?php
    require('functions/connector.php');

$sql="SELECT * FROM tb_treballadors;";

$result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

<div class="recuadro_lista">
    <div>
<table class="table">
    <tr>
    <br>
        <h1 class="h3 mb-0 text-gray-800">Llistat de treballadors</h1>
        <br>
        <th>Nom treballador</th><th>Data naixament</th><th>Correu electronic</th><th>Numero de contacte</th><th>Població</th><th>DNI</th><th>Càrrec</th>
    </tr> <?php
    while($usuari=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $usuari["nom_i_cognom"]; ?></td>
            <td><?php echo $usuari["data_naixament"]; ?></td>
            <td><?php echo $usuari["correu_electronic"]; ?></td>
            <td><?php echo $usuari["numero_contacte"]; ?></td>
            <td><?php echo $usuari["poblacio"]; ?></td>
            <td><?php echo $usuari["dni"]; ?></td>
            <td><?php echo $usuari["carrec"]; ?></td>
            <td>
                <a class="button-white button-block-editar as-tradeupinline-button" href="modificar_treballador.php?usuari=<?php echo $usuari["id_treballador"];?>">Editar</a>
                <a class="button-white button-block-eliminar as-tradeupinline-button" href="functions/eliminar_treballador.php?usuari=<?php echo $usuari["id_treballador"];?>">Eliminar</a>
            </td>
        </tr><?php
} ?>
</table>
</div>
</div>

    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
    

                    

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