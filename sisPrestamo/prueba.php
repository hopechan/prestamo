<?php

require 'Conexion.php';
//clase para hacer pruebas de conexion :v 
class prueba {
public function conectar() {
    header("Content-Type: application/json; charset=UTF-8");
    $con = new Conexion();
    $con->conectar();
    $SQL = 'SELECT id_prestamo, dui, monto, valor_cuota, tasa_interes, cantidad_cuotas,'
                    . 'fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones FROM prestamo;';
    $stmt = $con->prepare($SQL);
    $stmt->execute();
    $prestamos = array();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        $prestamos['todos'][] = $row;
    }
    echo json_encode($prestamos);  
   } 
}  


