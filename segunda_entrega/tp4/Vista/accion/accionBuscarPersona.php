<?php 
    include_once './cabecera.php';
    $param = data_submitted();
    $abmPersona= new abmPersona();
    $array= $abmPersona->buscar($param);
    if(count($array)>0){
        $persona=$abmPersona->toArray($array[0]);
    }else{
        $persona = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Persona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <div>
    <div class="row border">
        <p class="col border fw-bold">Número DNI</p>
        <p class="col border fw-bold">Apellido</p>
        <p class="col border fw-bold">Nombre</p>
        <p class="col border fw-bold">Fecha Nacimiento</p>
        <p class="col border fw-bold">Teléfono</p>
        <p class="col border fw-bold">Domicilio</p>
        </div>
        <?php
            if($persona!=null){
                    $cadena = '<form action="ActualizarDatosPersona.php" method="post">';
                    $cadena .= '<div class="row border">';
                    $cadena.= '<input type="text" placeholder='.$persona["NroDni"].' value='.$persona["NroDni"].' name="NroDni" readonly="true" class="col border">';
                    $cadena.= '<input type="text" placeholder='.$persona["Apellido"].' value='.$persona["Apellido"].' name="Apellido" class="col border">';
                    $cadena.= '<input type="text" placeholder='.$persona["Nombre"].' value='.$persona["Nombre"].' name="Nombre" class="col border">';
                    $cadena.= '<input type="text" placeholder='.$persona["fechaNac"].' value='.$persona["fechaNac"].' name="fechaNac" class="col border">';
                    $cadena.= '<input type="text" placeholder='.$persona["Telefono"].' value='.$persona["Telefono"].' name="Telefono" class="col border">';
                    $cadena.= '<input type="text" placeholder="'.$persona["Domicilio"].'" value="'.$persona["Domicilio"].'" name="Domicilio" class="col border"></div>';
                    $cadena .= '<button type="submit" class"btn btn-confirm">Editar</button></div></form>';
                    echo $cadena;
                    
            }else{
                echo '<div class="row border"> <p>No hay persona</p></div>';
            }
            
        ?>
    <button class="mi-boton"><a href="../BuscarPersona.php">Volver</a></button>


    </div>
   
</body>
</html>