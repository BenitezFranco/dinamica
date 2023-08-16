<?php
$numero = $_POST['numero'];

if ($numero > 0) {
    $mensaje = "El número enviado es positivo.";
} elseif ($numero < 0) {
    $mensaje = "El número enviado es negativo.";
} else {
    $mensaje = "El número enviado es cero.";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Respuesta del Número</title>
</head>
<body>
    <h1>Respuesta del Número</h1>
    <h2><?php echo $mensaje; ?></h2>
    <a href="index.html">Volver al formulario</a>
</body>
</html>