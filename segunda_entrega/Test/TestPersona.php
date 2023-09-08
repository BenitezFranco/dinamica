<?php
    include_once '../configuracion.php';
    $abmAuto= new AbmPersona();
    $personas= $abmAuto->buscar(["NroDni"=>"22985265"]);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    print_r( $personas);
    ?></p>
</body>
</html>