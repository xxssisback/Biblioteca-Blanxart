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
        <div class="recuadro_lista">
    
            <style>

                #div_form_linia {
                    display: none;
                    position: absolute;
                    width: 400px;
                    left: 300px;
                    top: 100px;
                    background-color: white;
                }

                table{
                    color: gray;

                }
            </style>
            <h3 style="padding: 20px;">EDICIÓ DE PRESSUPOSTOS</h3>
            
            <?php
            // Carreguem les dades del pressupost
            include("functions/connector.php");
            $id_pressupost=$_REQUEST["id_pressupost"];
            $sql="SELECT * FROM tb_pressupostos INNER JOIN tb_clients ON tb_pressupostos.id_client=tb_clients.id_client WHERE id_pressupost=$id_pressupost";
            $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
            $reg=mysqli_fetch_array($result);
            ?>
            <div style="margin: 20px;
                        padding: 10px;
                        border-radius: 5px;">
                <h5>DADES DEL PRESSUPOST</h5>
                Data elaboració: <?php echo $reg["data_elaboracio"];?><br>
                Client: <?php echo $reg["nom_client"]; ?><br>
                Observacions:<br>
                <div style="margin: 20px;
                            color: gray;
                            padding: 10px;
                            border-radius: 5px;
                            box-shadow: 0px 0px 5px darkgray;"><?php echo $reg["detall"]; ?></div><br>
                <h5>DETALL DEL PRESSUPOST</h5>
                <div style="margin: 20px;
                            padding: 10px;
                            color: gray;
                            border-radius: 5px;
                            box-shadow: 0px 0px 5px darkgray;" id=linies_pressupost>
                    <?php
                    $sql="SELECT * FROM tb_pressupostos_linies WHERE id_pressupost=$id_pressupost";
                    $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));?>
                    <table>
                        <tr><th>Descripció</th><th>Quantitat</th><th>Preu</th><th>Total</th></tr><?php

                    while($linia=mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $linia["descripcio"]; ?></td>
                            <td><?php echo $linia["quantitat"]; ?></td>
                            <td><?php echo $linia["preu_unitat"]; ?></td>
                            <td><?php echo $linia["total"]; ?></td>
                            <td>
                                <input class="button-white button-block-editar as-tradeupinline-button" type="button" id="boton_editar" name="boton_editar" value="Editar" onclick="editar_linia(<?php echo $linia['id_pressupost_linia'];?>,'<?php echo $linia['descripcio'];?>',<?php echo $linia['quantitat'];?>,<?php echo $linia['preu_unitat'];?>)">
                                <a class="button-white button-block-eliminar as-tradeupinline-button" href="functions/eliminar_pressupost.php?usuari=<?php echo $linia["id_pressupost_linia"];?>">Eliminar</a>
                            </td>
                        </tr> <?php
                    } ?>
                    </table><br>
                </div><hr><br>
                <button class="button-white button-block-info as-tradeupinline-button" onclick="afegir_linia(<?php echo $reg['id_pressupost'];?>)">Afegir línea</button>
            </div>
            <div id=div_form_linia style="padding: 20px; width:260px; border-radius:3px; box-shadow: 0px 0px 5px darkgray;">
                <form id=form_linia>
                    <input class="form-textbox form-textbox-text" type="hidden" name=id_pressupost_linia id=id_pressupost_linia>
                    <label for=descripcio>Descripció:</label><br>
                    <input class="form-textbox form-textbox-text" type="text" name=descripcio id=descripcio><br><br>
                    <label for=quantitat>Quantitat:</label><br>
                    <input class="form-textbox form-textbox-text" type="number" name=quantitat id=quantitat><br><br>
                    <label for=preu_unitat>Preu unitat:</label><br>
                    <input class="form-textbox form-textbox-text" type="number" name=preu_unitat id=preu_unitat><br><hr>
                    <input class="button-white button-block-info as-tradeupinline-button type="button" value="Gravar" onclick="gravar_linia()">
                    <input class="button-white button-block-editar as-tradeupinline-button type="button" value="Cancel·lar" onclick="tancar_formulari()">
                </form>
            </div>
        <div>
        </div>
        </div>
        </body>
        <script>
        function afegir_linia(id_pressupost) {
        //alert  ("Aquí afegirem una linia al pressupost ID:"+id pressupost);
        document.getElementById("div_form_linia").style.display="block";
        document.getElementById("form_linia").reset();
        document.getElementById("id_pressupost_linia").value="";


        }
        function editar_linia(id_pressupost_linia,descripcio,quantitat,preu_unitat){
        document.getElementById("div_form_linia").style.display="block";
        document.getElementById("form_linia").reset();
        document.getElementById("id_pressupost_linia").value=id_pressupost_linia;
        document.getElementById("descripcio").value=descripcio;
        document.getElementById("quantitat").value=quantitat;
        document.getElementById("preu_unitat").value=preu_unitat;
        }
        function tancar_formulari() {
        document.getElementById("div_form_linia").style.display="none";
        }
        function gravar_linia() {
        // Aquí recollirem la informacio del formulari i l'enviarem al sevidor
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
        if (this.readyState>2) {
            document.getElementById("linies_pressupost").innerHTML=this.responseText;
            tancar_formulari();
        }
        };
        dades="id_pressupost_linia="+document.getElementById("id_pressupost_linia").value+"&descripcio="+document.getElementById("descripcio").value+"&quantitat="+document.getElementById("quantitat").value+"&preu_unitat="+document.getElementById("preu_unitat").value+"&id_pressupost=<?php echo $id_pressupost;?>";

        xhr.open("POST","functions/gravar_linia.php",true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send(dades);
        }
        </script>







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
