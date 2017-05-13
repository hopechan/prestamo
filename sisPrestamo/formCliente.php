 <?php  
//    require_once 'ControladorCliente.php';
//    require_once 'Cliente.php';
//    $c = new Cliente();
//    $cCliente = new ControladorCliente();
//        $c->setDui($_POST['dui']);
//        $c->setNit($_POST['nit']);
//        $c->setNombres($_POST['nombres']);
//        $c->setApellidos($_POST['apellidos']);
//        $c->setSexo($_POST['sexo']);
//        $c->setDireccion($_POST['direccion']);
//        $c->setTelefono($_POST['telefono']);
//        $c->setFecha_nacimiento($_POST['fecha_nacimiento']);
//        $c->setObservaciones($_POST['observaciones']);
//        $cCliente->agregar($c);               
//        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalle Prestamo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Nuevo Cliente</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">DUI</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" placeholder="DUI" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="NIT">NIT</label>  
          <div class="col-md-4">
          <input id="NIT" name="NIT" placeholder="Ingrese el NIT" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="nombre">Nombres</label>  
          <div class="col-md-5">
          <input id="nombre" name="nombre" placeholder="Ingrese nombres del cliente" class="form-control input-md" required="" type="text">

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
          <input id="fecha_nacimiento" name="fecha_nacimiento" placeholder="AAAA-MM-DD" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="sexo">Sexo</label>
          <div class="col-md-4"> 
            <label class="radio-inline" for="sexo-0">
              <input name="sexo" id="sexo-0" value="Masculino" checked="checked" type="radio">
              Masculino
            </label> 
            <label class="radio-inline" for="sexo-1">
              <input name="sexo" id="sexo-1" value="Femenino" type="radio">
              Femenino
            </label>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="direccion">Direccion</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="direccion" name="direccion">Ingrese direccion del cliente</textarea>
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
            <button id="guardar_cliente" name="guardar_cliente" class="btn btn-primary">Guardar Cliente</button>
          </div>
        </div>

        </fieldset>
        </form>
    </body> 
</html>

