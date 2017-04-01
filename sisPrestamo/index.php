<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once("Conexion.php");
            $con = new Conexion();
            $var = 0;
            $sql =$con->prepare("INSERT INTO cardinales(numero) VALUES (:numero)");
            
            #while ($var <= 10) {
            #    $sql->bindParam(":numero", $var);
            #    $sql->execute();
            #    $var++;
            #}
            
            $consulta = $con->prepare("DELETE FROM cardinales");
            $consulta->execute();
            $cliente = $consulta->fetchAll();
            var_dump($cliente);
            
            
            
        ?>
    </body>
</html>
