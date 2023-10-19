<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 5</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#datosPersonalesForm").submit(function(event) {
                event.preventDefault();

                var validacionExitosa = true;

                var nombre = $("#nombre").val();
                var apellido = $("#apellido").val();
                var edad = $("#edad").val();
                var direccion = $("#direccion").val();

                // Validación de campos vacíos
                if (nombre === "" || apellido === "" || edad === "" || direccion === "") {
                    alert("Por favor, complete todos los campos.");
                    validacionExitosa = false;
                }

                // Validación de edad: solo números positivos
                if (isNaN(edad) || parseInt(edad) <= 0) {
                    alert("Por favor, ingrese una edad válida.");
                    validacionExitosa = false;
                }

                // Validación de dirección: al menos 5 caracteres
                if (direccion.length < 5) {
                    alert("Por favor, ingrese una dirección válida (al menos 5 caracteres).");
                    validacionExitosa = false;
                }

                // Validación de deportes: al menos uno seleccionado
                if (!$("input[name='deportes[]']:checked").length) {
                    alert("Por favor, seleccione al menos un deporte.");
                    validacionExitosa = false;
                }

                // Validación de nivel de estudios: al menos una opción seleccionada
                if (!$("input[name=nivel_estudio]:checked").length) {
                    alert("Por favor, seleccione un nivel de estudios.");
                    validacionExitosa = false;
                }

                if (validacionExitosa) {
                    $(this).unbind("submit").submit();
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Formulario de Datos Personales con Estudios y Sexo</h1>
        <form id="datosPersonalesForm" action="accion/a_formulario.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" >
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" >
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" >
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" >
        
            
            <label>Deportes que practica:</label>
            <input type="checkbox" id="futbol" name="deportes[]" value="futbol">
            <label for="futbol">Fútbol</label>
            
            <input type="checkbox" id="basket" name="deportes[]" value="basket">
            <label for="basket">Basket</label>
            
            <input type="checkbox" id="tennis" name="deportes[]" value="tennis">
            <label for="tennis">Tenis</label>
            
            <input type="checkbox" id="voley" name="deportes[]" value="voley">
            <label for="voley">Voley</label>
            
            <br>

            <div class="radio-group">
                <p><strong>Estudios:</strong></p>
                <label for="no_estudios">
                    No tiene estudios
                    <input type="radio" id="no_estudios" name="nivel_estudio" value="no_estudios">
                    
                </label>
                
                <label for="primarios">
                    Estudios primarios
                    <input type="radio" id="primarios" name="nivel_estudio" value="primarios">
                    
                </label>
                
                <label for="secundarios">
                    Estudios secundarios
                    <input type="radio" id="secundarios" name="nivel_estudio" value="secundarios">
                    
                </label>
            </div>
            
            <br>
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
                
            </select>
            
            <br><br>
            
            <button type="submit">Enviar</button>
            
        </form>
    </div>
    <a class="button" href="../../../../menu/indexMenu.html">Volver</a>
</body>
</html>
