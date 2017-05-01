<?php
echo 'hola :v';
require 'ControladorPrestamo.php';
$prueba = new ControladorPrestamo();
$pruebaJson = $prueba->obtenerIdPrestamo();
print_r($pruebaJson);

  


