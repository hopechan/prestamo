<?php
require_once 'Conexion.php';

class ControladorCliente {
    const TABLA = 'cliente';

    public function agregar(Cliente $c){
       try {
       $con = new Conexion();
       $sql = $con->prepare('INSERT INTO '.self::TABLA . '(dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento,)'
              . 'VALUES(:dui, :nit, :nombres, :apellidos, :sexo, :direccion, :telefono, :fecha_nacimiento, :observaciones);');
       $sql->bindParam(':dui',$c->getDui());
       $sql->bindParam(':nit', $c->getNit());
       $sql->bindParam(':nombres', $c->getNombres());
       $sql->bindParam(':apellidos', $c->getApellidos());
       $sql->bindParam(':sexo', $c->getSexo());
       $sql->bindParam(':direccion', $c->getDireccion());
       $sql->bindParam(':telefono', $c->getTelefono());
       $sql->bindParam(':fecha_nacimiento', $c->getFecha_nacimiento());
       $sql->bindParam(':observaciones', $c->getObservaciones());
       $sql->execute();
       $con = null;
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }        
    }
    
    public function obtener(){
        try {          
            $con = new Conexion();
            $sql = $con->prepare('SELECT * FROM'.self::TABLA);
            $sql->execute();
            $ClienteSQL = $sql->fetchAll();
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
                    
                    $Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
            }      
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
        //Para mostrar la lista
        //<html><head></head>
        //<body>
        //<ul>
        //<?php foreach($cliente as $item):
        //<li><?php echo $item['dui].'-'......'-'[fecha_nacimiento]</li>
        //<?php endforeach;
        //</ul>
        //</body></html>
    }
       
    public function buscar($s){
        try {
            $scopy = $s;
            $length = strlen($scopy);
            for ($i = 1; $i < $length; $i++) {
                $s = $s . $scopy[$i];
            }
        
            if ($scopy[0] == 'd') {
                $con = new Conexion();
                $sql = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE dui = :dui;');
                $c = new Cliente();
                $sql->bindParam(':dui', $s);
                $sql->execute();
                $Cliente = $sql->fetch();
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
                    $Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
            }      
            }
       
       
            if ($scopy[0] == 'n') {
                $con = new Conexion();
                $sql = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE nit = :nit;');
                $c = new Cliente();
                $sql->bindParam(':nit', $s);
                $sql->execute();
                $Cliente = $sql->fetch();
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
                    
                    $Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
                }      
            }
       
            if ($scopy[0] == 'm') {
                $con = new Conexion();
                $sql = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE nombres = :nombres;');
                $c = new Cliente();
                $sql->bindParam(':nombres', $s);
                $sql->execute();
                $Cliente = $sql->fetch();
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
                    $Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
            }      
            }
       
            if ($scopy[0] == 'a') {
                $con = new Conexion();
                $sql = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                    .'WHERE apellidos = :apellidos;');
                $c = new Cliente();
                $sql->bindParam(':apellidos', $s);
                $sql->execute();
                $Cliente = $sql->fetch();
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
                    $Cliente[];
                    array_push($Cliente, $cliente);
                }
                return $Cliente;
            }else{
                return false;
            }      
            }
            
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
    
    public function eliminar(Cliente $c){
        try {
            $con = new Conexion();
            $sql = $con->prepare('DELETE FROM'.self::TABLA. 'WHERE dui=:dui;');
            $sql->bindParam(':dui', $s());
            $sql->execute();         
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    } 
}
