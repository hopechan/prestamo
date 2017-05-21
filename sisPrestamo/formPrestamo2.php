<?php
    require_once 'ControladorPrestamo.php';
    require_once 'Prestamo.php';
    $p = new Prestamo();
    $cPrestamo = new ControladorPrestamo();
    $p->setCliente($_POST['cliente']);
    $p->setMonto($_POST['monto']);
    $p->setValor_cuota($_POST['valor_cuota']);
    $p->setCantidad_cuotas($_POST['num_cuotas']);
    $p->setFecha_inicio($_POST['fecha_inicio']);
    $p->setFecha_fin($_POST['fecha_finalizacion']);
    $p->setTasa_interes($_POST['interes']);
    $cPrestamo->agregar($p);
    header("Location: webPrestamo.php");
