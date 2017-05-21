<?php 
                require_once 'ControladorCliente.php';
                $cCliente = new ControladorCliente(); 

                $Cliente= $cCliente->obtener();

                $mensaje.= "<thead>";
        $mensaje.= "<tr>";
        $mensaje.= "<th>DUI</th>";
        $mensaje.= "<th>NIT</th>";
        $mensaje.= "<th>Nombres</th>";
        $mensaje.= "<th>Apellidos</th>";
        $mensaje.= "<th>Sexo</th>";
        $mensaje.= "<th>Dirección</th>";
        $mensaje.= "<th>Teléfono</th>";
        $mensaje.= "<th>Fecha de nacimiento</th>";
        $mensaje.= "<th>Opciones</th>";
        $mensaje.= "</tr>";
        $mensaje.= "</thead>";            
        $mensaje.= "<tbody>";

        $numClientes = count($Cliente);

                for ($i = 0; $i < $numClientes; $i++) {
                    $mensaje .= "<tr>";
                    $mensaje .= "<td>" . $Cliente[$i]->dui . "</td>";
                    $mensaje .= '<td>' . $Cliente[$i]->nit . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->nombres . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->apellidos . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->sexo . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->direccion . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->telefono . '</td>';
                    $mensaje .= '<td>' . $Cliente[$i]->fecha_nacimiento . '</td>';
                    $mensaje .= '<td>'.'<button data-toggle="modal" data-target="#view-modal" data-id="'.$Cliente[$i]->dui.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i></button>'
                    .'<button data-toggle="modal" data-target="#view-modal" data-id="'.$Cliente[$i]->dui.'"id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-remove"></i></button></tr>';
                    $mensaje .= '</tr>';
                }
    }

    $mensaje .= "</tbody>";
    echo $mensaje;