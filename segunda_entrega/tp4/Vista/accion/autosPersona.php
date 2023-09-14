<?php
    include_once '../estructura/cabecera.php';
    $abmPersona= new AbmPersona();
    $param = data_submitted();
    $array= $abmPersona->buscar($param);
    if(count($array)>0){
        $persona=$array[0];
        $abmAuto= new AbmAuto();
        $aux= ["DniDuenio"=>$persona["NroDni"]];
        $autos = $abmAuto->buscar($aux);
    }else{
        $persona = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Autos personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<div class="border">
    
    <div class="row border">
    <p class="col border fw-bold">Número DNI</p>
    <p class="col border fw-bold">Apellido</p>
    <p class="col border fw-bold">Nombre</p>
    <p class="col border fw-bold">Fecha Nacimiento</p>
    <p class="col border fw-bold">Teléfono</p>
    <p class="col border fw-bold">Domicilio</p>
    </div>

    <?php
        if(count($array)>0){
            $cadena = '<div class="row border">';
                $cadena.= '<p class="col">'.$persona["NroDni"].'</p>';
                $cadena.= '<p class="col ">'.$persona["Apellido"].'</p>';
                $cadena.= '<p class="col ">'.$persona["Nombre"].'</p>';
                $cadena.= '<p class="col ">'.$persona["fechaNac"].'</p>';
                $cadena.= '<p class="col ">'.$persona["Telefono"].'</p>';
                $cadena.= '<p class="col ">'.$persona["Domicilio"].'</p></div>';
                echo $cadena;
                $cadena= '<div>
                        <p>Autos</p>
                        <div class="row border">
                            <p class="col border fw-bold text-light">Patente</p>
                            <p class="col border fw-bold text-light">Marca</p>
                            <p class="col border fw-bold text-light">Modelo</p>
                        </div>
                </div>';

                if(count($autos)>0){
                    foreach($autos as $auto){
                        $cadena .= '<div class="row border">';
                        $cadena.= '<p class="col border">'.$auto["Patente"].'</p>';
                        $cadena.= '<p class="col border">'.$auto["Marca"].'</p>';
                        $cadena.= '<p class="col border">'.$auto["Modelo"].'</p></div>';
                        
                    }
                    echo $cadena;
                }else{
                    echo "<p>No hay autos</p>";
                }
                
            }else{
            echo "<p>No hay Personas</p>";
        }
        
        
    ?>
    <button class="mi-boton"><a href="../Ejercicio 5/listaPersonas.php">Volver a listar clientes </a></button>


</div>
<?php
include_once("../estructura/footer.php");
?>
</body>
</html>