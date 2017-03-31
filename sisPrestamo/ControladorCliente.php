<?php
require_once 'Conexion.php';

class ControladorCliente {
    const TABLA = 'cliente';

    public function agregar(Cliente $c){
       $con = new Conexion();
       $con->prepare('INSERT INTO '.self::TABLA . '(dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento,)'
              . 'VALUES(:dui, :nit, :nombres, :apellidos, :sexo, :direccion, :telefono, :fecha_nacimiento, :observaciones);');
       $con->bindParam(':dui',$c->getDui());
       $con->bindParam(':nit', $c->getNit());
       $con->bindParam(':nombres', $c->getNombres());
       $con->bindParam(':apellidos', $c->getApellidos());
       $con->bindParam(':sexo', $c->getSexo());
       $con->bindParam(':direccion', $c->getDireccion());
       $con->bindParam(':telefono', $c->getTelefono());
       $con->bindParam(':fecha_nacimiento', $c->getFecha_nacimiento());
       $con->bindParam(':observaciones', $c->getObservaciones());
       $con->execute();
       $con = null;
    }
    
    public function obtener(){
        $con = new Conexion();
        $con->prepare('SELECT * FROM'.self::TABLA);
        $con->execute();
        $Cliente = $con->fetchAll();
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
       
    public function buscar($parametro){
       if ($parametro == 'dui') {
           $con = new Conexion();
           $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE dui = :dui;');
           $c = new Cliente();
           $con->bindParam(':dui', $c->getDui());
           $con->execute();
           $Cliente = $con->fetch();
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
       
       
       if ($parametro == 'nit') {
           $con = new Conexion();
           $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE nit = :nit;');
           $c = new Cliente();
           $con->bindParam(':nit', $c->getNit());
           $con->execute();
           $Cliente = $con->fetch();
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
       
       if ($parametro == 'nombres') {
           $con = new Conexion();
           $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE nombres = :nombres;');
           $c = new Cliente();
           $con->bindParam(':nombres', $c->getNombres());
           $con->execute();
           $Cliente = $con->fetch();
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
       
       if ($parametro == 'apellidos') {
           $con = new Conexion();
           $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE apellidos = :apellidos;');
           $c = new Cliente();
           $con->bindParam(':apellidos', $c->getApellidos());
           $con->execute();
           $Cliente = $con->fetch();
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
        $con->prepare('DELETE FROM'.self::TABLA. 'WHERE dui=:dui;');
        $con->bindParam(':dui', $c->getDui());
        $con->execute();
    }
}
