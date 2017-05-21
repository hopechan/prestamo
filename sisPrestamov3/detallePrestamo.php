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
                    <a class="navbar-brand" href="#">Detalle Prestamo</a>
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
                <h4 id="tituloCliente">Prestamos</h4>
                <div class="panel panel-default" id="detalle">
                    <h4>Datos del cliente</h4>
                    <h5 id="Clientedui">DUI</h5>
                    <h5 id="Clientenombres">Nombres</h5>
                    <h5 id="Clienteapellidos">Apellidos</h5> 
                </div>
            </div>
        </div>
    </body>
</html>
