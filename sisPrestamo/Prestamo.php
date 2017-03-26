<?php


class Prestamo {
    var $id_prestamo;
    var $id_cliente;
    var $valor_cuota;
    var $valor_interes;
    var $cantidad_cuotas;
    var $fecha_inicio;
    var $fecha_fin;
    var $fecha_ultimo_pago;
    var $saldo;
    var $estado;
    var $observaciones;
    var $cuotas = [];
    
    function getId_prestamo() {
        return $this->id_prestamo;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function getValor_cuota() {
        return $this->valor_cuota;
    }

    function getValor_interes() {
        return $this->valor_interes;
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

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setValor_cuota($valor_cuota) {
        $this->valor_cuota = $valor_cuota;
    }

    function setValor_interes($valor_interes) {
        $this->valor_interes = $valor_interes;
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
