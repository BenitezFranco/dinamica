<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["horas"])) {
    $horasPorDia = $_GET["horas"];
    $totalHoras = array_sum($horasPorDia);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 2</title>
</head>
<body>
    <h1>Resultado de Horas de Cursada</h1>
    <p>Total de horas de cursada por semana: <?php echo $totalHoras; ?></p>
    <a href="../formulario.html">Volver</a>
</body>
</html>