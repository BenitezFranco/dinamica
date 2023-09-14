<?php 

include_once './cabecera.php'; 


$objAbmAuto = new AbmAuto();
$listaAuto = [];
$null= NULL;
$listaAuto = $objAbmAuto->buscar($null);

?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ejercicio 3 - TP4</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
<h3>Autos cargados</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Patente</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Nombre Dueño</th>
            <th>Apellido Dueño</th>
 
        </tr>
    </thead>
    <tbody>
    <?php
    if (is_array($listaAuto) && count($listaAuto) > 0) {
        foreach ($listaAuto as $objAuto) {
            echo '<tr>';
            echo '<td>' . $objAuto->getPatente() . '</td>';
            echo '<td>' . $objAuto->getMarca() . '</td>';
            echo '<td>' . $objAuto->getModelo() . '</td>';
            echo '<td>' . $objAuto->getDuenio()->getNombre() . '</td>';
            echo '<td>' . $objAuto->getDuenio()->getApellido() . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="7">No hay datos cargados.</td></tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>

<?php
//include_once("../estructura/pie.php");



/*
include_once '../configuracion.php';
$abmAuto = new AbmAuto();
$autos = array();
$autos = $abmAuto->buscar(null);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>

<body>
    <?php include_once 'cabecera.php'; ?>
    <div class="container mt-4">
        <h1 class="text-center">LISTADO DE CLIENTES</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($autos) > 0) {
                        foreach ($autos as $auto) {
                            $duenio = $auto->getDuenio();
                            echo "<tr>";
                            echo "<td>" . $auto->getPatente() . "</td>";
                            echo "<td>" . $auto->getMarca() . "</td>";
                            echo "<td>" . $auto->getModelo() . "</td>";
                            echo "<td>" . $duenio->getNombre() . "</td>";
                            echo "<td>" . $duenio->getApellido() . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay autos cargados</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    
</body>

</html>*/
?>


