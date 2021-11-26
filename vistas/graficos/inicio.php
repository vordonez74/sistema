<div class="col-lg-12" style="padding-top:20px;">
  <div class="card">
    <div class="card-header">
      Temperaturas
    </div>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Dispositivo</th>
              <th>ID</th>
              <th>Temperatura</th>
              <th>Fecha</th>
            </tr>
          </thead>
          <tbody id="screen">
            <?php foreach($temperaturas as $temp) { ?>
            <tr>
              <td><?php echo $temp->clientes_id; ?></td>
              <td><?php echo $temp->id; ?></td>
              <td><?php echo $temp->valor; ?></td>
              <td><?php echo $temp->fecha; ?></td>
            </tr>
              <?php } ?>
          </tbody>
        </table>
        
    </div>
    <div class="card-footer text-muted">
    <canvas id="myChart" width="400" height="400"></canvas>
    </div>
  </div>
</div>
