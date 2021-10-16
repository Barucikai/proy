<div class="card">
    <div class="card-header">
        Agregar servicio
    </div>
    <div class="card-body">
        <!-- -->
        <form action="" method="POST">
            <!--TODO: -->
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <?php var_dump($servicio); ?>
                <input class="form-control" value="<?php echo $servicio->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID servicios">
            </div>
            <!-- -->
            <!--TODO: -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input required type="text" value="<?php echo $servicio->nombre; ?>" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del servios">
            </div>
            <!-- -->
            <!-- -->
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input required type="text" class="form-control" name="descripcion" id="descripcion" rows="3" value="<?php echo $servicio->descripcion; ?>"></input>
            </div>
            <!-- -->
            <!-- -->
            <div class="mb-3">
                <label for="redes" class="form-label">Redes sociales:</label>
                <input required type="text" value="<?php echo $servicio->redes; ?>" class="form-control" name="redes" id="redes" aria-describedby="helpId" placeholder="Redes sociales">
            </div>
            <!-- -->
            <!-- -->
            <input name="" id="" class="btn" type="submit" value="Editar campos">
            <a name="Volver" id="Volver" class="btn" href="?controller=admit&accion=inicio" " role=" button">Volver</a>
            <!-- -->
        </form>
        <!-- -->
    </div>
</div>