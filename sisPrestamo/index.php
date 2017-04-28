<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Prestamo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <div><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modelo"><span class="glyphicon glyphicon-edit"></span> Nuevo Cliente</button></div>
            </div>
        </div>
        <div class="modal fade" id="modelo" role="document">
            <div class="modal-dialog">
                 Modal content
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nuevo Cliente</h4>
                    </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">                           
                            <input type="text" class="form-control" id="DUI" placeholder="Ingrese DUI">
                        </div>
                        <div class="form-group">                            
                            <input type="text" class="form-control" id="NIT" placeholder="Ingrese NIT">
                        </div>
                        <div class="form-group">                         
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombres">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos">
                        </div>
                        <div class="form-group">
                            <label class="radio-inline"><input type="radio" name="optradio">Masculino</label>   
                            <label class="radio-inline"><input type="radio" name="optradio">Femenino</label>
                        </div>
                        <div class="form-group">                           
                            <textarea class="form-control" rows="5" id="direccion" placeholder="Direccion"></textarea>
                        </div>
                        <div class="form-group">                       
                            <input type="text" class="form-control" id="telefono" placeholder="Ingrese numero de telefono">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fecha" placeholder="Ingrese fecha">
                            <label>Abrir Calendario</label>
                            <button type="button" class="btn btn-primary" id="calendario"><span class="glyphicon glyphicon-calendar"></span></button>
                        </div>
                        <div class="form-group">   
                            <textarea class="form-control" rows="5" id="observaciones" placeholder="Observaciones"></textarea>
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
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>Clientes</tr>
                <tr id="titulo">
                    <th>N de Prestamos</th>
                    <th>DUI</th>
                    <th>Monto</th>
                    <th>Valor</th>
                    <th>tasa</th>
                    <th>cuotas</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Fecha Ultimo</th>
                    <th>Saldo</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th>Opciones</th>
                </tr>
            </thead>
        <tbody>
      <tr>
        <?php
        include 'ControladorPrestamo.php';
        $objPrestamos = new ControladorPrestamo();
        $p = $objPrestamos->obtener();
        while ($row = mysql_fetch_row($p)){     
        echo "<td>$row[1]></td>";  
        echo "<td>$row[2]</td>";  
        echo "<td>$row[3]</td>";  
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";  
        echo "<td>$row[7]</td>";  
        echo "<td>$row[8]</td>";  
        echo "<td>$row[9]</td>";  
        echo "<td>$row[10]</td>";  
        echo "<td>$row[11]</td>";  
        echo "<td>$row[12]</td>";    
        }  
        ?>
        <td><button type="button" class="btn btn-primary" id="info"><span class="glyphicon glyphicon-info-sign"></span></button> <button type="button" class="btn btn-primary" id="borrar"><span class="glyphicon glyphicon-remove-sign"></span></button></td>
      </tr>
    </tbody>
  </table>
    </body>
</html>
