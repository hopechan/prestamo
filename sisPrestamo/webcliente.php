<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prestamo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body id="body">
        <?php  
        require_once 'ControladorCliente.php';
        require_once 'Cliente.php';
        $c = new Cliente();
        $cCliente = new ControladorCliente();                
        ?>
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
                <a href="formCliente.php" class="btn btn-default">Nuevo Cliente</a>              
            </div>
        </div>       
        <table class="table table-bordered">             
            <thead>
                <tr>
                <th>DUI</th>
                <th>NT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Direccion</th>
                <th>Telefonos</th>
                <th>Fecha de nacimiento</th>
                <th>Observaciones</th>
                <th>Opciones</th>
                </tr>
            </thead>            
            <tbody><?php $clientes = $cCliente->obtener();?></tbody>
        </table>    
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>