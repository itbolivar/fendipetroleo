<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan de mejoramiento CGR - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <br />
        <br />
        <div class="row">
            <div class="col-md-4 align-self-center text-center">
                <h5 class="font-weight-bold">PLAN DE MEJORAMIENTO CGR</h5>
                <img class="m-left" src="<?php echo constant('URL'); ?>public/img/logonal.png" height="80px">
            </div>
            <div class="col-md-4 border-left">
                <div class="py-1 text-center">
                    <a href="<?php echo constant('URL'); ?>public/documentos/informe-auditoria-2014-2015.pdf" class="btn btn-outline-secondary btn-plan">
                        <p style="margin: 0px">Informes de Auditoría de la CGR</p>
                        <p style="margin: 0px">Vigencia 2014-2015</p>
                    </a>
                    <a href="" class="btn btn-outline-secondary btn-plan">
                        <p style="margin: 0px">Informes de Auditoría de la CGR</p>
                        <p style="margin: 0px">Vigencia 2016-2017</p>
                    </a>
                    <a href="<?php echo constant('URL'); ?>public/documentos/avance-pm-2014-2015.pdf" class="btn btn-outline-secondary btn-plan">
                        <p style="margin: 0px">Avances al Plan de Mejoramiento</p>
                        <p style="margin: 0px">Vigencia 2014-2015</p>
                    </a>
                    <a href="" class="btn btn-outline-secondary btn-plan">
                        <p style="margin: 0px">Avances al Plan de Mejoramiento</p>
                        <p style="margin: 0px">Vigencia 2016-2017</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 align-self-center text-cente">
                <img class="rounded-lg" src="<?php echo constant('URL'); ?>public/img/banner4.jpg" width="100%">
            </div>
        </div>
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>