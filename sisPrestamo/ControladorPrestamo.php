<?php
require 'Conexion.php';
require 'Prestamo.php';
//require 'ErrorPrestamo.php';
class ControladorPrestamo {
    const TABLA = 'prestamo';
    var $max = [];
    var $Prestamo = [];
   
    public function agregar(Prestamo $p){
        try {
            $con = new Conexion();
            $stm = $con->prepare('INSERT INTO '.self::TABLA . '(id_prestamo, cliente, monto, valor_cuota, tasa_interes, cantidad_cuotas, fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones, cuotas)'
                . 'VALUES(:id_prestamo, :cliente, :monto, :valor_cuota, :tasa_interes, :cantidad_cuotas, :fecha_inicio, :fecha_fin, :fecha_ultimo_pago, :saldo, :estado, :observaciones, :cuotas);');
            $stmn->bindParam(':id_prestamo',$p->getId_prestamo());
            $stmn->bindParam(':cliente', $p->getCliente());
            $stmn->bindParam(':monto', $p->getMonto());
            $stmn->bindParam(':valor_cuota', $p->getValor_cuota());
            $stmn->bindParam(':tasa_interes', $p->getTasa_interes());
            $stmn->bindParam(':cantidad_cuotas', $p->getCantidad_cuotas());
            $stmn->bindParam(':fecha_inicio', $p->getFecha_inicio());
            $stmn->bindParam(':fecha_fin', $p->getFecha_fin());
            $stmn->bindParam(':fecha_ultimo_pago', $p->getFecha_ultimo_pago());
            $stmn->bindParam(':saldo',$p->getSaldo());
            $stmn->bindParam(':estado',$p->getEstado());
            $stmn->bindParam(':observaciones',$p->getObservaciones());
            $stmn->bindParam(':cuotas',$p->getCuotas());
            $stmn->execute();
            $con = null;
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
    
    public function obtener(){
        try {
            $con = new Conexion();
            $stmn = $con->prepare('SELECT id_prestamo, dui, monto, valor_cuota, tasa_interes, cantidad_cuotas,fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones  FROM prestamo;');
            $stmn->execute();
            $prestamoJson= $stmn->fetchAll(PDO::FETCH_ASSOC); 
            if ($prestamoJson) {
                $todos = json_encode($prestamoJson, JSON_UNESCAPED_UNICODE);
                return $todos;
            }else{
                return false;
            }
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }  
    }
    //Necesita recibir un json :v
    public function modificar(Prestamo $p){
        try {
            $con = new Conexion();
            $stmn= $con->prepare('UPDATE'.self::TABLA.'SET monto=:monto, cuotas=:cuotas, WHERE id_prestamos=:id_prestamo;');
            $stmn->bindParam(':monto', $p->getMonto());
            $stmn->bindParam(':cuotas', $p->getCuotas());
            $stmn->bindParam(':id_prestamo', $p->getId_prestamo());
            $stmn->execute();
            $con = null;
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }    
    }
    
    public function obtenerIdPrestamo(){
        try {
            $con = new Conexion();
            $stmn= $con->prepare( 'SELECT MAX(id_prestamo) FROM prestamo;');
            $stmn->execute();
            $last=$stmn->fetch(PDO::FETCH_ASSOC);
            if ($last) {
                $idJason = json_encode($last);
            }
            //return $max[$last];
            return $idJason;
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }   
    }
    
    public function obtenerPorCliente(){
        try {    
            $con = new Conexion();
            $stmn=$con->prepare('SELECT prestamo.id_prestamo, prestamo.dui, cliente.nombres, prestamo.monto, prestamo.saldo, prestamo.cantidad_cuotas FROM prestamo INNER JOIN cliente ON prestamo.dui=cliente.dui ');//Aqui va la sentencia 
            $stmn->execute();
            $prestamoJson= $stmn->fetchAll(PDO::FETCH_ASSOC); 
            if ($prestamoJson) {
                $todos = json_encode($prestamoJson, JSON_UNESCAPED_UNICODE);
                //crea un archivo json
                $file = 'assets/json/obtenerPorCliente.json';
                file_put_contents($file, $todos);
                return $todos;
            }else{
                return false;
            }
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
            return $Prestamo;
            
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }

    }
}
