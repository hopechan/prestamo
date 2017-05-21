
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Prestamo</title>
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
                <h4 id="tituloCliente">Prestamos</h4>
                <div class="panel-body"><input type="text" class="form-control" id="busqueda" placeholder="Buscar por nombre"></div>
                <div><a href="formPrestamo.php"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Nuevo Prestamo</button></a></div>
            </div>
        <table class="table table-condensed">
            <thead>
              <tr>
              <th>ID</th>
              <th>DUI</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Monto</th>
              <th>Saldo</th>
              <th>Cuotas</th>
              <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once 'ControladorPrestamo.php';
              $cPrestamo = new ControladorPrestamo();
              $prestamos = $cPrestamo->obtenerActivos();
              $numPrestamos = count($prestamos);
              for ($i=0; $i <$numPrestamos ; $i++) {
                echo "<tr>";
                   echo "<td>" . $prestamos[$i]->id_prestamo. "</td>";
                   echo '<td>' . $prestamos[$i]->dui . '</td>';
                   echo '<td>' . $prestamos[$i]->nombres . '</td>';
                   echo '<td>' . $prestamos[$i]->apellidos . '</td>';
                   echo '<td>' . $prestamos[$i]->monto. '</td>';
                   echo '<td>' . $prestamos[$i]->saldo . '</td>';
                   echo '<td>' . $prestamos[$i]->cantidad_cuotas . '</td>';
                   echo '<td>'.'<button data-toggle="modal" data-target="#view-modal" data-id="'.$prestamos[$i]->id_prestamo.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>'
                   .'<button data-toggle="modal" data-target="#view-modal" data-id="'.$prestamos[$i]->id_prestamo.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-remove"></i></button></tr>';
                   echo '</tr>';
              }
               ?>
            </tbody>
        </table>
    </body>
</html>
