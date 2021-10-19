        <main>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <center>
                        <h1>Registro de usuario</h1>
                    </center>
                    <form action="" method="POST">
                        <!-- -->
                        <div class="form-group">
                            <label for="id" class="form-label">ID;</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID servicios">
                        </div>

                        <div class="form-group">
                            <label for="usur" class="form-label">Usuario:</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->usuario; ?>" name="usur" id="usur" aria-describedby="helpId" placeholder="usuario">
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre">
                        </div>
                        <!-- -->
                        <!-- -->

                        <div class="form-group">
                            <label for="contra" class="form-label">contraseña:</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->contrasena; ?>" name="contra" id="contra" aria-describedby="helpId" placeholder="contra">
                        </div>

                        <div class="form-group">
                            <label for="tele" class="form-label">Telefono:</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->telefono; ?>" name="tele" id="tele" aria-describedby="helpId" placeholder="tele">
                        </div>
                        <!-- -->
                        <!-- -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input required type="text" class="form-control" value="<?php echo $registro->email; ?>" name="email" id="email" aria-describedby="helpId" placeholder="email">
                        </div>
                        <!-- -->
                        <!-- -->
                        <center>
                            <input name="" id="" class="btn btn-success" type="submit" value="Enviar">
                            <a name="Volver" id="Volver" class="btn btn-danger" href="?controller=admit&accion=inicio" " role=" button">Volver</a>
                        </center>

                        <!-- -->
                    </form>

                    <hr>
                    <br>
                </div>
                <!-- -->
            </div>
            </div>