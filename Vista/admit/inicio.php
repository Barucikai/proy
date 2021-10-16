<div class="card">
    <div class="card-table">

    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($servicios as $servicios) {

                ?>
                    <tr>
                        <td> <?php echo $servicios->id; ?> </td>
                        <td> <?php echo $servicios->nombre; ?> </td>
                        <td> <?php echo $servicios->descripcion; ?> </td>
                        <td> <?php echo $servicios->redes; ?> </td>
                        <!--boton de edicion-->
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a href="?controller=admit&accion=editar&id=<?php echo $servicios->id; ?>" class="btn ">Editar</a>
                                <a href="?controller=admit&accion=borrar&id=<?php echo $servicios->id; ?>" class="btn ">Borrar</a>
                            </div>
                        </td>
                    </tr>
                    <!--boton de edicion-->

                <?php } ?>

            </tbody>
        </table>

        <a name="" id="" class="btn" href="?controller=admit&accion=crear" role="button">Agregar servicio</a>
    </div>

</div>