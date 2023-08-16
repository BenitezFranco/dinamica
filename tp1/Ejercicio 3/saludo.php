<?php 
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $edad= $_POST['edad'];
    $direccion= $_POST['direccion'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <p><?php echo "Hola, yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion ?></p>
    <a href="index.html">Volver al formulario</a>
</body>
</html>
