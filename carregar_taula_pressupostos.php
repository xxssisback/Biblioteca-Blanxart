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
    
        </div>

   <!-- Page Content -->
   <div id="page-content-wrapper">


    <!-- /#page-content-wrapper -->

    <div id="page-content-wrapper">
   <div class="recuadro_lista">
   <?php
    include("functions/connector.php");
    $estat=$_REQUEST["estat"];
    if($estat=="pendents_presentar") {
    $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.id_client INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador WHERE ISNULL(data_presentacio)";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

    <table class="table">
    <br>
    <h1 class="h3 mb-0 text-gray-800">Pendents de presentar</h1>
    <br>
        <tr>
            <th>Data elaboracio</th><th>Client</th><th>Treballador</th><th></th>
        </tr>
    <?php
    while($reg=mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $reg["data_elaboracio"]; ?></td>
            <td><?php echo $reg["nom_client"]; ?></td>
            <td><?php echo $reg["nom"]," ", $reg["cognom"]; ?></td>
            <td>
                <a class="button-white button-block-editar as-tradeupinline-button" href="editar_pressupost.php?id_pressupost=<?php echo $reg["id_pressupost"]; ?>">Editar</a>
                <a class="button-white button-block-info as-tradeupinline-button" href="functions/presentar_pressupost.php?id_pressupost=<?php echo $reg["id_pressupost"]; ?>">Marcar com a presentat</a>
            </td>
        </tr><?php
    } ?>
    </table><?php
}else if($estat=="presentats") {
    $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.
    id_client INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador 
    WHERE NOT ISNULL(data_presentacio) AND ISNULL(data_acceptacio) AND ISNULL(data_rebuig);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

    <table class="table">
    <br>
    <h1 class="h3 mb-0 text-gray-800">Presentats</h1>
    <br>
        <tr>
            <th>Data elaboració</th><th>Data presentació</th><th>Client</th><th>Treballador</th><th></th>
        </tr>
    <?php
    while($reg=mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $reg["data_elaboracio"]; ?></td>
        <td><?php echo $reg["data_presentacio"]; ?></td>
        <td><?php echo $reg["nom_client"]; ?></td>
        <td><?php echo $reg["nom"]," ", $reg["cognom"]; ?></td>
        <td>
        <a class="button-white button-block-aceptar as-tradeupinline-button" href=functions/acceptar_pressupost.php?id_pressupost=<?php echo $reg["id_pressupost"]; ?>>Acceptar</a>
            <a class="button-white button-block-eliminar as-tradeupinline-button" href=functions/rebutjar_pressupost.php?id_pressupost=<?php echo $reg["id_pressupost"]; ?>>Rebutjar</a>
    </td>
    </tr><?php
    } ?>
    </table><?php
}if($estat=="aprovats") {
    $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.
    id_client INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador 
    WHERE NOT ISNULL(data_acceptacio);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

    <table class="table">
    <br>
    <h1 class="h3 mb-0 text-gray-800">Aprovats</h1>
    <br>
        <tr>
            <th>Data presentacio</th><th>Data acceptació</th><th>Client</th><th>Treballador</th><th></th>
        </tr>
    <?php
    while($reg=mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $reg["data_presentacio"]; ?></td>
        <td><?php echo $reg["data_acceptacio"]; ?></td>
        <td><?php echo $reg["nom_client"]; ?></td>
        <td><?php echo $reg["nom"]," ", $reg["cognom"]; ?></td>
    </tr><?php
    } ?>
    </table><?php
}elseif($estat=="rebutjats") {
    $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.
    id_client INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador 
    WHERE NOT ISNULL(data_rebuig);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

    <table class="table">
    <br>
    <h1 class="h3 mb-0 text-gray-800">Rebutjats</h1>
    <br>
        <tr>
            <th>Data presentacio</th><th>Data rebuig</th><th>Client</th><th>Treballador</th><th></th>
        </tr>
    <?php
    while($reg=mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $reg["data_presentacio"]; ?></td>
        <td><?php echo $reg["data_rebuig"]; ?></td>
        <td><?php echo $reg["nom_client"]; ?></td>
        <td><?php echo $reg["nom"]," ", $reg["cognom"]; ?></td>
    </tr><?php
    } ?>
    </table><?php
}if($estat=="vençuts") {
    $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.
    id_client INNER JOIN tb_treballadors_2 ON tb_pressupostos.id_treballador=tb_treballadors_2.id_treballador 
    WHERE NOT ISNULL(data_venciment);";
    $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink)); ?>

    <table class="table">
    <br>
    <h1 class="h3 mb-0 text-gray-800">Vençuts</h1>
    <br>
        <tr>
            <th>Data presentacio</th><th>Data venciment</th><th>Client</th><th>Treballador</th><th></th>
        </tr>
    <?php
    while($reg=mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $reg["data_presentacio"]; ?></td>
        <td><?php echo $reg["data_venciment"]; ?></td>
        <td><?php echo $reg["nom_client"]; ?></td>
        <td><?php echo $reg["nom"]," ", $reg["cognom"]; ?></td>
    </tr><?php
    } ?>
    </table><?php
}
?>
   </div>
    </div>

    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    </div>
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