<?php
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["operacion"])) {
            $numero1 = $_GET["numero1"];
            $numero2 = $_GET["numero2"];
            if(ctype_digit($numero1) && ctype_digit($numero2)){
                $numero1= floatval($numero1);
                $numero2= floatval($numero2);
            $operacion = $_GET["operacion"];
            
            require_once'../../control/Operacion.php';
            $obj= new Operacion($operacion,$numero1,$numero2);
            $obj->calcular();
            $resultado= $obj->getResultado();
            $cadena= "<p>Operación:".$obj->getOperacion()."</p>";
            $cadena.= "<p>Número 1: ".$obj->getNumP()."</p>";
            $cadena.= "<p>Número 2:  ".$obj->getNumD()."</p>";
            $cadena.= "<p>Resultado: $resultado</p>";
            }else{
                $cadena= "<p>No se aceptan letras.</p>";  
            }
        } else {
            $cadena= "<p>No se aceptan letras.</p>";
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 7</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <?php 
         echo $cadena;
        ?>
    </div>
</body>
</html>
