<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto por Patente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script type="text/javascript" src="../js/validaciones.js"></script>
</head>

<body>
<?php
    include_once '../estructura/cabecera.php';
    ?>
    <div class="container">
        <h1>Buscar Auto por Patente</h1>
        <form action="../accion/accionBuscarAutos.php" method="post" id="buscarAutoForm" onsubmit="return validarPatente();">
            <label for="patente">Número de Patente:</label>
            <input type="text" id="patente" name="patente" required>
            <span id="mensajePatente" class="mensaje-error"></span>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <?php
    include_once '../estructura/footer.php';
    ?>
</body>

</html>