<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 3</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Datos Personales</h1>
        <form action="accion/a_formulario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            
            <button type="submit">Enviar</button>
        </form>
    </div>
    <a class="button" href="../../../menu/indexMenu.html">Volver</a>
</body>
</html>
