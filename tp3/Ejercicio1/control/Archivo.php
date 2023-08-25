<?php 
 class Archivo{

    function subir($archivo,$nombre,$tipo,$tamano){
        if(isset($_FILES['archivo'])){
            
        
            
            if(($tipo == 'application/pdf' || $tipo == 'application/msword') && $tamano <= 2097152){
                
                $destino = '../Archivo' . $nombre;
                move_uploaded_file($archivo['tmp_name'], $destino);
        
                
                $cadena= 'El archivo se ha subido correctamente. Puedes descargarlo <a href="' . $destino . '">aquí</a>.';
            }else{
                
                $cadena= 'El archivo no cumple con los requisitos. Solo se permiten archivos en formato .doc o .pdf y un tamaño máximo de 2MB.';
            }
        }
        return $cadena;
    }
 }

?>