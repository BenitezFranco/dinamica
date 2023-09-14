<?php 
    include_once './cabecera.php';
    $param = data_submitted();
    $abmPersona= new AbmPersona();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos Persona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <?php 
    
            if($abmPersona->modificacion($param)){
                $cadena="Se pudo cambiar los datos";
            }else{
                $cadena="No se pudo cambiar los datos";
            }
    echo "<p>".$cadena."</p>";
    ?>
      
</body>
</html>