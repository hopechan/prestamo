<?php
class Conexion extends PDO{
    private $database_type = 'mysql';
    private $host = 'localhost';
    private $database = 'prestamos';
    private $username = 'root';
    private $password = '1234';
    
//    public function __construct(){
//        try {
//            parent::__construct($this->database_type.':host='.$this->host.';dbname='.$this->database, $this->username,$this->password);
//                } catch (PDOException $e) {
//            echo "Ha surgido un error y no se puede conectar a la base de datos.<br> Detalle: " . $e->getMessage();
//            exit;
//        }         
//    }
    public function conectar(){
        $conexion = null;
        $host = '127.0.0.1';
        $db = 'prestamos';
        $user = 'root';
        $pwd = '1234';
        try {
            $conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
        }
        catch (PDOException $e) {
        echo '<p>No se puede conectar a la base de datos !!</p>';
        exit;
        }
    return $conexion;
    }
  }
  
  
 

