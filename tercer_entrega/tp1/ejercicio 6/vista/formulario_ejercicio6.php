<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Ejercicio 5</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Datos Personales con Estudios y Sexo</h1>
        <form action="accion/a_formulario.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
        
            
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
    <a class="button" href="../../../menu/indexMenu.html">Volver</a>
</body>
</html>
