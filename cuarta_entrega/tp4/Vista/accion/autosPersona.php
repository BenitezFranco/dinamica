<?php
$tituloPagina="Lista Autos personas";
    include_once '../estructura/cabecera.php';
    $abmPersona= new AbmPersona();
    $param = data_submitted();
    $array= $abmPersona->buscar($param);
    if(count($array)>0){
        $persona=$array[0];
        $abmAuto= new AbmAuto();
        $aux= ["DniDuenio"=>$persona["NroDni"]];
        $autos = $abmAuto->buscar($aux);
    }else{
        $persona = null;
    }
?>



<!DOCTYPE html>
<html>
<head>
  <!-- Enlace a Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="border">
    <button class="btn btn-primary float-right mb-2">
  <a href="../accion/pdfAutosPersona.php?dni=<?php echo $persona["NroDni"]; ?>" target="_blank" class="text-light">
    <img src="../img/pdf.png" alt="PDF" width="30" height="30"> Generar PDF
  </a>
</button>


      <div class="clearfix"></div>

      <!-- Tabla de personas -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Número DNI</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Fecha Nacimiento</th>
            <th>Teléfono</th>
            <th>Domicilio</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $persona["NroDni"]; ?></td>
            <td><?php echo $persona["Apellido"]; ?></td>
            <td><?php echo $persona["Nombre"]; ?></td>
            <td><?php echo $persona["fechaNac"]; ?></td>
            <td><?php echo $persona["Telefono"]; ?></td>
            <td><?php echo $persona["Domicilio"]; ?></td>
          </tr>
        </tbody>
      </table>

      <!-- Tabla de autos -->
      <div>
        <h4>Autos</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="bg-dark text-light">Patente</th>
              <th class="bg-dark text-light">Marca</th>
              <th class="bg-dark text-light">Modelo</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(count($autos) > 0){
                foreach($autos as $auto){
                  echo '<tr>';
                  echo '<td>'.$auto["Patente"].'</td>';
                  echo '<td>'.$auto["Marca"].'</td>';
                  echo '<td>'.$auto["Modelo"].'</td>';
                  echo '</tr>';
                }
              } else {
                echo '<tr><td colspan="3">No hay autos</td></tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <button class="btn btn-secondary"><a href="../Ejercicio 5/listaPersonas.php" class="text-white">Volver a listar clientes</a></button>
  </div>

  <!-- Scripts de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


<!-- fin prueba -->
