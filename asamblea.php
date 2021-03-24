<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asamblea - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <br />
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="py-2">
                    <a style="font-size: 16px;" href="<?php echo constant('URL'); ?>" class="btn btn-outline-secondary btn-lg btn-block rounded-pill py-3">Acta No. 57 Asamblea Ordinaria Fondo de Protección Solidaria - SOLDICOM</a>
                </div>
                <div class="py-2">
                    <a style="font-size: 16px;" href="<?php echo constant('URL'); ?>" class="btn btn-outline-secondary btn-lg btn-block rounded-pill py-3">Acta No. 57 Adicional Asamblea Ordinaria Fondo de Protección Solidaria - SOLDICOM</a>
                </div>
                <div class="py-2">
                    <a style="font-size: 16px;" href="<?php echo constant('URL'); ?>" class="btn btn-outline-secondary btn-lg btn-block rounded-pill py-3">Acta No. 59 Asamblea Ordinaria Fondo de Protección Solidaria - SOLDICOM</a>
                </div>
            </div>
        </div>
        <br />
        <br />
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>