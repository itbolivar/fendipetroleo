<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <br />
        <h1>Contáctenos</h1>
        <br />
        <p class="my-0"><strong>Sede Bogotá D.C: </strong>Cra. 18 No. 78 - 40 Oficina 402</p>
        <p class="my-0"><strong>Horario de atención: </strong>Lunes a viernes de 7:00 a.m. a 5:00 p.m.</p>
        <p class="my-0"><strong>Teléfonos: </strong>PBX: (571) 6218275</p>
        <p><strong>Correo Institucional: </strong>secretaria@fendipetroleo.com</p>
        <p class="my-0"><strong>Presidente de Fendipetróleo: </strong>Juan Carlos Vélez Uribe | vocero@fendipetroleo.com</p>
        <p class="my-0"><strong>Presidente Junta Directiva Fendipetróleo Nacional: </strong>Jairo Antonio Gómez Fontalvo | presidenciajuntadirectiva@fendipetroleo.com</p>
        <p class="my-0"><strong>Presidente Ejecutivo Fendipetróleo Nacional: </strong>Eduardo Rafael de Jesús Molinares Baute | presidencia@fendipetroleo.com</p>
        <hr style="border: 1px solid;" />
        <h3>Presidentes Junta Directiva</h3>
        <img src="<?php echo constant('URL'); ?>public/img/presidentes-junta.jpg" alt="Presidentes">
        <hr style="border: 1px solid;" />
        <h3>Directores Ejecutivos</h3>
        <img src="<?php echo constant('URL'); ?>public/img/directores-ejecutivos.jpg" alt="Directores">

    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>