<?php
require 'Conexion.php';
class ControladorPrestamo {
    const TABLA = 'prestamo';
    var $max = [];
    var $Prestamo = [];
   
    public function agregar(Prestamo $p){
        try {
            $con = new Conexion();
            $sql = $con->prepare('INSERT INTO '.self::TABLA . '(id_prestamo, cliente, monto, valor_cuota, tasa_interes, cantidad_cuotas, fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones, cuotas)'
                . 'VALUES(:id_prestamo, :cliente, :monto, :valor_cuota, :tasa_interes, :cantidad_cuotas, :fecha_inicio, :fecha_fin, :fecha_ultimo_pago, :saldo, :estado, :observaciones, :cuotas);');
            $sql->bindParam(':id_prestamo',$p->getId_prestamo());
            $sql->bindParam(':cliente', $p->getCliente());
            $sql->bindParam(':monto', $p->getMonto());
            $sql->bindParam(':valor_cuota', $p->getValor_cuota());
            $sql->bindParam(':tasa_interes', $p->getTasa_interes());
            $sql->bindParam(':cantidad_cuotas', $p->getCantidad_cuotas());
            $sql->bindParam(':fecha_inicio', $p->getFecha_inicio());
            $sql->bindParam(':fecha_fin', $p->getFecha_fin());
            $sql->bindParam(':fecha_ultimo_pago', $p->getFecha_ultimo_pago());
            $sql->bindParam(':saldo',$p->getSaldo());
            $sql->bindParam(':estado',$p->getEstado());
            $sql->bindParam(':observaciones',$p->getObservaciones());
            $sql->bindParam(':cuotas',$p->getCuotas());
            $sql->execute();
            $con = null;
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }
    }
    
    public function obtener(){
        try {
            $con = new Conexion();
            $sql = $con->prepare('SELECT id_prestamo, dui, monto, valor_cuota, tasa_interes, cantidad_cuotas,'
                    . 'fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones  FROM'.self::TABLA.';');
            $con->exec($sql);
            $Prestamo = $sql->fetchAll();
            if ($Prestamo) {
                return $Prestamo;
            }else{
                return false;
            }  
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
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
    
    public function modificar(Prestamo $p){
        try {
            $con = new Conexion();
            $sql= $con->prepare('UPDATE'.self::TABLA.'SET monto=:monto, cuotas=:cuotas, WHERE id_prestamos=:id_prestamo;');
            $sql->bindParam(':monto', $p->getMonto());
            $sql->bindParam(':cuotas', $p->getCuotas());
            $sql->bindParam(':id_prestamo', $p->getId_prestamo());
            $sql->execute();
            $con = null;
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }    
    }
    
    public function obtenerIdPrestamo(){
        try {
            $con = new Conexion();
            $sql= $con->prepare( 'SELECT MAX(id_prestamo) FROM prestamo;');
            $sql->execute();
            $last =$con->fetch();
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
            return $max[$last];
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }   
    }
    
    public function obtenerPorCliente(){
        try {    
            $con = new Conexion();
            $sql=$con->prepare();//Aqui va la sentencia 
            $sql->execute();
            $Prestamo = $sql->fecthAll();
            throw new ErrorPrestamo($titulo,$ubicacion,$mensaje);
            return $Prestamo;
            
        } catch (ErrorPrestamo $e) {
            echo $e->nuevo();
        }

    }
}
