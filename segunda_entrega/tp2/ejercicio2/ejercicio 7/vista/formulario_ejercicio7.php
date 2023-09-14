<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 7</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#calculadoraForm").submit(function(event) {
                var numero1 = parseFloat($("#numero1").val());
                var numero2 = parseFloat($("#numero2").val());
                var operacion = $("#operacion").val();

                // Validación de números ingresados
                if (isNaN(numero1) || isNaN(numero2)) {
                    alert("Por favor, ingrese números válidos.");
                    return false; 
                }
                return true;
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Operaciones Matemáticas</h1>
        <form id="calculadoraForm" action="accion/a_formulario.php" method="get">
            <label for="numero1">Número 1:</label>
            <input type="text" id="numero1" name="numero1" required>
            
            <label for="numero2">Número 2:</label>
            <input type="text" id="numero2" name="numero2" required>
            
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
            </select>
            
            <button type="submit">Calcular</button>
        </form>
    </div>
    <a class="button" href="../../../../menu/indexMenu.html">Volver</a>
</body>
</html>
