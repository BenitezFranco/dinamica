<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once '../../control/miNumero.php';
    $numero = $_POST["numero"];
    
    $obj = new miNumero();
    $res= $obj-> verTipo($numero);
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - TP1</title>
</head>
<body>
    <h1>Resultado - Ejercicio 1</h1>
    <p><?php echo $res; ?></p>
    <a href="../Ejercicio1.html">Volver</a>
</body>
</html>