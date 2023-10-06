<?php 
    $tituloPagina="Ejemplo Grafico";
    include_once '../estructura/cabecera.php';
?>
<body>
    <script src="../js/chart.js/node_modules/chart.js/dist/chart.umd.js"></script>

    <?php
    $abmpersona= new AbmPersona();
    $personas= $abmpersona->buscar("");
    $abmauto= new AbmAuto();
    $cadena="";
    foreach($personas as $persona){
        $autos= $abmauto->buscar(["DniDuenio"=> $persona['NroDni']]);
        $cant= count($autos);
        $cadena .='<div class="personaGrafico"><input type="hidden" class="nombreGrafico" value="'.$persona['Nombre'].' '.$persona['Apellido'].'"> <input type="hidden" class="cantidadGrafico" value="'.$cant.'"> </div>';
    }
    echo $cadena;
    ?>
    <div class="container">
    <canvas id="chartCanvas"></canvas>
    </div>
    
    <script type="module" src="../js/ejemploGrafico.js"></script>
    
<?php
    include_once '../estructura/footer.php';
    ?>
</body>