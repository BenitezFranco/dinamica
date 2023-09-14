<?php 

include_once '../estructura/cabecera.php'; 


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
<link rel="stylesheet" type="text/css" href="../css/styles.css">
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
            echo '<td>' . $objAuto["Patente"] . '</td>';
            echo '<td>' . $objAuto["Marca"] . '</td>';
            echo '<td>' . $objAuto["Modelo"] . '</td>';
            echo '<td>' . $objAuto["DniDuenio"]["Nombre"] . '</td>';
            echo '<td>' . $objAuto["DniDuenio"]["Apellido"]. '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="7">No hay datos cargados.</td></tr>';
    }
    ?>
    </tbody>
</table>
<?php
include_once("../estructura/footer.php");
?>
</body>

</html>




