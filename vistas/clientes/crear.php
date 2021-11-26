<div class="card">
    <div class="card-header">
        Agregar Dispositivos
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="dispositivo" class="form-label">Dispositivo</label>
              <input required type="text" class="form-control" name="dispositivo" id="dispositivo" aria-describedby="helpId" placeholder="Nombre del dispositivo">
            </div>
            <div class="mb-3">
              <label for="temperatura" class="form-label">Temperatura</label>
              <input type="text" class="form-control" name="temperatura" id="temperatura" aria-describedby="helpId" placeholder="Temperatura">
            </div>
            <div class="mb-3">
              <label for="pulso" class="form-label">Pulso</label>
              <input type="text" class="form-control" name="pulso" id="pulso" aria-describedby="helpId" placeholder="Pulso">
            </div>
            <div class="mb-3">
              <label for="oxigeno" class="form-label">Oxigeno</label>
              <input type="text" class="form-control" name="oxigeno" id="oxigeno" aria-describedby="helpId" placeholder="Oxigeno">
            </div>
            <div class="mb-3">
              <label for="codigo" class="form-label">Codigo</label>
              <input required type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId" placeholder="Codigo">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar Dispositivo">
            <a href="?controlador=clientes&accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>
