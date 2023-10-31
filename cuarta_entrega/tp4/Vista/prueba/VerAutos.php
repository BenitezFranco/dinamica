<!DOCTYPE html>
<html>

<head>
    <title>Gráfico de Autos por Dueño</title>
    <!-- Incluir la librería Chart.js desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php
    // Configuración inicial, se asume que estás incluyendo las bibliotecas necesarias
    $tituloPagina = "Ejercicio 3 - TP4";
    include_once '../estructura/cabecera.php';

    $objAbmAuto = new AbmAuto();
    $listaAuto = [];
    $null = NULL;
    $listaAuto = $objAbmAuto->buscar($null);

    $duenos = [];
    $cantidadesAutos = [];

    if (is_array($listaAuto) && count($listaAuto) > 0) {
        foreach ($listaAuto as $objAuto) {
            $dueno = $objAuto["DniDuenio"]["Nombre"] . ' ' . $objAuto["DniDuenio"]["Apellido"];
            if (array_key_exists($dueno, $duenos)) {
                $duenos[$dueno]++;
            } else {
                $duenos[$dueno] = 1;
            }
        }

        // Crear arreglos con nombres de dueños y cantidades de autos
        $nombresDuenos = json_encode(array_keys($duenos)); // Convertir a JSON
        $cantidadAutos = json_encode(array_values($duenos)); // Convertir a JSON
    }
    ?>
    <!-- Título y tabla con datos de autos -->
    <h3>Autos cargados</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nombre Dueño</th>
                <th>Apellido Dueño</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (is_array($listaAuto) && count($listaAuto) > 0) {
                foreach ($listaAuto as $objAuto) {
                    echo '<tr>';
                    echo '<td>' . $objAuto["Patente"] . '</td>';
                    echo '<td>' . $objAuto["Marca"] . '</td>';
                    echo '<td>' . $objAuto["Modelo"] . '</td>';
                    echo '<td>' . $objAuto["DniDuenio"]["Nombre"] . '</td>';
                    echo '<td>' . $objAuto["DniDuenio"]["Apellido"] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="7">No hay datos cargados.</td></tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Título y elemento canvas para el gráfico -->
    <h3>Gráfico de Autos por Dueño</h3>
    <canvas id="chartDuenos"></canvas>

    <!-- Pasar datos de PHP al archivo JavaScript mediante atributos de datos -->
    <script>
        // Crear un objeto de configuración de datos
        var chartData = {
            nombresDuenos: <?php echo $nombresDuenos; ?>,
            cantidadAutos: <?php echo $cantidadAutos; ?>
        };
        // Adjuntar el objeto de configuración a un atributo de datos en el elemento canvas
        var canvasElement = document.getElementById('chartDuenos');
        canvasElement.dataset.chartData = JSON.stringify(chartData);
    </script>
    
    <!-- Incluir el archivo de JavaScript separado -->
    <script src="./chartsPrueba.js"></script>

    <?php
    // Incluir el pie de página
    include_once("../estructura/footer.php");
    ?>
</body>

</html>
