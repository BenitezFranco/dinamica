<?php
if(isset($_FILES['archivo'])){
    $archivo = $_FILES['archivo'];

    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $tamano = $archivo['size'];

    require_once'../../control/Archivo.php';
    $obj = new Archivo();
    $cadena= $obj->subir($archivo,$nombre,$tipo,$tamano);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p><?php  echo $cadena ?></p>
</body>
</html>