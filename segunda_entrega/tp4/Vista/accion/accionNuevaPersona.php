<!DOCTYPE html>
<html>

<head>
    <title>Resultado Nueva Persona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<body>

    <?php
    include_once './cabecera.php';
    $datos = data_submitted();
    $arregloPersonas= array();
    //print_r($datos);
    $abmPersona = new AbmPersona();
    $arregloPersonas = $abmPersona->buscar($datos);
/*
$cuenta= count($arregloPersonas);
echo $cuenta;
print_r($arregloPersonas);*/ //trae el array vacio ¿¿¿¿¿¿
    if (!empty($arregloPersonas)) {
        echo '<div class="alert alert-info" role="alert">La persona ya está creada en la base de datos</div>';
    } else {
        if ($abmPersona->alta($datos)) {
            echo '<div class="alert alert-info" role="alert">La persona se ha cargado correctamente</div>';
        } else {
            echo '<div class="alert alert-info" role="alert">Error al cargar la persona</div>';
        }
    }

    ?>
    <button class="mi-boton"><a href="../NuevaPersona.php">Volver</a></button>
</body>

</html>
