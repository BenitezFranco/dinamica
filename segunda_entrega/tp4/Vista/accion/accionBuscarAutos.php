<?php
include_once './cabecera.php';
$mensaje = "";
$auto = null;

$datos = data_submitted();
$patente = $datos['patente'];
$abmAuto = new AbmAuto();
$autos = $abmAuto->buscar(['patente' => '%' . $patente . '%']); // Búsqueda parcial

if (!empty($autos)) {
    // Al menos un auto encontrado, buscar el auto que coincide exactamente con la patente
    foreach ($autos as $a) {
        if ($a->getPatente() === $patente) {
            $auto = $a;
            break; // Detener el bucle si se encuentra el auto deseado
        }
    }
}

if ($auto === null) {
    // No se encontró ningún auto con la patente ingresada
    $mensaje = "No se encontró ningún auto con la patente ingresada.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Búsqueda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
 
</head>

<body>
    <div class="container">
        <?php if ($auto !== null) : ?>
            <h2>Resultado de Búsqueda</h2>
            <table>
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Nombre del Dueño</th>
                    <th>Apellido del Dueño</th>
                </tr>
                <tr>
                    <td><?php echo $patente; ?></td>
                    <td><?php echo $auto->getMarca(); ?></td>
                    <td><?php echo $auto->getModelo(); ?></td>
                    <td><?php echo $auto->getDuenio()->getNombre(); ?></td>
                    <td><?php echo $auto->getDuenio()->getApellido(); ?></td>
                </tr>
            </table>
        <?php elseif ($mensaje !== "") : ?>
            <p><?php echo $mensaje; ?></p>
        <?php endif; ?>
    <!--    <a href="../buscarAuto.php">Volver al formulario de búsqueda</a> !-->
        <button class="mi-boton"><a href="../buscarAuto.php">Volver al formulario de búsqueda</a></button>

    </div>
   
</body>

</html>