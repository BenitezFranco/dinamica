<?php
    include_once '../estructura/cabecera.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Duenio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="./js/validaciones.js"></script>
    <style>
        .error {
            border: 2px solid red;
        }
    </style>
</head>

<body> 
    <div class="container">
    <h1>Cambio de Dueño</h1>
    <form action="../accion/accionCambioDuenio.php" method="post" onsubmit="return validarCambioDuenio()">
    <label for="patente">Patente:</label>
        <input type="text" placeholder="Patente (ABC 123)" name="Patente" id="Patente" required>
        <label for="dniduenio">DNI del proximo propietario:</label>
        <input type="text" placeholder="Número de Documento (8 dígitos)" name="NroDni" id="NroDni" required>
        <button type="submit">Cambiar</button>
    </form>
</div>
<?php
    include_once '../estructura/footer.php';
    ?>
</body>

</html>