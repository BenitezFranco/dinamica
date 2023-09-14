<?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["direccion"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $direccion = $_POST["direccion"];
            require_once'../../control/Persona.php';
            $persona= new Persona($nombre, $apellido,$edad,$direccion);
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
    <title>Resultado - Ejercicio 3</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <p><?php echo $res; ?></p>
        <a href="../formulario_ejercicio3.html">Volver</a>
    </div>
    
</body>
</html>