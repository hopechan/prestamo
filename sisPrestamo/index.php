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
            <a href="#" class="w3-bar-item w3-button">Clientes</a>
            <a href="#" class="w3-bar-item w3-button">Pago</a>
            <a href="#" class="w3-bar-item w3-button">Prestamo</a>
        </div>
        <div class="container">
            <div class="panel panel-default">
                <img src="assets/business-person-silhouette-wearing-tie.png" id="persona">
                <p id="tituloCliente">Clientes</p>
                <div class="panel-body"><input type="text" class="form-control" id="busqueda" placeholder="Buscar por nombre"></div>
                <div><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modelo"><span class="glyphicon glyphicon-edit"></span> Nuevo Cliente</button></div>
            </div>
        </div>
        <div class="modal fade" id="modelo" role="document">
            <div class="modal-dialog">
                <!-- Modal content-->
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
                        </div>
                        <div class="form-group">   
                            <textarea class="form-control" rows="5" id="observaciones" placeholder="Observaciones"></textarea>
                        </div> 
                        
                    </form>              
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="guardar"><span class="glyphicon glyphicon-save"></span>Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar"><span class="glyphicon glyphicon-remove"></span>Close</button> 
                </div>    
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>DUI</th>
                    <th>NIT</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Fecha de<br>nacimiento</th>
                    <th>Direccion</th>
                    <th>Telefonos</th>
                    <th></th>
                </tr>
            </thead>
        <tbody>
      <tr>
        <td>1111111</td>
        <td>111111111</td>
        <td>Esperanza Elizabeth</td>
        <td>Dueñas Acosta</td>
        <td>F</td>
        <td>08/10/1994</td>
        <td>Col.San Jose calle el foco</td>
        <td>79798761</td>
        <td><button>X</button><button>0</button></td>
      </tr>
      <tr>
        <td>1111111</td>
        <td>111111111</td>
        <td>Esperanza Elizabeth</td>
        <td>Dueñas Acosta</td>
        <td>F</td>
        <td>08/10/1994</td>
        <td>Col.San Jose calle el foco</td>
        <td>79798761</td>
        <td><button>X</button><button>0</button></td>
      </tr>
    </tbody>
  </table>
  </div>
    </body>
</html>
