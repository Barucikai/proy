        <main>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <center>
                        <h1>Registro de Productos</h1>
                    </center>
                    <form action="" method="POST">
                        <!-- -->
                        <div class="form-group">
                            <label for="id" class="form-label">ID;</label>
                            <input required type="text" class="form-control" value="<?php echo $productosP->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID servicios">
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input required type="text" class="form-control" value="<?php echo $productosP->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="nombre">
                        </div>

                        <div class="form-group">
                            <label for="descrip" class="form-label">Descripcion:</label>
                            <input required type="text" class="form-control" value="<?php echo $productosP->descrip; ?>" name="descrip" id="descrip" aria-describedby="helpId" placeholder="contra">
                        </div>

                        <div class="form-group">
                            <label for="foto" class="form-label">Foto:</label>
                            <input required type="text" class="form-control" value="<?php echo $productosP->foto; ?>" name="foto" id="foto" aria-describedby="helpId" placeholder="tele">
                        </div>

                        <center>
                            <input name="" id="" class="btn btn-success" type="submit" value="Enviar">
                            <a name="Volver" id="Volver" class="btn btn-danger" href="?controller=prod&accion=inicio" " role=" button">Volver</a>
                        </center>

                    </form>

                    <hr>
                    <br>
                </div>
            </div>
            </div>