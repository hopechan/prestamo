<?php

class ControladorPrestamo {
    const TABLA = 'prestamo';
    var $max = [];
    var $Prestamo = [];
    public function agregar(Prestamo $p){
       $con = new Conexion();
       $con = $con->prepare('INSERT INTO '.self::TABLA . '(id_prestamo, cliente, monto, valor_cuota, tasa_interes, cantidad_cuotas, fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones, cuotas)'
               . 'VALUES(:id_prestamo, :cliente, :monto, :valor_cuota, :tasa_interes, :cantidad_cuotas, :fecha_inicio, :fecha_fin, :fecha_ultimo_pago, :saldo, :estado, :observaciones, :cuotas);');
       $con->bindParam(':id_prestamo',$p->getId_prestamo());
       $con->bindParam(':cliente', $p->getCliente());
       $con->bindParam(':monto', $p->getMonto());
       $con->bindParam(':valor_cuota', $p->getValor_cuota());
       $con->bindParam(':tasa_interes', $p->getTasa_interes());
       $con->bindParam(':cantidad_cuotas', $p->getCantidad_cuotas());
       $con->bindParam(':fecha_inicio', $p->getFecha_inicio());
       $con->bindParam(':fecha_fin', $p->getFecha_fin());
       $con->bindParam(':fecha_ultimo_pago', $p->getFecha_ultimo_pago());
       $con->bindParam(':saldo',$p->getSaldo());
       $con->bindParam(':estado',$p->getEstado());
       $con->bindParam(':observaciones',$p->getObservaciones());
       $con->bindParam(':cuotas',$p->getCuotas());
       $con->execute();
       $con = null;
    }
    
    public function obtener(){
        $con = new Conexion();
        $con->prepare('SELECT * FROM'.self::TABLA.';');
        $con->execute();
        $Prestamo = $con->fetchAll();
        if ($Prestamo) {
            return $Prestamo;
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
    
    public function modificar(Prestamo $p){
        $con = new Conexion();
        $con->prepare('UPDATE'.self::TABLA.'SET monto=:monto, cuotas=:cuotas, WHERE id_prestamos=:id_prestamo;');
        $con->bindParam(':monto', $p->getMonto());
        $con->bindParam(':cuotas', $p->getCuotas());
        $con->bindParam(':id_prestamo', $p->getId_prestamo());
        $con->execute();
        $con = null;
    }
    
    public function obtenerIdPrestamo(){
        $con = new Conexion();
        $con->prepare( 'SELECT MAX(id_prestamo) FROM prestamo;');
        $con->execute();
        $last =$con->fetch();
        return $max[$last];
    }
    
    public function obtenerPorCliente(){
        $con = new Conexion();
        $con->prepare();//Aqui va la sentencia 
        $con->execute();
        $Prestamo = $con->fecthAll();
        return $Prestamo;
    }
}
