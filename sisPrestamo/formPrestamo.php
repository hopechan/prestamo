 <?php
//require_once 'ControladorPrestamo.php';
//require_once 'Prestamo.php';
//$p = new Prestamo();
//$cPrestamo = new ControladorPrestamo();
// if(isset($_POST["guardar"])){
//     $p->setCliente($_POST['cliente']);
//     $p->setMonto($_POST['monto']);
//     $p->setCantidad_cuotas($_POST['num_cuotas']);
//     $p->setFecha_inicio($_POST['fecha_inicio']);
//     $p->setValor_cuota($_POST['valor_cuota']);
//     $p->setFecha_fin($_POST['fecha_fin']);
//     $cPrestamo->agregar($p);
// }
?>
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
                <legend>Nuevo Prestamo</legend>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Clientes</label>
                  <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                    </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="monto">Monto</label>  
                  <div class="col-md-4">
                  <input id="monto" name="monto" placeholder="Ingrese el monto del prestamo" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="num_cuotas">Numero de Cuotas</label>  
                  <div class="col-md-1">
                  <input id="num_cuotas" name="num_cuotas" placeholder="Ingrese el numero de cuotas " class="form-control input-md" required="" type="text">

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
                  <div class="col-md-4">
                  <input id="interes" name="interes" placeholder="15%" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="valor_cuota">Valor de cuota</label>  
                  <div class="col-md-4">
                  <input id="valor_cuota" name="valor_cuota" placeholder="0.00" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fecha_finalizacion">Fecha de finalizacion</label>  
                  <div class="col-md-4">
                  <input id="fecha_finalizacion" name="fecha_finalizacion" placeholder="AAAA-MM-DD" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="capitalizacion">Capitalizacion</label>  
                  <div class="col-md-4">
                  <input id="capitalizacion" name="capitalizacion" placeholder="Mensual" class="form-control input-md" required="" type="text">

                  </div>
                </div>
                <div class="form-group">
              <label class="col-md-4 control-label" for="calcular">Opciones</label>
              <div class="col-md-8">
                <button id="calcular" name="calcular" class="btn btn-primary">Calcular</button>
                <button id="guardarPrestamo" name="guardarPrestamo" class="btn btn-primary">Guardar Prestamo</button>
              </div>
            </div>
                </fieldset>
        </form>
        </body> 
</html>



