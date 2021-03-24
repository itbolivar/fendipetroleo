<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
    <title>Precios combustible - Fendipetroleo Nacional</title>
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <div class="row">
            <div class="col-md-4 align-self-center">
                <h2>Precios de Combustibles</h2>
                <p>El Ministerio de Minas y Energía presenta este documento didáctico con el objeto de ofrecer a los ciudadanos una orientación sobre la política de fijación de precios de la Gasolina Motor Corriente y el ACPM.</p>
                <img style="width: 100%" src="<?php echo constant('URL'); ?>public/img/precioImg.png">
            </div>
            <div class="col-md-8">
                <div class="card" style="border-radius: 40px;">
                    <div class="card-body text-center">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1kOWsYQYL0-uEfnaSBk4xU8PytGE" width="640" height="480"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>