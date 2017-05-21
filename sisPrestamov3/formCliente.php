<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalle Prestamo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body id=body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Cliente</a>
                </div>
            </div>
        </nav>
        <div class="w3-sidebar w3-bar-block" id="sidebar">
            <a href="index.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home"></span> Principal</a>
            <a href="webcliente.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user"></span> Clientes</a>
            <a href="webpago.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-usd"></span> Pago</a>
            <a href="webprestamo.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt"></span> Prestamo</a>
        </div>
            <form class="form-horizontal" action="formCliente2.php" method="POST">
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">DUI</label>
          <div class="col-md-4">
          <input id="dui" name="dui" placeholder="DUI" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="NIT">NIT</label>
          <div class="col-md-4">
          <input id="nit" name="nit" placeholder="Ingrese el NIT" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre">Nombres</label>
          <div class="col-md-5">
          <input id="nombres" name="nombres" placeholder="Ingrese nombres del cliente" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="apellidos">Apellidos</label>
          <div class="col-md-5">
          <input id="apellidos" name="apellidos" placeholder="Ingrese apellidos del cliente" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
          <div class="col-md-4">
          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="sexo">Sexo</label>
          <div class="col-md-4">
            <label class="radio-inline" for="sexo-0">
              <input name="sexo" id="sexo-0" value="M" checked="checked" type="radio">
              Masculino
            </label>
            <label class="radio-inline" for="sexo-1">
              <input name="sexo" id="sexo-1" value="F" type="radio">
              Femenino
            </label>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="direccion">Direccion</label>
          <div class="col-md-4">
            <textarea class="form-control" id="direccion" name="direccion" placeholder="Ingrese dirección del cliente"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Teléfono</label>
          <div class="col-md-4">
          <input id="telefono" name="telefono" placeholder="7000-0000" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="observaciones">Observaciones</label>
          <div class="col-md-4">
            <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="guardar_cliente"></label>
          <div class="col-md-4">
            <button id="guardarCliente" type="submit" name="guardarCliente" class="btn btn-primary">Guardar Cliente</button>
          </div>
        </div>
        </form>
    </body>
</html>
