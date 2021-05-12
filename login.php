<!DOCTYPE html>
<html lang="en">

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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <?php require_once('functions/connector.php') ?>
                            <div class="col-lg-6 d-none d-lg-block"><img src="img/login.jpg" alt="Biblioteca Blanxart" style="height: 450px;width: inherit;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Benvingut a la plataforma d'administració per a Biblioteca Blanxart</h1>
                                    </div>
                                    
                                    <form class="user" action=functions/validate.php method=POST>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="usuari"
                                                id="nom_i_cognom" aria-describedby="emailHelp"
                                                placeholder="Introdueix el teu nom d'usuari...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="contrasenya"
                                            id="dni" placeholder="Introdueix la contrasenya...">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recorda'm la proxima vegada</label>
                                            </div>
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" value="Iniciar sessió"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Scripts -->
    <?php include("layout/scripts.php"); ?>

</body>

</html>