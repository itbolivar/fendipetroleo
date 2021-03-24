<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">

    <!-- Generic -->
    <meta name="description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">

    <!-- Fancy -->
    <meta property="fancy:name" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="fancy:images" content="assets/favicon.png">
    <meta property="fancy:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="fancy:category" content="Workplace">

    <!-- Global Canonical -->
    <link rel="canonical" href="https://fendipetroleo.com">
    <meta property="og:url" content="https://fendipetroleo.com">

    <!-- Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="og:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="og:image" content="<?php echo constant('URL'); ?>public/icon/favicon.ico">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fendinaloficial">
    <meta name="twitter:creator" content="@fendinaloficial">
    <meta name="twitter:title" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta name="twitter:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta name="twitter:image" content="<?php echo constant('URL'); ?>public/icon/favicon.ico">

</head>

<body>
    <header class="shadow main-header" style="margin-top: 0px; margin-bottom: 15px; text-decoration: none; font-size: 17px; font-family: 'Titillium Web', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="<?php echo constant('URL'); ?>public/img/LogoFendiBandera.png" width="80%">
                </div>
                <div class="col-md-5" style="padding-left: 5%">
                    <div class="row py-1">
                        <div class="col-md-2 px-1">
                            <img class="m-left" src="<?php echo constant('URL'); ?>public/icon/reloj.png" height="20px">
                        </div>
                        <div class="col-md-6">
                            <p>Lun - Vie: 7 AM : 5 PM </p>
                        </div>
                        <div class="col-md-1">
                            <a href="https://www.facebook.com/fendipetroleo" target="_blank">
                                <img src="<?php echo constant('URL'); ?>public/icon/facebook.png" width="20px" style="margin: 2px;" alt="F">
                            </a></div>
                        <div class="col-md-1">
                            <a href="https://www.instagram.com/fendipetroleonacional/" target="_blank">
                                <img src="<?php echo constant('URL'); ?>public/icon/instagram.png" width="20x" style="margin: 2px;" alt="F">
                            </a>
                        </div>
                        <div class="col-md-1">
                            <a href="https://twitter.com/Fendipetroleo" target="_blank">
                                <img src="<?php echo constant('URL'); ?>public/icon/twitter.png" width="20px" style="margin: 2px;" alt="F">
                            </a>
                        </div>
                        <div class="col-md-1">
                            <a href="https://www.youtube.com/channel/UCh3AwxiWRRvuhhjHWmZ-5-g/featured" target="_blank">
                                <img src="<?php echo constant('URL'); ?>public/icon/youtube.png" width="20px" style="margin: 2px;" alt="F">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 px-1">
                            <img class="m-left" src="<?php echo constant('URL'); ?>public/icon/buzon.png" height="20px">
                        </div>
                        <div class="col-md-10">
                            <p>informacion@fendipetroleo.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default navbar-expand-lg navbar-light p-0  d-inline">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="width: 100%">
                        <a class="align-self-center" href="<?php echo constant('URL'); ?>index.php">
                            <img src="<?php echo constant('URL'); ?>public/icon/casa.png" width="20px" alt="Casa">
                        </a>
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>index.php"><b>Home</b></a>
                            <div class="dropdown-menu dropdown-content" aria-labelledby="home">
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>memorias-congreso.php">Memorias congreso</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>precios-combustible.php">Precios combustibles</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>normativo.php">Normativo</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>convocatorias.php">Convocatorias</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>estados-financieros.php">Estados financieros</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>propuesta-estatutos.php">Propuesta estatutos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 15%">
                            <a class="nav-link " href="#"><b>¿Quiénes somos?</b></a>
                            <div class="dropdown-menu dropdown-content" aria-labelledby="quienes">
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>historia.php">Historia</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>mision-vision.php">Misión y visión</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>objetivos-estrategicos.php">Objetivos estratégicos</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>organigrama.php">Organigrama</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 14%">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>fondo-soldicom.php"><b>Fondo soldicom</b></a>
                            <div class="dropdown-menu dropdown-content" aria-labelledby="fondo">
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>plan-mejoramiento-cgr.php">Plan de mejoramiento CGR </a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>matriz-normativa-eds.php">Matriz normativa para EDS</a>
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>asamblea.php">Asamblea</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>prensa.php"><b>Prensa</b></a>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href="https://blog.fendipetroleo.com/revista/"><b>Revista</b></a>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>convenios.php"><b>Convenios</b></a>
                        </li>
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>contactenos.php"><b>Soporte</b></a>
                            <div class="dropdown-menu dropdown-content" aria-labelledby="contactenos">
                                <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos.php">Contáctenos</a>
                                <a class="dropdown-item" href="https://fendipetroleo.com/Soporte/">Mesa de Ayuda</a>
                                <a class="dropdown-item" href="https://fendipetroleo.com/CRM/">Gestión EDS</a>
                                <a class="dropdown-item" href="https://fendipetroleo.com/Virtual/login/index.php">Campus Virtual</a>
                            </div>
                        </li>
                        <!--<li class="nav-item dropdown text-center" style="width: 11%">
                            <a class="nav-link" href="https://fendipetroleo.com/Fenditrabajo/">Fenditrabajo</a>
                        </li>-->
                        <li class="nav-item dropdown text-center" style="width: 10%">
                            <a class="nav-link" href=""><b>Políticas</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div style="position: fixed;top: 35%;right: 1px;z-index: 200;">
            <div style="background-color: rgba(250, 250, 250, 0.9); border-radius: 10px; border: 1px solid; ">
                <a href="https://www.facebook.com/fendipetroleo" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/facebook.png" width="25px" style="margin: 2px;" alt="F">
                </a>
                <a href="https://www.instagram.com/fendipetroleonacional/" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/instagram.png" width="25x" style="margin: 2px;" alt="F">
                </a>
                <a href="https://twitter.com/Fendipetroleo" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/twitter.png" width="25px" style="margin: 2px;" alt="F">
                </a>
                <a href="https://www.youtube.com/channel/UCh3AwxiWRRvuhhjHWmZ-5-g/featured" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/youtube.png" width="25px" style="margin: 2px;" alt="F">
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="https://fendipetroleo.com/Virtual/login/index.php" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/campus.png" width="90px" alt="F">
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="https://api.whatsapp.com/send?phone=573172115850&text=Hola%2C%20deseo%20%20contactar%20con%20ustedes" target="_blank">
                    <img src="<?php echo constant('URL'); ?>public/icon/Whatsapp.png" width="70px" alt="F">
                </a>
            </div>

            <div class="row justify-content-center">
                <a href="https://blog.fendipetroleo.com/" style="background: transparent;">
                    <img  src="<?php echo constant('URL'); ?>public/icon/blog.png" width="80px" transparent; " alt="F">
                </a>
            </div>
        </div>
    </header>
</body>

</html>