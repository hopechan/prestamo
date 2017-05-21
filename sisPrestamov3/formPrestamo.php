<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Prestamo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/buscar.js"></script>
    </head>
    <body id=body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Nuevo Prestamo</a>
                </div>
            </div>
        </nav>
        <div class="w3-sidebar w3-bar-block" id="sidebar">
            <a href="index.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home"></span> Principal</a>
            <a href="webcliente.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-user"></span> Clientes</a>
            <a href="webpago.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-usd"></span> Pago</a>
            <a href="webprestamo.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt"></span> Prestamo</a>
        </div>
        <form class="form-horizontal" id="formuPrestamo" name="formuPrestamo">
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Clientes</label>
                  <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                      <option value="">|--Seleccione un cliente--|</option>
                  </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="monto">Monto</label>
                  <div class="col-md-1">
                  <input id="monto" name="monto" placeholder="1000" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="num_cuotas">Numero de Cuotas</label>
                  <div class="col-md-1">
                  <input id="num_cuotas" name="num_cuotas" placeholder="12" class="form-control input-md" required="" type="text">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fecha_inicio">Fecha de inicio</label>
                  <div class="col-md-4">
                  <input id="fecha_inicio" name="fecha_inicio" placeholder="AAAA-MM-DD" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="interes">Interes del prestamo</label>
                  <div class="col-md-1">
                  <input id="interes" name="interes" placeholder="15%" class="form-control input-md" required="" type="text">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="valor_cuota">Valor de cuota</label>
                  <div class="col-md-4">
                  <input id="valor_cuota" name="valor_cuota" placeholder="0.00" class="form-control input-md" required="" type="text" disabled="">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fecha_finalizacion">Fecha de finalizacion</label>
                  <div class="col-md-4">
                  <input id="fecha_finalizacion" name="fecha_finalizacion" placeholder="AAAA-MM-DD" class="form-control input-md" required="" type="text" disabled="">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="capitalizacion">Capitalizacion</label>
                  <div class="col-md-4">
                  <input id="capitalizacion" name="capitalizacion" placeholder="Mensual" class="form-control input-md" required="" type="text" disabled="">

                  </div>
                </div>
                <div class="form-group">
              <label class="col-md-4 control-label" for="calcular">Opciones</label>
              <div class="col-md-8">
                <button id="calcular" name="calcular" class="btn btn-primary" onclick="calcular()">Calcular</button>
                <a href="webprestamo.php"><button id="guardarPrestamo" type="submit" name="guardarPrestamo" class="btn btn-primary">Guardar Prestamo</button></a>
              </div>
            </div>
        </form>
        </body>
</html>
