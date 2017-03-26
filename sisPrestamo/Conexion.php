<?php

class Conexion {
  private $conexion; 
  private $total_consultas;
  
  //mysql_close($this->conexion)
  //falta insertar, borrar, modificar :v
  public function MySQL(){ 
    if(!isset($this->conexion)){
      $this->conexion = (mysqli_connect("localhost","root","1234"))
        or die(mysqli_error());
     mysqli_select_db("prestamos",$this->conexion) or die(mysqli_error());
    }
  }
  
  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = mysqli_query($consulta,$this->conexion);
    if(!$resultado){ 
      echo 'MySQL Error: ' . mysqli_error();
      exit;
    }
    return $resultado;
  }
  
  //Falta insert y modificar
  
  public function fetch_array($consulta){
   return mysqli_fetch_array($consulta);
  }
  
  public function num_rows($consulta){
   return mysqli_num_rows($consulta);
  }
  
  public function getTotalConsultas(){
   return $this->total_consultas; 
  }

  
  }
 

