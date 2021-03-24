<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión Visión - Fendipetroleo Nacional</title>
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
            <div class="col-md-4 align-self-center text-center">
                <img src="<?php echo constant('URL'); ?>public/img/logonal.png" width="90%">
            </div>
            <div class="col-md-8" style="font-size: 15px;">
                <h4 class="font-weight-bold">MISIÓN</h4>
                <p class="text-justify">Somos una organización gremial que representa los intereses de los empresarios distribuidores de combustibles y energéticos del territorio colombiano, promovemos la sostenibilidad del sector y contribuimos al desarrollo social y económico del país.</p>
                <h4 class="font-weight-bold">VISIÓN</h4>
                <p class="text-justify">Para el 2021, seremos una agremiación reconocida por la formulación e implementación de estrategias que garanticen la eficiencia del servicio, la suficiencia financiera de los empresarios distribuidores de combustibles y el bienestar del consumidor final.</p>
            </div>
        </div>
        <hr />
        <br />
        <div class="row">
            <div class="col-md-8" style="font-size: 15px;">
                <h4 class="font-weight-bold">VALORES</h4>
                <p class="text-justify" style="margin-bottom: 0;"><span class="font-weight-bold">-Integridad:</span> Prácticas de coherencia con nuestra razón de ser generando confianza en nuestros públicos de interés.</p>
                <p class="text-justify" style="margin-bottom: 0;"><span class="font-weight-bold">-Respeto:</span> Relaciones internas y externas basadas en la transparencia. Compromiso con el medio ambiente.</p>
                <p class="text-justify" style="margin-bottom: 0;"><span class="font-weight-bold">-Cooperación:</span> Construcción de relaciones sólidas para trabajar por la sostenibilidad del sector.</p>
            </div>
            <div class="col-md-4 align-self-center text-center">
                <img class="rounded-lg" src="<?php echo constant('URL'); ?>public/img/banner4.jpg" width="90%">
            </div>
        </div>
        <br />
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>