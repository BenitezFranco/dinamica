<?php
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["edad"])) {
            $edad= $_GET["edad"];
            if(ctype_digit($edad)){
            $edad = intval($edad);
            $es_estudiante=isset($_GET["estudiante"]);
            if($es_estudiante){
                $tipo_cliente= "estudiante";
            }else{
                $tipo_cliente="no estudiante";
            }            
            require_once'../../control/Entrada.php';
            $obj= new Entrada();
            $precio = $obj->calcularPrecio($es_estudiante,$edad);
            
            $cadena= "<p>Tipo de cliente: $tipo_cliente</p> <p>Edad: $edad años</p> <p>Precio de entrada: $$precio</p>";
            }else{
                $cadena ="<p>No se aceptan letras.</p>"; 
            }
        } else {
            $cadena ="<p>No se proporcionaron todos los datos necesarios.</p>";
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 8</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <?php echo $cadena; ?>
    </div>
</body>
</html>