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
                        <h1 class="h3 mb-0 text-gray-800">Informes</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Buscar per filtre</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                

                    
                    <!-- Formulario -->
                    <form action="">
                    
                    <!-- Data inici -->
                    <label for="data_inici">Data inici: </label>
                    <input class="form-textbox form-textbox-text" type="date" name="data_inici" id="data_inici">
                    <br>
                    <br>
                    <!-- Data fi -->
                    <label for="data_fi">Data fi: </label>
                    <input class="form-textbox form-textbox-text" type="date" name="data_fi" id="data_fi">
                    <br>
                    <br>
                    <!-- Treballador -->
                    <label for="id_treballador">Treballador: </label>
                    <select class="form-textbox form-textbox-text" name="id_treballador" id="id_treballador">
                        <option value="0">Tots</option>
                        <?php
                        include('functions/connector.php');
                        $sql="SELECT * FROM tb_treballadors_2";
                        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
                        while($reg=mysqli_fetch_array($result)) {?>
                            <option value="<?php echo $reg["id_treballador"]; ?>"><?php echo $reg["nom"];?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <br>
                    <!-- Client -->
                    <label for="id_client">Client: </label>
                    <select class="form-textbox form-textbox-text" name="id_client" id="id_client">
                        <option value="0">Tots</option>
                        <?php
                        include('functions/connector.php');
                        $sql="SELECT * FROM tb_clients";
                        $result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
                        while($reg=mysqli_fetch_array($result)) {?>
                            <option value="<?php echo $reg["id_client"]; ?>"><?php echo $reg["nom_client"];?></option>
                        <?php } ?>
                    </select>
                    <br><br>
                    <!-- Botons -->
                    <div align="center">
                    <input class="button button-block-info as-tradeupinline-button" type="button" value="Enviar" onclick=carregar_dades()>
                    <input class="button-white button-block-petit as-tradeupinline-button" type="reset" value="Esborrar">
                    </div>
                    </form>


                    </div>
                </div>

            </div>
            
                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="card shadow mb-4">
                                
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Opcions</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    </div>
                                </div>
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                
                                    <!-- Formulario -->
                                    <form action="">
                                    
                                    <!-- Data inici -->
                                    <input type="radio" name="informe" value="informe1">&nbsp;<label for="informe1">Pressupostos per treballador</label><br>
                                    <input type="radio" name="informe" value="informe2">&nbsp;<label for="informe2">Pressupostos per per client</label><br>
                                    <input type="radio" name="informe" value="informe3">&nbsp;<label for="informe3">Percentatge aprovats i rebutjats per treballador</label><br>
                                    <input type="radio" name="informe" value="informe4">&nbsp;<label for="informe4">Percentatge aprovats i rebutjats per client</label><br>
                                    <input type="radio" name="informe" value="informe5">&nbsp;<label for="informe5">Marge net per treballador</label><br>
                                    <input type="radio" name="informe" value="informe6">&nbsp;<label for="informe6">Marge net per client</label><br>
                                    <br>
                                    <!-- Botons -->
                                    <div align="center">
                                    <input class="button button-block-info as-tradeupinline-button" type="button" value="Enviar" onclick=carregar_dades()>
                                    <input class="button-white button-block-petit as-tradeupinline-button" type="reset" value="Esborrar">
                                    </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>

                                <!-- Content Row -->

                                <div class="row">

                                <!-- Area Chart -->
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Taula de informes</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- Card Body -->
                                        <div class="card-body" id="taula_de_contingut">
                                        

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


    <!-- Scripts de la pagina -->
    <script>
        function carregar_dades() {
            informe=document.querySelector('input[name="informe"]:checked').value;
            data_inici=document.getElementById("data_inici").value;
            data_fi=document.getElementById("data_fi").value;
            id_client=document.getElementById("id_client").value;
            id_treballador=document.getElementById("id_treballador").value;

            xhr=new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if(this.readyState>2) {
                    document.getElementById("taula_de_contingut").innerHTML=this.responseText;
                }
            };
            dades="informe="+informe+"&data_inici="+data_inici+"&data_fi="+data_fi+"&id_client="+id_client+"&id_treballador="+id_treballador;

            xhr.open("POST","functions/carregar_informes.php",true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhr.send(dades);
        }
    </script>

    <!-- Scripts -->
    <?php include("layout/scripts.php"); ?>

</body>

</html>