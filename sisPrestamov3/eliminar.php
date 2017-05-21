<?php
  require_once "ControladorCliente.php";
  $cCliente = new ControladorCliente();
  $dui = $_GET['dui'];
  $cCliente->eliminar($dui);
  header("Location: webcliente.php");
