<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Préstamos V1</title>
        <link rel="stylesheet" href="css/bootstrap.css">
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
            <a href="webprestamo.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt"></span> Prestamos</a>
        </div> 
        <div class="container">
            <div class="panel panel-default">
                <h4 id="tituloCliente">Clientes</h4>
                <div class="panel-body">
                    <form action="webclientebusqueda.php" method="POST">
                        <input type="text" class="form-control" id="busqueda" name="busqueda">
                        <input type="submit" value="Buscar"">
                    </form>
                </div>
                <a href="formCliente.php" class="btn btn-default">Nuevo cliente</a>
            </div>
        </div>       
        <table class="table table-bordered">             
            <thead>
                <tr>
                <th>DUI</th>
                <th>NIT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
                <th>Opciones</th>
                </tr>
            </thead>            
            <tbody>
            <?php 
                require_once 'ControladorCliente.php';
                $cCliente = new ControladorCliente(); 

                $s = $_POST["busqueda"];

                $Cliente= $cCliente->buscar($s);

                $numClientes = count($Cliente);

                for ($i = 0; $i < $numClientes; $i++) {
	               	echo "<tr>";
	                echo "<td>" . $Cliente[$i]->dui . "</td>";
	                echo '<td>' . $Cliente[$i]->nit . '</td>';
	                echo '<td>' . $Cliente[$i]->nombres . '</td>';
	                echo '<td>' . $Cliente[$i]->apellidos . '</td>';
	                echo '<td>' . $Cliente[$i]->sexo . '</td>';
	                echo '<td>' . $Cliente[$i]->direccion . '</td>';
	                echo '<td>' . $Cliente[$i]->telefono . '</td>';
	                echo '<td>' . $Cliente[$i]->fecha_nacimiento . '</td>';
	                echo '<td>'.'<button data-toggle="modal" data-target="#view-modal" data-id="'.$Cliente[$i]->dui.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>'
	                .'<button data-toggle="modal" data-target="#view-modal" data-id="'.$Cliente[$i]->dui.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-remove"></i></button></tr>';
	                echo '</tr>';
                }
            ?>
            </tbody>
        </table>    
    </body>
</html>