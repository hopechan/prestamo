<?php

class ControladorPrestamo {
    const TABLA = 'prestamo';
   public function agregar($id_prestamo, $cliente, $monto, $valor_cuota, $tasa_interes, $cantidad_cuotas, $fecha_inicio, $fecha_fin, $fecha_ultimo_pago, $saldo, $estado, $observaciones, $cuotas){
       $con = new Conexion();
       $con = $con->prepare('INSERT INTO '.self::TABLA . '(id_prestamo, cliente, monto, valor_cuota, tasa_interes, cantidad_cuotas, fecha_inicio, fecha_fin, fecha_ultimo_pago, saldo, estado, observaciones, cuotas)'
               . 'VALUES(:id_prestamo, :cliente, :monto, :valor_cuota, :tasa_interes, :cantidad_cuotas, :fecha_inicio, :fecha_fin, :fecha_ultimo_pago, :saldo, :estado, :observaciones, :cuotas)');
       $con->bindParam(':id_prestamo',$this->id_prestamo);
       $con->bindParam(':cliente', $this->cliente);
       $con->bindParam(':monto', $this->monto);
       $con->bindParam(':valor_cuota', $this->valor_cuota);
       $con->bindParam(':tasa_interes', $this->tasa_interes);
       $con->bindParam(':cantidad_cuotas', $this->cantidad_cuotas);
       $con->bindParam(':fecha_inicio', $this->fecha_inicio);
       $con->bindParam(':fecha_fin', $this->fecha_fin);
       $con->bindParam(':fecha_ultimo_pago', $this->fecha_ultimo_pago);
       $con->bindParam(':saldo',$this->saldo);
       $con->bindParam(':estado',$this->estado);
       $con->bindParam(':observaciones',$this->observaciones);
       $con->bindParam(':cuotas',$this->cuotas);
       $con->execute();
       $con = null;
    }
    
    public function obtener(){
        $con = new Conexion();
        $con = $con->prepare('SELECT * FROM'.self::TABLA);
        $con = $con->execute();
        $Prestamo = $con->fetchAll();
        if ($Prestamo) {
            return $Pres;
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
}
