<?php 
    include_once './cabecera.php';

    $param = data_submitted();
    $abmAuto= new AbmAuto();
    $array= $abmAuto->buscar($param);
    if(count($array)>0){
        $auto=$array[0];
    }else{
        $auto = null;
    }
    $abmPersona= new AbmPersona();
    $array= $abmPersona->buscar($param);
    if(count($array)>0){
        $persona=$array[0];
    }else{
        $persona = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Cambio Duenio</title>
</head>
<body>
    <?php 
    $cadena= "";
    if($persona==null){
     $cadena .= " No existe esa persona";  
    }
    if($auto==null){
        $cadena.=" No existe ese auto";
    }

    if($persona!=null && $auto!=null){
        if(strcmp($abmPersona->getNroDni($abmAuto->getDuenio($auto)),$abmPersona->getNroDni($persona))!==0){
            $aux= $abmAuto->toArray($auto);
            $aux['DniDuenio']= $persona;
            if($abmAuto->modificacion($aux)){
                $cadena="Se pudo cambiar el dueño";
            }else{
                $cadena="No se pudo cambiar el dueño";
            }
        }else{
            $cadena= "Esa persona ya es dueño de ese auto";
        }
    }
    echo "<p>".$cadena."</p>";
    ?>
     
</body>
</html>