<?php
    $host = 'localhost';
    $database = 'prestamos';
    $username = 'root';
    $password = '';

    $conn = new mysqli($host, $username, $password, $database);

    $stmn = "SELECT * from cliente";
    $resultado = $conn->query($stmn);
    while ($cliente = $resultado->fetch_assoc()) {
        echo $cliente["dui"] . "<br>";
    }