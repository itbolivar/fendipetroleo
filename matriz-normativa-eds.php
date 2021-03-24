<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz normativa - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg align-self-center text-center">
        <br />
        <br />
        <h3 class="font-weight-bold">Descargue aquí</h3>
        <a href="<?php echo constant('URL'); ?>public/documentos/matriz-normativa-eds-2019.xls">
            <img class="rounded-lg shadow" src="<?php echo constant('URL'); ?>public/img/matriz-normativa.jpg" alt="Matriz">
        </a>
    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>