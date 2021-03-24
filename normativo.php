<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normativo - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <div class="row">
            <div class="col-md-12 align-self-center text-center">
                <a href="<?php echo constant('URL'); ?>boletin-normativo.php">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin7.jpg" alt="...">
                </a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo6.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin6.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo5.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin5.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo4.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin4.png" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo3.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin3.png" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo2.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin2.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="col-md-6 p-3">
                <a href="<?php echo constant('URL'); ?>public\documentos\boletinN\boletinNormativo1.pdf">
                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin1.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>