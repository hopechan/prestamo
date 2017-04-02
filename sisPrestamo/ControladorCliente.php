<?php
require_once 'Conexion.php';

class ControladorCliente {
    const TABLA = 'cliente';

    public function agregar(Cliente $c){
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
    }
    
    public function obtener(){
        $con = new Conexion();
        $sql = $con->prepare('SELECT * FROM'.self::TABLA);
        $sql->execute();
        $Cliente = $sql->fetchAll();
        if ($Cliente) {
            return $Cliente;
        }else{
            return false;
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
               return new self($Cliente['dui'],
                       $Cliente['nit'],
                       $Cliente['nombres'],
                       $Cliente['apellidos'],
                       $Cliente['sexo'],
                       $Cliente['direccion'],
                       $Cliente['telefono'],
                       $Cliente['fecha_nacimiento']);
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
               return new self($Cliente['dui'],
                       $Cliente['nit'],
                       $Cliente['nombres'],
                       $Cliente['apellidos'],
                       $Cliente['sexo'],
                       $Cliente['direccion'],
                       $Cliente['telefono'],
                       $Cliente['fecha_nacimiento']);
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
               return new self($Cliente['dui'],
                       $Cliente['nit'],
                       $Cliente['nombres'],
                       $Cliente['apellidos'],
                       $Cliente['sexo'],
                       $Cliente['direccion'],
                       $Cliente['telefono'],
                       $Cliente['fecha_nacimiento']);
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
               return new self($Cliente['dui'],
                       $Cliente['nit'],
                       $Cliente['nombres'],
                       $Cliente['apellidos'],
                       $Cliente['sexo'],
                       $Cliente['direccion'],
                       $Cliente['telefono'],
                       $Cliente['fecha_nacimiento']);
           }else{
               return false;
           }
       }
    }
    
    public function eliminar(Cliente $c){
        $con = new Conexion();
        $sql = $con->prepare('DELETE FROM'.self::TABLA. 'WHERE dui=:dui;');
        $sql->bindParam(':dui', $s());
        $sql->execute();
    }

    
}
