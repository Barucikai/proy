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
    <link rel="icon" href="../img/img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <title>NOVACEL</title>
    <link rel="shortcut icon" href="../img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/3dc.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">



</head>

<body>
    <header>


        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../Index.php">Inicio</a></li>
                        <li class="active"><a href="vision.php">Empresa</a></li>
                        <li><a href="../?controller=prod&accion=inicio">Productos</a></li>
                        <li><a href="../?controller=prod&accion=crear">Registra tu dispositivo</a></li>
                    </ul>
                    <img src="../img/logo.png" width="10%" height="10%" BORDER="" align="right">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">Ingresar</a></li>
                        <li><a href="../?controller=admit&accion=crear">Registrarse</a></li>

                    </ul>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <font color="white">
                        <font-size></font-size>
                        <center><strong>
                                <h1>NOVACEL </h1>
                            </strong>
                            <h3>Deja tu celular en buenas manos</h3>
                        </center>
                    </font>
                </div>
                <div class="col-md-2"></div>
            </div>
            <hr>
        </div>

        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 80" preserveAspectRatio="none" style="height: 100%; width:100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(253, 253, 253);"></path>
            </svg>
        </div>

    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Vision y Mision</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="../img/Vision.png" alt="" class="imagen-about-us">

                <div class="contenido-textos">
                    <center>
                        <h3> Visión</h3>
                    </center>
                    <p>Queremos que los usuarios puedan tener un espacio en la web, interactivo que promocione la compra o venta de un dispositivo celula</p>
                    <center>
                        <h3> Misión</h3>
                    </center>
                    <p>Para novacel se desea crear una audiencia con gran demanda para que empresas nacionales de telefonía puedan hacer uso de ella para la compra y venta de celulares.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
        </section>
    </main>

    <?php include_once("diseño/pie.php") ?>
</body>

</html>