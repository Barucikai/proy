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
                <center>
        </div>