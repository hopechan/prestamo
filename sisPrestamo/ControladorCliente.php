<?php
require_once 'Conexion.php';

class ControladorCliente {
    const TABLA = 'cliente';

    public function agregar($dui, $nit, $nombres, $apellidos, $sexo, $direccion, $telefono, $fecha_nacimiento, $observaciones){
       $con = new Conexion();
       $con = $con->prepare('INSERT INTO '.self::TABLA . '(dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento,)'
               . 'VALUES(:dui, :nit, :nombres, :apellidos, :sexo, :direccion, :telefono, :fecha_nacimiento, :observaciones)');
       $con->bindParam(':dui',$this->dui);
       $con->bindParam(':nit', $this->nit);
       $con->bindParam(':nombres', $this->nombres);
       $con->bindParam(':apellidos', $this->apellidos);
       $con->bindParam(':sexo', $this->sexo);
       $con->bindParam(':direccion', $this->direccion);
       $con->bindParam(':telefono', $this->telefono);
       $con->bindParam(':fecha_nacimiento', $this->fecha_nacimiento);
       $con->bindParam(':observaciones', $this->observaciones);
       $con->execute();
       $con = null;
    }
    
    public function obtener(){
        $con = new Conexion();
        $con = $con->prepare('SELECT * FROM'.self::TABLA);
        $con = $con->execute();
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
           $con = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE dui = :dui');
           $con->bindParam(':dui', $this->dui);
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
           $con = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE nit = :nit');
           $con->bindParam(':nit', $this->nit);
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
           $con = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE nombres = :nombres');
           $con->bindParam(':nombres', $this->nombres);
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
           $con = $con->prepare('SELECT dui, nit, nombres, apellidos, sexo, direccion, telefono, fecha_nacimiento FROM'.self::TABLA
                   .'WHERE apellidos = :apellidos');
           $con->bindParam(':apellidos', $this->apellidos);
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
    
    public function eliminar($dui, $nit, $nombres, $apellidos, $sexo, $direccion, $telefono, $fecha_nacimiento, $observaciones){
        $con = new Conexion();
        $con = $con->prepare('DELETE FROM'.self::TABLA. 'WHERE dui=:dui');
        $con = $con->bindParam(':dui', $this->dui);
        $con->execute();
    }
}
