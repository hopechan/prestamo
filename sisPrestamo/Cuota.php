<?php
class Cuota {
   var $num_cuota;
   var $valor;
   var $interes;
   var $capital;
   var $fecha;
   var $saldo_anterior;
   var $saldo_actualizado;
   
   function calcularCuota(){   
       
   }
   
   function validar(){
       if (is_null($num_cuota,$valor,$interes,$capital,$fecha,$saldo_anterior,$saldo_actualizado)) {
           echo 'Clase no definida';
       }
   }
   
   function getNum_cuota() {
       return $this->num_cuota;
   }

   function getValor() {
       return $this->valor;
   }

   function getInteres() {
       return $this->interes;
   }

   function getCapital() {
       return $this->capital;
   }

   function getFecha() {
       return $this->fecha;
   }

   function getSaldo_anterior() {
       return $this->saldo_anterior;
   }

   function getSaldo_actualizado() {
       return $this->saldo_actualizado;
   }

   function setNum_cuota($num_cuota) {
       $this->num_cuota = $num_cuota;
   }

   function setValor($valor) {
       $this->valor = $valor;
   }

   function setInteres($interes) {
       $this->interes = $interes;
   }

   function setCapital($capital) {
       $this->capital = $capital;
   }

   function setFecha($fecha) {
       $this->fecha = $fecha;
   }

   function setSaldo_anterior($saldo_anterior) {
       $this->saldo_anterior = $saldo_anterior;
   }

   function setSaldo_actualizado($saldo_actualizado) {
       $this->saldo_actualizado = $saldo_actualizado;
   }

}
