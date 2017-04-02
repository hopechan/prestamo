<?php
include_once 'Cliente.php';
//$cliente = new Cliente();

class Prestamo {
    var $id_prestamo;
    var $cliente = Cliente;
    var $monto;
    var $valor_cuota;
    var $tasa_interes;
    var $cantidad_cuotas;
    var $fecha_inicio;
    var $fecha_fin;
    var $fecha_ultimo_pago;
    var $saldo;
    var $estado;
    var $observaciones;
    var $cuotas = [];
    
    function crearNuevaCuota(){
        $cuota = new Cuota();  
        return $cuota;
    }
    
    function calcularCuotaMensual(){
        $numerador=($tasa_interes($tasa_interes +1))^($cantidad_cuotas);
        $denominador=($tasa_interes + 1)^($cantidad_cuotas) - 1;
        $valor_cuota= $monto*($numerador/$denominador);
        
        $fecha_inicio = date("Y-m-d H:i:s"); //devuelve en formato DATETIME igual a mysql   2001-03-10 17:16:18
        $fecha_fin = date('Y-m-d', strtotime("$fecha_inicio + $cantidad_cuotas day"));       
    }
    
    function agregarCuota(Cuota $cu) {
        array_push($cuotas, $cu);
        $saldo = $cu->saldo_actualizado;
        $fecha_ultimo_pago = $cu->fecha;
    }
    
    function calcularInteresMensual() {
        //I = F - P
        //F = P(1 + i)^n
       $fin = date("Y-m-d H:i:s"); //fecha actual
       $fechaI = new DateTime($fecha_inicio);
       $fechaF = new DateTime($fin);
       $intervalo = $fechaI->diff($fechaF);
       $intervalMeses=$intervalo->format("%m");
       $intervalAnios=$intervalo->format("%y")*12;
       //echo "hay una diferencia de ".($intervalMeses+$intervalAnios)." meses";
       $n=$intervalMeses+$intervalAnios;
       $F = $monto(1 + $tasa_interes)^$n;
       $interes = $F - $monto;   
    }
            
    function getId_prestamo() {
        return $this->id_prestamo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getMonto() {
        return $this->monto;
    }

    function getValor_cuota() {
        return $this->valor_cuota;
    }

    function getTasa_interes() {
        return $this->tasa_interes;
    }

    function getCantidad_cuotas() {
        return $this->cantidad_cuotas;
    }

    function getFecha_inicio() {
        return $this->fecha_inicio;
    }

    function getFecha_fin() {
        return $this->fecha_fin;
    }

    function getFecha_ultimo_pago() {
        return $this->fecha_ultimo_pago;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getEstado() {
        return $this->estado;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function getCuotas() {
        return $this->cuotas;
    }

    function setId_prestamo($id_prestamo) {
        $this->id_prestamo = $id_prestamo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }

    function setValor_cuota($valor_cuota) {
        $this->valor_cuota = $valor_cuota;
    }

    function setTasa_interes($tasa_interes) {
        $this->tasa_interes = $tasa_interes;
    }

    function setCantidad_cuotas($cantidad_cuotas) {
        $this->cantidad_cuotas = $cantidad_cuotas;
    }

    function setFecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    function setFecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

    function setFecha_ultimo_pago($fecha_ultimo_pago) {
        $this->fecha_ultimo_pago = $fecha_ultimo_pago;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    function setCuotas($cuotas) {
        $this->cuotas = $cuotas;
    }   
}
