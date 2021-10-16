<nav>
    <a href="index.php">Inicio</a>
    <a href="Registro_productos.php">Registra tu dispositivo</a>
    <a href="Productos.html">Productos</a>
    <a href="vista/login.HTML">Login</a>
    <a href="vista/Formulario.php">Registrarse</a>
    <a href=""></a>
    <img src="img/logo.png" width="250" height="150" BORDER="" align="right">
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
                            <img src="img/usuario.jfif" class="img-circle" width="150" height="150">
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