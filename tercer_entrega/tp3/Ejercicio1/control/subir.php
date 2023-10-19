<?php
if(isset($_FILES['archivo'])){
    $archivo = $_FILES['archivo'];

    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $tamano = $archivo['size'];

    
    if(($tipo == 'application/pdf' || $tipo == 'application/msword') && $tamano <= 2097152){
        
        $destino = '../Archivo' . $nombre;
        move_uploaded_file($archivo['tmp_name'], $destino);

        
        echo 'El archivo se ha subido correctamente. Puedes descargarlo <a href="' . $destino . '">aquí</a>.';
    }else{
        
        echo 'El archivo no cumple con los requisitos. Solo se permiten archivos en formato .doc o .pdf y un tamaño máximo de 2MB.';
    }
}
?>