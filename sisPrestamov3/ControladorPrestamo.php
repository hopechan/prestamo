<?php
require_once 'Conexion.php';
require_once 'Prestamo.php';

class ControladorPrestamo {
    const TABLA = 'prestamo';
    var $max = [];
    var $Prestamo = [];

    public function agregar(Prestamo $p){
        try {
          $conn = new Conexion();
          $cliente = $p->getCliente();
          $monto = $p->getMonto();
          $valor_cuota = $p->getValor_cuota();
          $cantidad_cuotas = $p->getCantidad_cuotas();
          $fecha_inicio = $p->getFecha_inicio();
          $fecha_fin = $p->getFecha_fin();
          $tasa_interes = $p->getTasa_interes();
          $stmn = "INSERT INTO prestamo(cliente, monto, valor_cuota, fecha_inicio, fecha_fin, interes) values('" . $cliente . "', '" . $monto . "', '" . $valor_cuota . "', '" . $cantidad_cuotas . "', '" . $fecha_inicio . "', '" . $fecha_fin . "', '" . $tasa_interes ."')";
          $conn->execQueryO($stmn);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }

    public function obtener(){
        try {
          $conn = new Conexion();
          $stmn = "SELECT * FROM prestamo";
          $resultado = $conn->execQueryO($stmn);
          $prestamos = array();
          while ($prestamos = $resultado->fetch_assoc()) {
            $p = new Prestamo();
            $p->setId_prestamo($prestamos['id_prestamo']);
            $p->setCliente($prestamos['cliente']);
            $p->setMonto($prestamos['monto']);
            $p->setValor_cuota($prestamos['valor_cuota']);
            $p->setTasa_interes($prestamos['tasa_interes']);
            $p->setCantidad_cuotas($prestamos['cantidad_cuotas']);
            $p->setFecha_inicio($prestamos['fecha_inicio']);
            $p->setFecha_fin($prestamos['fecha_fin']);
            $p->setFecha_ultimo_pago($prestamos['fecha_ultimo_pago']);
            $p->setSaldo($prestamos['saldo']);
            $p->setEstado($prestamos['estado']);
            $p->setObservaciones($prestamos['observaciones']);
            array_push($prestamo, $p);
          }

          $conn = null;
          return $prestamos;
        }catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }

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

    public function obtenerActivos(){
        try {
          $conn = new Conexion();
          $stmn = "SELECT prestamo.id_prestamo,cliente.dui,cliente.nombres,cliente.apellidos,prestamo.monto,prestamo.saldo,prestamo.cantidad_cuotas FROM prestamo INNER JOIN cliente ON prestamo.dui=cliente.dui";
          $resultado = $conn->execQueryO($stmn);
          $prestamos = array();
           while ($prestamos = $resultado->fetch_assoc()) {
             $p = new Prestamo();
             $p->setId_prestamo($prestamos['id_prestamo']);
             $p->setDui($prestamos['dui']);
             $p->setNombres($prestamos['nombres']);
             $p->setApellidos($prestamos['apellidos']);
             $p->setMonto($prestamos['monto']);
             $p->setSaldo($prestamos['saldo']);
             $p->setCantidad_cuotas($prestamos['cantidad_cuotas']);
             array_push($prestamo, $p);
           }
           $conn = null;
           return $prestamo;
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }

    public function obtenerPorCliente(){
       //arreglar la consulta para que reciba de la interfaz el dui a buscar
        try {

        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
}
