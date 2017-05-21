<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prestamo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="funciones.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
 
        $("#btn-view").hide();
 
        $("#btn-add").click(function(){
        $(".content-loader").fadeOut('slow', function()
        {
            $(".content-loader").fadeIn('slow');
            $(".content-loader").load('ControladorPrestamo.php');
            $("#btn-add").hide();
            $("#btn-view").show();
            });
        });
 
       $("#btn-view").click(function(){
  
  $("body").fadeOut('slow', function()
  {
   $("body").load('index.php');
   $("body").fadeIn('slow');
   window.location.href="index.php";
  });
 });
 
});
</script>
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
                <!--<div><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modelo"><span class="glyphicon glyphicon-edit"></span> Nuevo Prestamo</button></div>-->
                <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Employee</button>
                <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Employee</button>
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
                <?php
                require_once 'ControladorPrestamo.php';
                $p = new ControladorPrestamo();
                $prestamos = $p->obtenerActivos();        
                ?>
            </tbody>
        </table>    
    </body>
</html>