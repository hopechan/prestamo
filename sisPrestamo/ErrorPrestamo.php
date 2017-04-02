<?php
class ErrorPrestamo extends Exception {
    public function nuevo() {
        // Mensaje de error
        $errorMsg = 'Error en la línea '
        .$this->getLine().' en el archivo '
        .$this->getFile() .': <b>'
        .$this->getMessage().
        '</b>Guarde este error';
        return $errorMsg;
    }
    
}
