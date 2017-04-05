<?php
class ErrorPrestamo extends Exception {
    private $titulo;
    private $ubicacion;
    private $mensaje;
    
    function __construct($titulo, $ubicacion, $mensaje) {
        $this->getFile() = $titulo;
        $this->getLine() = $ubicacion;
        $this->getMessage() = $mensaje;
        parent::__construct($titulo, $ubicacion, $mensaje);
        }
        
 
    
}
