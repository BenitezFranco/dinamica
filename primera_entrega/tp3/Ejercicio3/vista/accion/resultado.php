<?php
// Verificamos si se han enviado los valores desde el formulario
if (isset($_POST['titulo']) && isset($_POST['actores']) && isset($_POST['director']) && isset($_POST['guion']) && isset($_POST['produccion']) && isset($_POST['anio']) && isset($_POST['nacionalidad']) && isset($_POST['genero']) && isset($_POST['duracion']) && isset($_POST['restriccion']) && isset($_POST['sinopsis']) && isset($_FILES['imagen'])) {
    $titulo = $_POST['titulo'];
    $actores = $_POST['actores'];
    $director = $_POST['director'];
    $guion = $_POST['guion'];
    $produccion= $_POST['produccion'];
    $anio= intval($_POST['anio']);
    $nacionalidad= $_POST['nacionalidad'];
    $genero= $_POST['genero'];
    $duracion= $_POST['duracion'];
    $restriccion= $_POST['restriccion'];
    $sinopsis= $_POST['sinopsis'];
    $imagen = $_FILES['imagen'];

    $directorio_destino = '../../Archivo/';
    $nombre_archivo = $imagen['name'];
    $ruta_archivo = $directorio_destino . $nombre_archivo;
    move_uploaded_file($imagen['tmp_name'], $ruta_archivo);

    $muestraTexto= "<b>Titulo:</b>".$titulo. "<br>".
    '<img src="' . $ruta_archivo . '" class="img-fluid"  alt="Imagen de la película"> <br>'. 
    "<b>Actores: </b> ".$actores. "<br>".
    "<b>Director: </b>".$director."<br>".
    "<b>Guion: </b> ".$guion."<br>".
    "<b>Produccion: </b>".$produccion."<br>".
    "<b>Anio: </b>".$anio."<br>".
    "<b>Nacionalidad:  </b>".$nacionalidad."<br>".
    "<b>Genero: </b>".$genero."<br>".
    "<b>Duracion: </b>".$duracion." minutos <br>".
    "<b>Restriccion: </b>".$restriccion."<br>".
    "<b>Sinopsi: </b>".$sinopsis."<br>";
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenedor Verde con Botón de Regreso</title>
    <!-- Incluye los archivos CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .alert-heading {
            color: blue;
        }

        /* Estilo para el botón de cierre como una cruz en la esquina superior izquierda */
        .btn-close {
            position: absolute;
            top: 0;
            left: 1055px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Crea un contenedor verde con una clase personalizada "bg-success" -->
        <div class="alert alert-success position-relative">
        <button type="button" class="btn btn-close" onclick="javascript:history.back()">✖</button>

            <h4 class="alert-heading">La pelicula introducida es: </h4>
            <p><?php
if (isset($muestraTexto)) {
    echo "<p> <b>". $muestraTexto."</b> </p>";
}
?></p>
       
        </div>
    </div>

    <!-- Incluye los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<body>
 <!--    
<?php
if (isset($muestraTexto)) {
    echo "<p> <b>". $muestraTexto."</b> </p>";

}
?> -->
</body>

</html>