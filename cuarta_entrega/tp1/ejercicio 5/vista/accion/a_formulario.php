<?php
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["edad"]) && isset($_GET["direccion"]) && isset($_GET["nivel_estudio"]) && isset($_GET["sexo"])) {
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $edad = $_GET["edad"];
            $direccion = $_GET["direccion"];
            $nivel_estudio = $_GET["nivel_estudio"];
            $sexo = $_GET["sexo"];

            require_once'../../control/Persona.php';
            $persona= new Persona($nombre, $apellido,$edad,$direccion, $nivel_estudio, $sexo);
            $res= $persona->saludo();
           
        } else {
            $res= "No se proporcionaron todos los datos necesarios.";
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 5</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <p><?php echo $res; ?></p>
        <a href="../formulario_ejercicio5.html">Volver</a>
    </div>
    
</body>
</html>