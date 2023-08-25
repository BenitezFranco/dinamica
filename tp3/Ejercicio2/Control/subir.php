<?php

if(isset($_FILES['archivo'])){
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    if($tipo == 'text/plain'){

        $contenido = file_get_contents($archivo['tmp_name']);

        echo '<textarea rows="10" cols="50">' . $contenido . '</textarea>';
    }else{
        echo 'El archivo no es del tipo esperado. Solo se permite subir archivos de texto plano (.txt).';
    }
}
?>