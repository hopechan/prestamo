<?php
echo 'si solo vez esto algo va mal :v';
require 'ControladorPrestamo.php';
$prueba = new ControladorPrestamo();
$pruebaJson = $prueba->obtenerActivos();
print_r($pruebaJson);

  


