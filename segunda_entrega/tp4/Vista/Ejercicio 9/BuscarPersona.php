<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Buscar Persona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    
</head>
<body>
<?php
    include_once '../estructura/cabecera.php';
    ?>
    
    <div class="container">
        <h1>Buscar cliente por número de DNI</h1>
        <form action="../accion/accionBuscarPersona.php" method="post" id="buscarPersonaForm" onsubmit="return validarDni()">
            <input type="text" id="NroDni" name="NroDni" required>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <script type="text/javascript" src="../js/validaciones.js"></script>

    <?php
    include_once '../estructura/footer.php';
    ?>
</body>

</html>