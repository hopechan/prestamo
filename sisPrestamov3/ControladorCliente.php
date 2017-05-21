<?php
require_once 'Conexion.php';
require_once 'Cliente.php';

class ControladorCliente {
    public function agregar(Cliente $c){
       try {
       $conn = new Conexion();
       $dui = $c->getDui();
       $nit = $c->getNit();
       $nombres = $c->getNombres();
       $apellidos = $c->getApellidos();
       $sexo = $c->getSexo();
       $direccion = $c->getDireccion();
       $telefono = $c->getTelefono();
       $fecha_nacimiento = $c->getFecha_nacimiento();
       $observaciones = $c->getObservaciones();
       $stmn = "INSERT INTO  cliente(dui, nit, nombres, apellidos, sexo, direccion, telefonos, fecha_nacimiento, observaciones) values('" . $dui . "', '" . $nit . "', '" . $nombres . "', '" . $apellidos . "', '" . $sexo . "', '" . $direccion . "', '" . $telefono . "', '" . $fecha_nacimiento . "', '" . $observaciones . "')";
       $conn->execQuery($stmn);
        } catch (ErrorPrestamo $e) {
          echo $e->nuevo();
        }
    }

    public function obtener(){
        try {
            $conn = new Conexion();
            $stmn = "SELECT * from cliente";
            $resultado = $conn->execQueryO($stmn);
            $Cliente = array();
            while ($cliente = $resultado->fetch_assoc()) {
                //Se crea y llena un objeto cliente ($c) con los datos correspondientes
                $c = new Cliente();
                $c->setDui($cliente['dui']);
                $c->setNit($cliente['nit']);
                $c->setNombres($cliente['nombres']);
                $c->setApellidos($cliente['apellidos']);
                $c->setSexo($cliente['sexo']);
                $c->setDireccion($cliente['direccion']);
                $c->setTelefono($cliente['telefonos']);
                $c->setFecha_nacimiento($cliente['fecha_nacimiento']);
                $c->setObservaciones($cliente['observaciones']);
                //Se añade el objeto cliente ($c) a la colección de objetos cliente
                array_push($Cliente, $c);
            }

            //Se cierra la conexión
            $conn = null;

            return $Cliente;
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }

    public function buscar($s){
            try {
                $scopy = $s;
                $s = "";
                $length = strlen($scopy);

                $conn = new Conexion();

                for ($i = 1; $i < $length; $i++) {
                    $s = $s . $scopy[$i];
                }

                if ($scopy[0] == 'd') {
                    $stmn = "SELECT * FROM cliente WHERE dui LIKE '%" . $s . "%'";
                    $resultado = $conn->execQueryO($stmn);
                    $Cliente = array();

                    while ($cliente = $resultado->fetch_assoc()) {
                        //Se crea y llena un objeto cliente ($c) con los datos correspondientes
                        $c = new Cliente();
                        $c->setDui($cliente['dui']);
                        $c->setNit($cliente['nit']);
                        $c->setNombres($cliente['nombres']);
                        $c->setApellidos($cliente['apellidos']);
                        $c->setSexo($cliente['sexo']);
                        $c->setDireccion($cliente['direccion']);
                        $c->setTelefono($cliente['telefonos']);
                        $c->setFecha_nacimiento($cliente['fecha_nacimiento']);
                        $c->setObservaciones($cliente['observaciones']);

                        //Se añade el objeto cliente ($c) a la colección de objetos cliente
                        array_push($Cliente, $c);
                    }
                    return $Cliente;
                } elseif($scopy[0] == 't') {
                    $stmn = "SELECT * FROM cliente WHERE nit LIKE '%" . $s . "%'";
                    $resultado = $conn->execQueryO($stmn);
                    $Cliente = array();

                    while ($cliente = $resultado->fetch_assoc()) {
                        //Se crea y llena un objeto cliente ($c) con los datos correspondientes
                        $c = new Cliente();
                        $c->setDui($cliente['dui']);
                        $c->setNit($cliente['nit']);
                        $c->setNombres($cliente['nombres']);
                        $c->setApellidos($cliente['apellidos']);
                        $c->setSexo($cliente['sexo']);
                        $c->setDireccion($cliente['direccion']);
                        $c->setTelefono($cliente['telefonos']);
                        $c->setFecha_nacimiento($cliente['fecha_nacimiento']);
                        $c->setObservaciones($cliente['observaciones']);

                        //Se añade el objeto cliente ($c) a la colección de objetos cliente
                        array_push($Cliente, $c);
                    }
                    return $Cliente;
                } elseif($scopy[0] == 'n') {
                    $stmn = "SELECT * FROM cliente WHERE nombres LIKE '%" . $s . "%'";
                    $resultado = $conn->execQueryO($stmn);
                    $Cliente = array();

                    while ($cliente = $resultado->fetch_assoc()) {
                        //Se crea y llena un objeto cliente ($c) con los datos correspondientes
                        $c = new Cliente();
                        $c->setDui($cliente['dui']);
                        $c->setNit($cliente['nit']);
                        $c->setNombres($cliente['nombres']);
                        $c->setApellidos($cliente['apellidos']);
                        $c->setSexo($cliente['sexo']);
                        $c->setDireccion($cliente['direccion']);
                        $c->setTelefono($cliente['telefonos']);
                        $c->setFecha_nacimiento($cliente['fecha_nacimiento']);
                        $c->setObservaciones($cliente['observaciones']);

                        //Se añade el objeto cliente ($c) a la colección de objetos cliente
                        array_push($Cliente, $c);
                    }
                    return $Cliente;
                } elseif($scopy[0] == "a") {
                    $stmn = "SELECT * FROM cliente WHERE apellidos LIKE '%" . $s . "%'";
                    $resultado = $conn->execQueryO($stmn);
                    $Cliente = array();

                    while ($cliente = $resultado->fetch_assoc()) {
                        //Se crea y llena un objeto cliente ($c) con los datos correspondientes
                        $c = new Cliente();
                        $c->setDui($cliente['dui']);
                        $c->setNit($cliente['nit']);
                        $c->setNombres($cliente['nombres']);
                        $c->setApellidos($cliente['apellidos']);
                        $c->setSexo($cliente['sexo']);
                        $c->setDireccion($cliente['direccion']);
                        $c->setTelefono($cliente['telefonos']);
                        $c->setFecha_nacimiento($cliente['fecha_nacimiento']);
                        $c->setObservaciones($cliente['observaciones']);

                        //Se añade el objeto cliente ($c) a la colección de objetos cliente
                        array_push($Cliente, $c);
                    }
                    return $Cliente;
                }
            } catch (ErrorPrestamo $e) {
                echo $e->nuevo();
            }
        }

    public function eliminar($dui){
        try {
            $conn = new Conexion();
            //$dui = $c->getDui();
            $stmn = "DELETE FROM cliente WHERE dui=".$dui;
            $conn->execQueryO($stmn);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }

    public function obtenerNombres() {
        try {
          $con = new Conexion();
          $stmn  = 'SELECT dui, nombres, apellidos from cliente';
          $resultado = execQuery($stmn);
          $nombres = array();
          while ($nombres=$stmn->fetch_assoc()) {
              $c = new Cliente();
              $c->setDui($nombres['dui']);
              $c->setNombres($nombres['nombres']);
              $c->setApellidos($apellidos['apellidos']);
              array_push($nombres, $c);
          }
          $con = null;
          return $nombres;
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
}
