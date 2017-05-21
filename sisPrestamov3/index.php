 <?php
require_once 'ControladorPrestamo.php';

$cPrestamo = new ControladorPrestamo();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prestamo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/w3.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body id="body">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistema Prestamo</a>
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
            <div class="panel panel-default">
                <h4 id="tituloCliente">Bienvenido</h4>
                <div class="panel-body"><input type="text" class="form-control" id="busqueda" placeholder="Buscar por nombre"></div>
                <div><a href="formPrestamo.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Nuevo Prestamo</button></a></div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>DUI</th>
                <th>Nombres</th>
                <th>Monto</th>
                <th>Saldo</th>
                <th>Cuotas</th>
                <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
               <?php $cPrestamo->obtenerActivos(); ?>
            </tbody>
        </table>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/funciones.js"></script>

    </body>
</html>
