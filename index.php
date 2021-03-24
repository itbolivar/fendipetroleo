<?php define('URL', 'https://fendipetroleo.com/nuevoF/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Fendipetroleo Nacional</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.ico">
    <meta name="description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="container-lg">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="6"></li>
              <!-- <li class="bg-dark" data-target="#carouselExampleIndicators" data-slide-to="7"></li>-->
            </ol>
            <div class="carousel-inner" style="height: 470px;position: relative;">
                 <div class="carousel-item active" data-interval="3000">
                    <a>
                        <img src="<?php echo constant('URL'); ?>public/img/banner/mujer1.png" class="d-block w-100" alt="">
                    </a>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <a href="https://fendipetroleo.com/nuevoF/public/documentos/felicitaciones-EDS-Las-Murallas.pdf">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/GermanCadena1.png" class="d-block w-100" alt="">
                    </a>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <a href="https://fondosoldicom.org/asamblea-general-ordinaria-virtual/">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/asamblea.png" class="d-block w-100" alt="">
                    </a>
                </div>
                <!-- <div class="carousel-item" data-interval="3000">
                    <a href="https://forms.gle/DGyLDUdSWtFNsYNW7">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/beneficio.png" class="d-block w-100" alt="">
                    </a>
                </div> -->
                <div class="carousel-item" data-interval="3000">
                    <a href="https://blog.fendipetroleo.com/revista/">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/Banner-Revista-Fendipetroleo.png" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <a href="<?php echo constant('URL'); ?>precios-combustible.php">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/precio.jpg" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <a href="https://forms.gle/Z36e2dQ7LppExz8E6">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/sostenible.png" class="d-block w-100" alt="...">
                    </a>
                </div>
                <div class="carousel-item" data-interval="3000">
                    <a href="<?php echo constant('URL'); ?>gestion.php">
                        <img src="<?php echo constant('URL'); ?>public/img/banner/onac.png" class="d-block w-100" alt="...">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <img src="<?php echo constant('URL'); ?>public/icon/izquierda.png" width="30px" aria-hidden="true">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <img src="<?php echo constant('URL'); ?>public/icon/derecha.png" width="30px" aria-hidden="true">
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <br><hr>
            <div class="row">
                <div class="col">
                    <iframe width="532" height="300" src="https://www.youtube.com/embed/8cYiIcy68BQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col">
                    <iframe width="532" height="300" src="https://www.youtube.com/embed/vR4WNJYB7KU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <br>
           <div class="container">
                <div class="row justify-content-center">
                <div clas="col-3"> </div>
                
                <div clas="col-6">
                    <iframe width="448" height="252" src="https://www.youtube.com/embed/Em6vhXiudpQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <div clas="col-3"> </div>
            
            </div>
           </div>
        <div>
            <div class="row m-top">
                <div class="col-md-4 text-center">
                    <h3>Ingrese aquí a</h3>
                    <br />
                    <a href="https://fendipetroleo.com/Virtual/login/index.php">
                        <img src="<?php echo constant('URL'); ?>public/icon/campus.png" width="120px" alt="Campus">
                    </a>
                    <a href="https://blog.fendipetroleo.com/">
                        <img src="<?php echo constant('URL'); ?>public/icon/blog.png" width="120px" alt="Blog">
                    </a>
 
                </div>
                <div class="col-md-8">
                    <div class="row py-1">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo constant('URL'); ?>mision-vision.php">
                                        <img src="<?php echo constant('URL'); ?>public/icon/obrero.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <p class="py-3">Quiénes somos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo constant('URL'); ?>fondo-soldicom.php">
                                        <img src="<?php echo constant('URL'); ?>public/icon/entrenar.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <p class="py-3">Fondo soldicom</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo constant('URL'); ?>prensa.php">
                                        <img src="<?php echo constant('URL'); ?>public/icon/pantalla.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <p class="py-3">Prensa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="https://blog.fendipetroleo.com/revista/">
                                        <img src="<?php echo constant('URL'); ?>public/icon/diario.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col--8">
                                    <p class="py-3">Revista</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo constant('URL'); ?>convenios.php">
                                        <img src="<?php echo constant('URL'); ?>public/icon/prestamo.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <p class="py-3">Convenios</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?php echo constant('URL'); ?>contactenos.php">
                                        <img src="<?php echo constant('URL'); ?>public/icon/apoyo.png" width="71px" alt="Obrero">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <p class="py-3">Contactos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row m-top">
                <div class="col-md-8">
                    <p>&nbsp;</p>
                    <p>La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país.</p>
                    <p>Fendipetróleo Nacional cuenta con una Dependencia: Bogotá y Cundinamarca; y 13 Seccionales: Bolívar, San Andrés y Providencia - Tolima y Girardot - Caldas - Caribe - DISPEGUAJIRA - César - Córdoba - Huila y Caquetá - Magdalena Medio - ADICONAR Pasto - Quindío - Sucre - Santander.</p>
                    <p>Fendipetróleo Nacional administra el Fondo de Protección Solidaria - SOLDICOM, creado mediante la Ley 26 de 1989, la cual dicta una serie de disposiciones para el beneficio de los distribuidores minoristas de combustibles líquidos derivados del petróleo en Colombia.</p>
                    <p>La Federación pertenece a la Comisión Latinoamericana de Empresarios de Combustibles - CLAEC, organismo conformado por 18 países de América Latina. Encargado de analizar las realidades, perspectivas y desafíos del sector en beneficio de los distribuidores de combustibles y el desarrollo de las naciones.</p>
                    <p>El combustible es la energía que mueve la economía del país</p>
                </div>
                <div class="col-md-4">
                    <div style="text-align:center;padding:1em 0;">
                        <h3>
                            <a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/country/co">
                                <span style="color:gray;">Hora actual en</span>
                                <br>Colombia
                            </a>
                        </h3>
                        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&amp;size=medium&amp;timezone=America%2FBogota" seamless="" width="100%" height="115" frameborder="0">
                        </iframe>
                    </div>
                    <a href="<?php echo constant('URL'); ?>precios-combustible.php">
                        <img class="block" width="100%" src="<?php echo constant('URL'); ?>public/img/precioImg.png">
                    </a>
                </div>
            </div>
        </div>
        <div>
            <!-- indicadores y slider -->
            <div class="row m-top">
                <div class="col-md-9">
                    <div id="carouselExampleControls" style="position: relative; width: 699px; height: 304px; overflow: hidden; left: 0px; top: 0px;" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="<?php echo constant('URL'); ?>boletin-normativo.php">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin7.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo6.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin6.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo5.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin5.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo4.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin4.png" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo3.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin3.png" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo2.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin2.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="<?php echo constant('URL'); ?>public/documentos/boletinN/boletinNormativo1.pdf">
                                    <img src="<?php echo constant('URL'); ?>public/img/boletines/boletin1.jpg" class="d-block w-100" alt="...">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>INDICADORES ECONÓMICOS</p>
                    <div>
                        <!-- DolarWeb Start -->
                        <!-- DolarWeb IndMax Start -->
                        <div id="IndicadoresMax">
                            <h2><a href="https://dolar.wilkinsonpc.com.co/">Dolar Hoy Colombia</a></h2>
                        </div>
                        <script type="text/javascript" src="https://dolar.wilkinsonpc.com.co/widgets/gratis/indicadores-economicos-max.js?ancho=170&alto=265&fondo=transparent&fsize=10&ffamily=sans-serif&fcolor=000000"></script><!-- DolarWeb IndMax End -->
                    </div>
                </div>
            </div>
        </div><!-- indicadores y slider -->

        <hr />

        <div class="row m-top">
            <div class="col-md-6">
                <a href="<?php echo constant('URL'); ?>memorias-congreso.php">
                    <img class="float-right" src="<?php echo constant('URL'); ?>public/img/congresofendipetroleo.png" alt="..." width="413" height="145">
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?php echo constant('URL'); ?>memorias-congreso.php" class="float-left">
                    <h4 class="text-dark" style="margin-top: 50px !important;">MEMORIAS DEL CONGRESO</h4>
                </a>
            </div>
        </div>
        <br />
        <hr />
        <h3 class="text-center">Síguenos en nuestras redes sociales</h3>

        <div class="row m-top">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFendipetroleo&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1910519099068068" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <a class="twitter-timeline" style="width: 50%" href="https://twitter.com/Fendipetroleo" data-widget-id="302069386464870402">Tweets por @fendinaloficial</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
        </div>

    </div>
    <?php require 'views/footer.php' ?>
</body>

</html>