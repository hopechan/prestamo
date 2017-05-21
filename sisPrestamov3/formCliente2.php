<?php  
    require_once 'ControladorCliente.php';
    require_once 'Cliente.php';
    $c = new Cliente();
    $cCliente = new ControladorCliente();

        $c->setDui($_POST['dui']);
        $c->setNit($_POST['nit']);
        $c->setNombres($_POST['nombres']);
        $c->setApellidos($_POST['apellidos']);
        $c->setSexo($_POST['sexo']);
        $c->setDireccion($_POST['direccion']);
        $c->setTelefono($_POST['telefono']);
        $c->setFecha_nacimiento($_POST['fecha_nacimiento']);
        $c->setObservaciones($_POST['observaciones']);
        $cCliente->agregar($c);

        header("Location: webcliente.php");