<?php
$tituloPagina = "Ejemplo Grafico";
include_once '../estructura/cabecera.php';
?>

<body>
    <script src="../js/chart.js/node_modules/chart.js/dist/chart.umd.js"></script>
    <div class="botones-container">
        <button class="boton" ><a href="../accion/graficoBarra.php" target="_blank">
                <img src="../img/barra.png" alt="PDF" width="30" height="30"> Grafico de Barra</a></button>
        <button type="submit" class="boton"><a href="../accion/graficoDona.php">
                <img src="../img/dona.png" alt="PDF" width="30" height="30">Grafico de Dona</a></button>
        <button type="submit" class="boton"><a href="../accion/graficoTorta.php">
                <img src="../img/torta.png" alt="PDF" width="30" height="30">Grafico de Torta</a></button>
    </div>
    <?php
    $abmpersona = new AbmPersona();
    $personas = $abmpersona->buscar("");
    $abmauto = new AbmAuto();
    $cadena = "";
    foreach ($personas as $persona) {
        $autos = $abmauto->buscar(["DniDuenio" => $persona['NroDni']]);
        $cant = count($autos);
        $cadena .= '<div class="personaGrafico"><input type="hidden" class="nombreGrafico" value="' . $persona['Nombre'] . ' ' . $persona['Apellido'] . '"> <input type="hidden" class="cantidadGrafico" value="' . $cant . '"> </div>';
    }
    echo $cadena;
    ?>
    <div class="container">
        <canvas id="chartCanvas"></canvas>
    </div>

    <script type="module" src="../js/graficoTorta.js"></script>

    <?php
    include_once '../estructura/footer.php';
    ?>
</body>