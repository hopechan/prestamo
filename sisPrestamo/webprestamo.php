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
    </head>
    <body id=body>
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
                <img src="assets/business-person-silhouette-wearing-tie.png" id="persona">
                <h4 id="tituloCliente">Clientes</h4>
                <div class="panel-body"><input type="text" class="form-control" id="busqueda" placeholder="Buscar por nombre"></div>
                <div><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modelo"><span class="glyphicon glyphicon-edit"></span> Nuevo Prestamo</button></div>
            </div>
        </div>
        <div class="modal fade" id="modelo" role="document">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nuevo Prestamo</h4>
                    </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                        <label for="listaClientes">Clientes</label>
                        <select class="form-control" id="listaClientes">
                            <option>Cliente</option>
                            <option>Cliente</option>
                            <option>Cliente</option>
                            <option>Cliente</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="monto">Monto</label>
                            <input type="text" class="form-control" id="monto" placeholder="0.00">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Numero de Cuotas</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Numero cuotas">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de inicio</label>
                            <input type="text" class="form-control" id="fecha" placeholder="Fecha de inicio">
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor cuotas</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="0.00" disabled>
                        </div>
                        <div class="form-group">
                            <label for="fechaFin">Fecha Finalizacion</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="Fecha Fin" disabled>
                        </div>
                        <div class="form-group">
                            <label for="capitalizacion">Capitalizacion</label>
                            <input type="text" class="form-control" id="disabledTextInput" placeholder="Mensual" disabled>
                        </div>
                    </form>
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="calcular"><span class="glyphicon glyphicon-plus"></span>Calcular Valores</button>
                    <button type="button" class="btn btn-primary" id="guardar"><span class="glyphicon glyphicon-save"></span>Guardar</button>
                </div>  
                </div>
            </div>   
        </div>    
    </body>
</html>
