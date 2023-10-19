<?php
 class miNumero{
    
    function verTipo($num){
        switch($num){
            case $num>0:
                $mensaje = "El número enviado es positivo.";
                break;
            case $num==0:
                $mensaje = "El número enviado es cero.";
                break;
            case $num<0:
                $mensaje = "El número enviado es negativo.";
                break;
            default:
                $mensaje = "No se envio un número";
        }
        return $mensaje;
    }
 }
?>