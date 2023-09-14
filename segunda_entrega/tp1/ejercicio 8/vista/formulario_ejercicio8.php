<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 8</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Entradas de Cine</h1>
        <form action="accion/a_formulario.php" method="get">
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" required>
            
            <label for="estudiante">¿Es estudiante?</label>
            <input type="checkbox" id="estudiante" name="estudiante">
            
            <button type="submit">Calcular Precio</button>
            <button type="reset">Limpiar Formulario</button>
        </form>
    </div>
    <a class="button" href="../../../menu/indexMenu.html">Volver</a>
</body>
</html>
