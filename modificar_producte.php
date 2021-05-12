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
            </div>
        </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
    <?php 
        require('functions/connector.php'); 
        $sql="SELECT * FROM tb_producte WHERE id_producte=".$_GET["usuari"];
        $result=mysqli_query($dbLink,$sql) or exit(mysqli_connect_error($dbLink));
        $producte=mysqli_fetch_array($result);
        ?>
        <div class="recuadro_menu">
        <h1 class="nou-usuari">Modificar producte</h1>
        <hr>
        <form action=functions/gravar_modificar_producte.php method="POST">
            <label for=nom>Nom del producte: </label>
            <input type="hidden" id=id_producte name=id_producte value="<?php echo $producte["id_producte"]; ?>" size="20">
            <input class="form-textbox form-textbox-text" type="text" id=nom name=nom value="<?php echo $producte["nom"]; ?>" size="20"><br><br>
            <label for=genere>Genere: </label>
            <input class="form-textbox form-textbox-text" type="text" id=genere name=genere value="<?php echo $producte["genere"]; ?>" size="20"><br><br>
            <label for=proveidor>proveidor: </label>
            <input class="form-textbox form-textbox-text" type="text" id=proveidor name=proveidor value="<?php echo $producte["proveidor"]; ?>" size="40"><hr>
            <div align="center">
            <input class="button button-block-info as-tradeupinline-button" type="submit" value="Gravar"/>
            <input class="button-white button-block-petit as-tradeupinline-button" type="reset" value="Reiniciar"/><br>
            </form>
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