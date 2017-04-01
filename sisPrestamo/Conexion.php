<?php

class Conexion extends PDO{
    private $database_type = 'mysql';
    private $host = 'localhost';
    private $database = 'prestamos';
    private $username = 'root';
    private $password = '1234';
    
    public function __construct(){
        try {
            parent::__construct($this->database_type.':host='.$this->host.';dbname='.$this->database, $this->username,$this->password);
                } catch (PDOException $e) {
            echo "Ha surgido un error y no se puede conectar a la base de datos.<br> Detalle: " . $e->getMessage();
            exit;
        }         
    }
  }
 

