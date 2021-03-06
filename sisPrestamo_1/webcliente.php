<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Prestamo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--<link rel="stylesheet" href="bootstrap-table.css">-->
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
            <a href="prueba.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt"></span> Pruebas :v</a>
        </div>
        <div class="container">
            <div class="panel panel-default">
                <img src="assets/business-person-silhouette-wearing-tie.png" id="persona">
                <h4 id="tituloCliente">Clientes</h4>
                <div class="panel-body"><input type="text" class="form-control" id="busqueda" placeholder="Buscar por nombre"></div>
                <div><button type="button" class="btn btn-default" id="abrir"><span class="glyphicon glyphicon-edit"></span> Nuevo Cliente</button></div>
            </div>
        </div>
        <div class="modal fade" id="modelo" role="document">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nuevo Cliente</h4>
                    </div>
                <div class="modal-body">
                    <form method="post" id="registroPrestamo">
                        <div class="form-group">                           
                            <input type="text" class="form-control" id="DUI" name="DUI" placeholder="Ingrese DUI">
                        </div>
                        <div class="form-group">                            
                            <input type="text" class="form-control" id="NIT" name="NIT" placeholder="Ingrese NIT">
                        </div>
                        <div class="form-group">                         
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombres">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos">
                        </div>
                        <div class="form-group">
                            <label class="radio-inline"><input type="radio" name="optradio">Masculino</label>   
                            <label class="radio-inline"><input type="radio" name="optradio">Femenino</label>
                        </div>
                        <div class="form-group">                           
                            <textarea class="form-control" rows="5" id="direccion" name="direccion" placeholder="Direccion"></textarea>
                        </div>
                        <div class="form-group">                       
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese numero de telefono">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingrese fecha">
                            <button type="button" class="btn btn-primary" id="calendario"><span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                        <div class="form-group">   
                            <textarea class="form-control" rows="5" id="observaciones" name="observaciones" placeholder="Observaciones"></textarea>
                        </div>                        
                    </form>              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="guardar"><span class="glyphicon glyphicon-save"></span>Guardar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="cerrar"><span class="glyphicon glyphicon-remove"></span>Cerrar</button> 
                </div>    
                </div>
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
            <tbody>
                <?php
                require_once 'ControladorCliente.php';
                $c = new ControladorCliente();
                $clientes = $c->obtener();
                ?>
            </tbody>
        </table>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="funciones.js"></script>
    </body>
</html>