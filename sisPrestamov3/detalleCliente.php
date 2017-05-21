<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalle Cliente</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
          $dui = '<h5 id="getDui">'.$_GET['dui'].'</h5>';
          $nit = '<h5 id="getNit">'.$_GET['nit'].'</h5>';
          $nombres = '<h5 id="getNombre">'.$_GET['nombres'].'</h5>';
          $apellidos = '<h5 id="getApellidos">'.$_GET['apellidos'].'</h5>';
          $sexo = '<h5 id="getSexo">'.$_GET['sexo'].'</h5>';
          $direccion = '<h5 id="getDireccion">'.$_GET['direccion'].'</h5>';

          $nombreCompleto = $nombres.$apellidos;
          //ahorita solo muestra el dui :v
         ?>
    </head>
    <body id=body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Detalle Cliente</a>
                </div>
            </div>
        </nav>
        <div class="w3-sidebar w3-bar-block" id="sidebar">
            <a href="index.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home"></span> Principal</a>
            <a href="webcliente.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user"></span> Clientes</a>
            <a href="webpago.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-usd"></span> Pago</a>
            <a href="webprestamo.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt"></span> Prestamo</a>
        </div>
        <div class="container">
            <div class="panel panel-default" id="panelCliente">
                <h4 id="tituloCliente">Perfil Cliente</h4>
                <h5 id="nombreCliente"><?php echo $nombreCompleto; ?></h5>
                <h5 id="Clientedui">DUI</h5> <?php echo $dui; ?>
                <h5 id="Clientenit">NIT</h5> <?php echo $nit; ?>
                <h5 id="Clientenombres">Nombres</h5> <?php echo $nombres; ?>
                <h5 id="Clienteapellidos">Apellidos</h5> <?php echo $apellidos; ?>
                <h5 id="Clienteobservaciones">Observaciones</h5> <?php  ?>
                <h5 id="Clientesexo">Sexo</h5> <?php echo $sexo; ?>
                <h5 id="ClientefechaNacimiento">Fecha de nacimiento</h5>
                <h5 id="Clientedireccion">Direccion</h5> <?php echo $direccion; ?>
                <h5 id="Clientetelefono">Telefono</h5>
            </div>
        </div>
        <form class="form-horizontal" id="clienteDetalle">
          <div class="form-group">
            <label class="col-md-4 control-label" for="DUI">DUI</label>
            <div class="col-md-4">
              <input id="DUI" name="DUI" placeholder="" class="form-control input-md" type="text">
            </div>
          </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nit">NIT</label>
  <div class="col-md-4">
  <input id="nit" name="nit" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombres">Nombres</label>
  <div class="col-md-4">
  <input id="nombres" name="nombres" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>
  <div class="col-md-4">
  <input id="apellidos" name="apellidos" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
  <div class="col-md-4">
  <input id="fecha_nacimiento" name="fecha_nacimiento" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Telefono</label>
  <div class="col-md-4">
  <input id="telefono" name="telefono" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Direccion</label>
  <div class="col-md-4">
  <input id="direccion" name="direccion" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="observaciones">Observaciones</label>
  <div class="col-md-4">
  <input id="observaciones" name="observaciones" placeholder="" class="form-control input-md" type="text">

  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="limpiar">Opciones</label>
  <div class="col-md-8">
    <button id="limpiar" name="limpiar" class="btn btn-primary">Limpiar</button>
    <button id="editar" name="editar" class="btn btn-primary">Guardar Cambios</button>
  </div>
</div>
</form>
    </body>
</html>
