<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controlador=clientes&accion=crear" role="button">Agregar Dispositvos</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dispositivo</th>
                <th>Temperatura</th>
                <th>Púlso</th>
                <th>Oxígeno</th>
                <th>código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente) { ?>
            <tr>
                <td><?php echo $cliente->id; ?></td>
                <td><?php echo $cliente->dispositivo; ?></td>            
                <td><?php echo $cliente->temperatura; ?></td>
                <td><?php echo $cliente->pulso; ?></td>
                <td><?php echo $cliente->oxigeno; ?></td>
                <td><?php echo $cliente->codigo; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=clientes&accion=editar&id=<?php echo $cliente->id; ?>" class="btn btn-success">Editar</a>
                        <a href="?controlador=clientes&accion=borrar&id=<?php echo $cliente->id; ?>" class="btn btn-danger">Borrar</a>
                    </div>    
                </td>
            </tr>
            <?php } ?>    
        </tbody>
    </table>

    </div>

</div>





