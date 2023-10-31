<?php 
    class Entrada{
        
        function calcularPrecio($es_estudiante,$edad){
            if ($es_estudiante && $edad < 12) {
                $precio = 160;
            } elseif ($es_estudiante && $edad >= 12) {
                $precio = 180;
            } else {
                $precio = 300;
            }
            return $precio;
        }
    }
?>