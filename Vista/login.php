<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/3dc.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="Registro_productos.php">Registra tu dispositivo</a>
            <a href="Productos.html">Productos</a>
            <a href="vista/login.HTML">Login</a>
            <a href="vista/Formulario.php">Registrarse</a>
            <a href=""></a>
            <img src="../img/logo.png" width="250" height="150" BORDER="" align="right">
            <div class="login">
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
                    <h3>

                    </h3>
                    <!--Inicio del formulario de Iniciar sesion-->
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="well">
                                <!--hace un sombreado a la columna-->
                                <center>
                                    <h3><strong>INICIAR SESION</strong></h3><br>
                                    <img src="../img/usuario.jfif" class="img-circle" width="150" height="150">
                                    <br><br><br>
                                    <form class="form-inline" method="POST" action="registro.php" name="login">
                                        <div class="form-group">
                                            <label for="usuario">USUARIO</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="user">
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label for="pass">CONTRASEÑA</label>
                                            <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
                                        </div>
                                        <br><br>
                                        <input type="hidden" name="envio">
                                        <p><input type="submit" id="enviar" class="btn btn-success" value="INICIAR SESIÓN" name="btn_index">
                                            <a class="btn btn btn-danger" href="Formulario.php" role="button">REGISTRARSE</a>
                                        </p>
                                    </form>
                            </div>


        </nav>


        <div class="wave" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 80" preserveAspectRatio="none" style="height: 100%; width:100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(253, 253, 253);"></path>
            </svg>
        </div>

    </header>
</body>

</html>