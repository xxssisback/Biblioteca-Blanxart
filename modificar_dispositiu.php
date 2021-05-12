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
        $sql="SELECT * FROM tb_ordinadors WHERE id_ordinador=".$_GET["usuari"];
        $result=mysqli_query($dbLink,$sql) or exit(mysqli_connect_error($dbLink));
        $producte=mysqli_fetch_array($result);
        ?>
        <div class="recuadro_menu">
        <h1 class="nou-usuari">Modificar dispositiu</h1>
        <hr>
        <form action=functions/gravar_modificar_dispositiu.php method="POST">
            
            <label for=cpu>CPU: </label>
            <input class="form-textbox form-textbox-text" type="text" id=cpu name=cpu value="<?php echo $producte["cpu"]; ?>" size="40"><br><br>   
            <label for=ram>RAM: </label>
            <input class="form-textbox form-textbox-text" type="text" id=ram name=ram value="<?php echo $producte["ram"]; ?>" size="40"><br><br>   
            <label for=placa_base>Placa base: </label>
            <input class="form-textbox form-textbox-text" type="text" id=placa_base name=placa_base value="<?php echo $producte["placa_base"]; ?>" size="40"><br><br>   
            <label for=disc_dur>Disc dur: </label>
            <input class="form-textbox form-textbox-text" type="text" id=disc_dur name=disc_dur value="<?php echo $producte["disc_dur"]; ?>" size="40"><br><br>   
            <label for=sistema_operatiu>Sistema operatiu: </label>
            <select class="form-textbox form-textbox-text" id=sistema_operatiu name=sistema_operatiu>
                    <option value=0></option>
                    <?php 
                        $sql="SELECT * FROM tb_software ORDER BY id_software;";
                        $result=mysqli_query($dbLink,$sql) or exit(mysqli_error($dbLink));
                        while($sistema=mysqli_fetch_array($result)) {?>
                            <option <?php if($sistema["id_software"]==$sistema["id_software"]) echo "selected"; ?>
                            value="<?php echo $sistema["id_software"]; ?>">
                            <?php echo $sistema["id_software"]; ?>
                            </option> <?php
                        }
                        ?>
        </select><br><hr>

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
