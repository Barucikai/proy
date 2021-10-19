<?php

session_start();

?>
<div class="card">
    <div class="card-table">

    </div>

    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>Descripcion</th>
                    <th>Fotos</th>
                    <th>Metodo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($productosP as $productosP) {

                ?>
                    <tr>
                        <td> <?php echo $productosP->id; ?> </td>
                        <td> <?php echo $productosP->nombre; ?> </td>
                        <td> <?php echo $productosP->descrip; ?> </td>
                        <td> <?php echo $productosP->foto; ?> </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="">
                                <a href="?controller=prod&accion=editar&id=<?php echo $productosP->id; ?>" class="btn btn-success ">Editar</a>
                                <a href="?controller=prod&accion=borrar&id=<?php echo $productosP->id; ?>" class="btn btn-danger ">Borrar</a>
                            </div>
                        </td>
                    </tr>
                    <!--boton de edicion-->

                <?php } ?>

            </tbody>
        </table>

        <a name="" id="" class="btn" href="?controller=prod&accion=crear" role="button">Agregar servicio</a>
    </div>

</div>