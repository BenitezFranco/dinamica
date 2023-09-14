<?php
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen'];

// Guardar la imagen en una ubicación específica
$directorio_destino = '../Archivo/';
$nombre_archivo = $imagen['name'];
$ruta_archivo = $directorio_destino . $nombre_archivo;
move_uploaded_file($imagen['tmp_name'], $ruta_archivo);

// Mostrar la imagen y la información cargada en el formulario
echo '<h2>Título:</h2>';
echo '<p>' . $titulo . '</p>';
echo '<h2>Descripción:</h2>';
echo '<p>' . $descripcion . '</p>';
echo '<h2>Imagen:</h2>';
echo '<img src="' . $ruta_archivo . '" alt="Imagen de la película">';
?>