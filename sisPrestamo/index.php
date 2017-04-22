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
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Sistema Prestamo</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                </ul>
            </div>
        </nav>
        <div class="w3-sidebar w3-bar-block" style="width:15%">
            <a href="#" class="w3-bar-item w3-button">Clientes</a>
            <a href="#" class="w3-bar-item w3-button">Pago</a>
            <a href="#" class="w3-bar-item w3-button">Prestamo</a>
        </div>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">Buscar Por Nombre: <input type="text" class="form-control" id="busqueda"></div>
                <div><button type="button" class="btn btn-primary">Nuevo Cliente</button></div>
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
