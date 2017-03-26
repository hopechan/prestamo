<?php

class Conexion extends PDO{
//  private $conexion; 
//  private $total_consultas;
//  
//  //mysql_close($this->conexion)
//  //falta insertar, borrar, modificar :v
//  public function MySQL(){ 
//    if(!isset($this->conexion)){
//      $this->conexion = (mysqli_connect("localhost","root","1234"))
//        or die(mysqli_error());
//     mysqli_select_db("prestamos",$this->conexion) or die(mysqli_error());
//    }
//  }
//  
//  public function consulta($consulta){ 
//    $this->total_consultas++; 
//    $resultado = mysqli_query($consulta,$this->conexion);
//    if(!$resultado){ 
//      echo 'MySQL Error: ' . mysqli_error();
//      exit;
//    }
//    return $resultado;
//  }
//  
//  //Falta insert y modificar
//  
//  public function fetch_array($consulta){
//   return mysqli_fetch_array($consulta);
//  }
//  
//  public function num_rows($consulta){
//   return mysqli_num_rows($consulta);
//  }
//  
//  public function getTotalConsultas(){
//   return $this->total_consultas; 
//  }
 
    private $tipo_de_base = 'mysql';
    private $host = 'localhost';
    private $nombre_BD = 'prestamos';
    private $usuario = 'root';
    private $pass = '1234';
    
    public function __construct(){
        try {
            parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_BD, $this->usuario,$this->pass);
                } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }         
    }
    
  
  }
 

