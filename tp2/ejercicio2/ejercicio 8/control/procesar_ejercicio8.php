<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #300;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }
        
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["edad"]) && isset($_GET["estudiante"])) {
            $edad = intval($_GET["edad"]);
            $es_estudiante = $_GET["estudiante"] === "si";
            $precio = 0;
            
            if ($es_estudiante && $edad < 12) {
                $precio = 160;
            } elseif ($es_estudiante && $edad >= 12) {
                $precio = 180;
            } else {
                $precio = 300;
            }
            
            $tipo_cliente = $es_estudiante ? "estudiante" : "normal";
            
            echo "<p>Tipo de cliente: $tipo_cliente</p>";
            echo "<p>Edad: $edad años</p>";
            echo "<p>Precio de entrada: $$precio</p>";
        } else {
            echo "<p>No se proporcionaron todos los datos necesarios.</p>";
        }
        ?>
    </div>
</body>
</html>
