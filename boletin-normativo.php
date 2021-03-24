<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín normativo - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">    
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <div class="text-center">
            <img class="float-center" src="<?php echo constant('URL'); ?>public\img\boletin-crop.jpg" alt="...">
        </div>
        <hr />
        <div class="row">
            <div class="col-md-5 align-self-center text-center">
                <h2>Boletín normativo</h2>
                <h4>Actualización en derecho laboral</h4>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body text-center">
                        <iframe src="https://www.youtube.com/embed/UJor6QQUnGE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="560" height="315" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>