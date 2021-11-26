<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-danger" href="?controlador=historico&accion=vaciar" role="button">Vaciar tabla</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dispositivo</th>
                    <th>Variable</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historicos as $historico) {?>
                <tr>
                    <td><?php echo $historico->id; ?></td>
                    <td><?php echo $historico->clientes_id; ?></td>
                    <td><?php echo $historico->variable; ?></td>
                    <td><?php echo $historico->valor; ?></td>
                    <td><?php echo $historico->fecha; ?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="?controlador=historico&accion=borrar&id=<?php echo $historico->id; ?>" class="btn btn-danger">Borrar</a>
                    </div>                         
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>