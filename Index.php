<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Diseño y Publicidad" content="">
    <meta name="Central de Diseño" content="">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <title>NOVACEL</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="css/3dc.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>


        <?php
        include_once("vista/menu_index.php");
        include_once("vista/login_for.php");
        ?>
        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(253, 253, 253);"></path>
            </svg>
        </div>

    </header>

    <main>

        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">DATOS CURIOSOS</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/viejito.jpg" alt="" class="imagen-about-us">

                <div class="contenido-textos">
                    <h3><span>1</span>¿Sabias que?</h3>
                    <p>La marca de celulares samsung comenzo siendo una pescaderia.</p>
                    <h3><span>2</span>¿Sabias que?</h3>
                    <p>El primer celular del mundo fue el DynaTAC 8000X, que fue creado por el ingeniero Electrico Martin Cooper</p>
                </div>
            </div>
        </section>

        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Categorias de celulares en venta</h2>

                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/iphone12.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">

                            <a href="iphone.html">
                                <p>iPhone</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">

                        <img src="img/a21s.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <a href="Samsung.html">
                                <p>Samsung a21s</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/redmi.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <a href="Xiaomi.html">
                                <p>Xiaomi redmi 10</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/motorolag100.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <a href="Motorola.html">
                                <p>Motorola g100</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/vivoY20s.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <a href="Vivo.html">
                                <p>VivoY20s</p>
                            </a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/huaweiy9a.gif" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <a href="Huawei.html">
                                <p>Huaweiy9a</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Celulares</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Alejandra Garcia</h4>
                        <p>iphone12 con capacidad de 128 gb
                            Contacto al 333235323
                        </p>

                    </div>
                </div>
                <div class="card">
                    <img src="img/cliente 2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Fernando Avila</h4>
                        <p>huaweiy9a con capacidad de 128 gb
                            Contacto al 311223321

                        </p>
                        <font color="white">

                        </font>

                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.svg" alt="">

                        <a href="Formulariox.html">
                            <h3>Te registras</h3>
                        </a>
                        <p></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion4.svg" alt="">
                        <h3>Publicas o buscas el celular que quieras comprar</h3>
                        <p></p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion3.svg" alt="">
                        <h3>Vendes o compras</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once("vista/pie.php") ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>