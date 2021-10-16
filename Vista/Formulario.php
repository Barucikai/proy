<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Registro</title>
    <link rel="shortcut icon" href="../img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/3dc.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<header>
    <?php
    include_once("menu.php");
    ?>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(253, 253, 253);">

            </path>
        </svg>
    </div>
</header>

<body>
    <main>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <center>
                    <h1>Registro de usuario</h1>
                </center>

                <form method="POST" action="registro.php">

                    <div class="form-group">
                        <label for="doc">Documento</label>
                        <input type="text" name="doc" class="form-control" id="id_usuario">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre </label>
                        <input type="text" name="nombre" class="form-control" id="registro">
                    </div>

                    <div class="form-group">
                        <label for="dir">Apellidos </label>
                        <input type="text" name="dir" class="form-control" id="dir">
                    </div>

                    <div class="form-group">
                        <label for="tel">Telefono </label>
                        <input type="text" name="tel" class="form-control" id="tel">
                    </div>

                    <div class="form-group">
                        <label for="tel">Email </label>
                        <input type="text" name="tel" class="form-control" id="tel">
                    </div>


                    <center>
                        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
                        <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
                    </center>
                </form>
                <hr>
                <br>
            </div>



    </main>
    <?php include_once("../vista/pie.php") ?>
</body>

</html>