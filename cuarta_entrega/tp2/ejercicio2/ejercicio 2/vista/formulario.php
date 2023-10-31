<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#horasForm").submit(function (event) {
                // Evita que el formulario se envíe automáticamente
                event.preventDefault();

                var horasValidas = true;

                // Iterar sobre cada campo de horas
                $("input[name='horas[]']").each(function () {
                    var horas = $(this).val();

                    if (horas === "" || isNaN(horas) || parseInt(horas) < 0) {
                        alert("Por favor, ingrese un valor válido en todas las horas.");
                        horasValidas = false;
                        return false; // Detener el bucle
                    }
                });

                if (horasValidas) {
                    $(this).unbind("submit").submit();
                }
            });
        });
    </script>
</head>
<body>
    <h1>Formulario de Horas de Cursada</h1>
    <form id="horasForm" action="accion/a_Formulario.php" method="get">
        <label for="lunes">Lunes:</label>
        <input type="number" id="lunes" name="horas[]" min="0"><br>
        
        <label for="martes">Martes:</label>
        <input type="number" id="martes" name="horas[]" min="0"><br>
        
        <label for="miercoles">Miércoles:</label>
        <input type="number" id="miercoles" name="horas[]" min="0"><br>
        
        <label for="jueves">Jueves:</label>
        <input type="number" id="jueves" name="horas[]" min="0"><br>
        
        <label for="viernes">Viernes:</label>
        <input type="number" id="viernes" name="horas[]" min="0"><br>
        
        <label for="sabado">Sábado:</label>
        <input type="number" id="sabado" name="horas[]" min="0"><br>
        
        <label for="domingo">Domingo:</label>
        <input type="number" id="domingo" name="horas[]" min="0"><br>
        
        <button type="submit">Enviar</button>
    </form>
    <a class="button" href="../../../../menu/indexMenu.html">Volver</a>
</body>
</html>
