<?php

session_start();

?>
<div class="card">
    <center>
        <div class="card-table">

        </div>

        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>nombre</th>
                        <th>Contraseña</th>
                        <th>telefon</th>
                        <th>email</th>
                        <th>Metodo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($registro as $resgistro) {

                    ?>
                        <tr>
                            <td> <?php echo $resgistro->id; ?> </td>
                            <td> <?php echo $resgistro->usuario; ?> </td>
                            <td> <?php echo $resgistro->nombre; ?> </td>
                            <td> <?php echo $resgistro->contrasena; ?> </td>
                            <td> <?php echo $resgistro->telefono; ?> </td>
                            <td> <?php echo $resgistro->email; ?> </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="">
                                    <a href="?controller=admit&accion=editar&id=<?php echo $resgistro->id; ?>" class="btn btn-success ">Editar</a>
                                    <a href="?controller=admit&accion=borrar&id=<?php echo $resgistro->id; ?>" class="btn btn-danger">Borrar</a>
                                </div>
                            </td>
                        </tr>
                        <!--boton de edicion-->

                    <?php } ?>

                </tbody>
            </table>

            <a name="" id="" href="?controller=admit&accion=crear" class="btn btn-success" role="button">Registrar usuario</a>
        </div>
        <center>
</div>