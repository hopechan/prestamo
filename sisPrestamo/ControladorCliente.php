<?php
require_once 'Conexion.php';
require 'Cliente.php';

class ControladorCliente {
    const TABLA = 'cliente';

    public function agregar(Cliente $c){
       try {   
       $con = new Conexion();
       $stmn = $con->prepare('INSERT INTO '.self::TABLA . '(dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento,)'
              . 'VALUES(:dui, :nit, :nombres, :apellidos, :sexo, :direccion, :telefono, :fecha_nacimiento, :observaciones);');
       $stmn->bindParam(':dui',$c->getDui());
       $stmn->bindParam(':nit', $c->getNit());
       $stmn->bindParam(':nombres', $c->getNombres());
       $stmn->bindParam(':apellidos', $c->getApellidos());
       $stmn->bindParam(':sexo', $c->getSexo());
       $stmn->bindParam(':direccion', $c->getDireccion());
       $stmn->bindParam(':telefono', $c->getTelefono());
       $stmn->bindParam(':fecha_nacimiento', $c->getFecha_nacimiento());
       $stmn->bindParam(':observaciones', $c->getObservaciones());
       $stmn>execute();
       $con = null;
       throw new ErrorPrestamo($titulo, $ubicacion, $mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }        
    }
    
    public function obtener(){
        try {          
            $con = new Conexion();
            $stmn = $con->prepare('SELECT dui, nit, nombres, apellidos,sexo,direccion,telefonos,fecha_nacimiento,observaciones from cliente;');
            $stmn->execute();
            $ClienteJson = array();
            $ClienteJson = $stmn->fetchAll(PDO::FETCH_ASSOC);
            if ($ClienteJson) {
                    $cliente = json_encode($ClienteJson); 
                return $cliente;
            }else{
                return false;
            }
            throw new ErrorPrestamo($titulo, $ubicacion, $mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
       
    public function buscar($s){
        $c = new Cliente();
        try {
            $scopy = $s;
            $length = strlen($scopy);
            for ($i = 1; $i < $length; $i++) {
                $s = $s . $scopy[$i];
            }
            if ($scopy[0] == 'd') {
                $con = new Conexion();
                $stmn = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE dui = :dui;');
                $stmn->bindParam(':dui', $s);
                $stmn->execute();
                $Cliente = $stmn->fetch();
                if ($Cliente) {
                $Cliente_length = count($Cliente);
                for($i=0; $i < $Cliente_length; $i++) {
                    $cliente = new Cliente();
                    $cliente->setDui($Cliente[$i]['dui']);
                    $cliente->setNit($Cliente[$i]['nit']);
                    $cliente->setNombres($Cliente[$i]['nombres']);
                    $cliente->setApellidos($Cliente[$i]['apellidos']);
                    $cliente->setSexo($Cliente[$i]['sexo']);
                    $cliente->setDireccion($Cliente[$i]['direccion']);
                    $cliente->setTelefono($Cliente[$i]['telefono']);
                    $cliente->setFecha_nacimiento($Cliente[$i]['fecha_nacimiento']);
                    $cliente->setObservaciones($Cliente[$i]['observaciones']);
                    //$Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
                }      
            }
       
            if ($scopy[0] == 'n') {
                $con = new Conexion();
                $stmn = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE nit = :nit;');
                $stmn->bindParam(':nit', $s);
                $stmn->execute();
                $ClienteJson = $stmn->fetch();
                if ($Cliente) {
                $Cliente_length = count($Cliente);
                for($i=0; $i < $Cliente_length; $i++) {
                    $cliente = new Cliente();
                    $cliente->setDui($Cliente[$i]['dui']);
                    $cliente->setNit($Cliente[$i]['nit']);
                    $cliente->setNombres($Cliente[$i]['nombres']);
                    $cliente->setApellidos($Cliente[$i]['apellidos']);
                    $cliente->setSexo($Cliente[$i]['sexo']);
                    $cliente->setDireccion($Cliente[$i]['direccion']);
                    $cliente->setTelefono($Cliente[$i]['telefono']);
                    $cliente->setFecha_nacimiento($Cliente[$i]['fecha_nacimiento']);
                    $cliente->setObservaciones($Cliente[$i]['observaciones']);
                    
                    //$Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
                }      
            }
       
            if ($scopy[0] == 'm') {
                $con = new Conexion();
                $stmn = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE nombres = :nombres;');
                $stmn->bindParam(':nombres', $s);
                $stmn->execute();
                $Cliente = $stmn->fetch();
                if ($Cliente) {
                $Cliente_length = count($Cliente);
                for($i=0; $i < $Cliente_length; $i++) {
                    $cliente = new Cliente();
                    $cliente->setDui($Cliente[$i]['dui']);
                    $cliente->setNit($Cliente[$i]['nit']);
                    $cliente->setNombres($Cliente[$i]['nombres']);
                    $cliente->setApellidos($Cliente[$i]['apellidos']);
                    $cliente->setSexo($Cliente[$i]['sexo']);
                    $cliente->setDireccion($Cliente[$i]['direccion']);
                    $cliente->setTelefono($Cliente[$i]['telefono']);
                    $cliente->setFecha_nacimiento($Cliente[$i]['fecha_nacimiento']);
                    $cliente->setObservaciones($Cliente[$i]['observaciones']);
                    //$Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
                }      
            }
       
            if ($scopy[0] == 'a') {
                $con = new Conexion();
                $stmn = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE apellidos = :apellidos;');
                $stmn->bindParam(':apellidos', $s);
                $stmn->execute();
                $Cliente = $stmn->fetch();
                if ($Cliente) {
                $Cliente_length = count($Cliente);
                for($i=0; $i < $Cliente_length; $i++) {
                    $cliente = new Cliente();
                    $cliente->setDui($Cliente[$i]['dui']);
                    $cliente->setNit($Cliente[$i]['nit']);
                    $cliente->setNombres($Cliente[$i]['nombres']);
                    $cliente->setApellidos($Cliente[$i]['apellidos']);
                    $cliente->setSexo($Cliente[$i]['sexo']);
                    $cliente->setDireccion($Cliente[$i]['direccion']);
                    $cliente->setTelefono($Cliente[$i]['telefono']);
                    $cliente->setFecha_nacimiento($Cliente[$i]['fecha_nacimiento']);
                    $cliente->setObservaciones($Cliente[$i]['observaciones']);
                    //$Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
                }      
            }
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);        
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
    
    public function eliminar(Cliente $c){
        try {
            $con = new Conexion();
            $stmn = $con->prepare('DELETE FROM'.self::TABLA. 'WHERE dui=:dui;');
            $stmn->bindParam(':dui', $s());
            $stmn->execute();   
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    } 
}
