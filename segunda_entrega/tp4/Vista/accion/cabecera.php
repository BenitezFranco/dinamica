<?php 
    include_once '../../configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../menu/css/estiloMenu.css">
</head>

<body> 
    <header>
        <div class="logo">
           <a href="../../../menu/index.php"><img src="../../../menu/imagenes/descarga.jpeg" alt="LogoUnco"></a> 
            <div style="text-align: center; margin: auto;">
                <h1>TECNICATURA EN DESARROLLO WEB</h1>
                <h2>Programacion web Dinamica</h2>
            </div>
            
        </div>
        <div class="botones-container">
                <a class="boton" href="../VerAutos.php">Ver autos</a>
                <a class="boton" href="../buscarAuto.php">Buscar autos</a>
                <a class="boton" href="../listaPersonas.php">Listar Clientes</a>
                <a class="boton" href="../NuevaPersona.php">Agregar Cliente</a>
                <a class="boton" href="../NuevoAuto.php">Agregar Autos</a> 
                <a class="boton" href="../CambioDuenio.php">Cambiar de dueño</a>
                <a class="boton" href="../BuscarPersona.php">Buscar cliente</a>
            </div>
    </header>

</body>
</html>