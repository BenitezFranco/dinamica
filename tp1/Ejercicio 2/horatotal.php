<?php
$numeros= [$_GET['lunes'],$_GET['martes'],$_GET['miercoles'],$_GET['jueves']
,$_GET['viernes'],$_GET['sabado'],$_GET['domingo']];
$total=0;
foreach($numeros as $num){
    $total+=$num;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Horas totales</title>
</head>
<body>
    <h1>Total de horas</h1>
    <h2><?php echo $total; ?></h2>
    <a href="index.html">Volver al formulario</a>
</body>
</html>