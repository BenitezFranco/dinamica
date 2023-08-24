<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <title>Bootstrap</title> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
   <div class="panel panel-default">
   <div class="panel-heading">

            <h1 class="panel-title"> <i class="glyphicon glyphicon-edit"></i> Cinem@s</h1>
         </div> 
         <div class="panel-body"> 
         <form class="row g-3 needs-validation" id="miFormulario" method="get" action="resultado.php" novalidate>
            <table class="table">
                <tr>
                    <td> <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><b>Titulo</b></label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" required>
                        <div class="valid-feedback">
                        Bien!
                        </div>
                         </div> </td>
                    <td> 
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label"><b>Actores</b></label>
                        <input type="text" name="actores" class="form-control" id="actores" placeholder="Actores" required>
                        <div class="valid-feedback">
                       Bien!
                        </div>
                    </div>
                    </td>
            </tr>
            <tr>
                <td> <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><b>Director</b></label>
                        <input type="text" name="director" class="form-control" id="director" placeholder="Director" required>
                        <div class="valid-feedback">
                        Bien!
                        </div>
                         </div>

                </td>
                <td>
                <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><b>Guion</b></label>
                        <input type="text" name="guion" class="form-control" id="guion" placeholder="Guion" required>
                        <div class="valid-feedback">
                        Bien!
                        </div>
                         </div>

                </td>

            </tr>
            <tr>
                <td>   <div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><b>Produccion</b></label>
                        <input type="text" name="produccion" class="form-control" id="produccion" required>
                        <div class="valid-feedback">
                        Bien!
                        </div>
                         </div>

                </td>
                <td> <div class="col-md-4">
                    <label for="validationCustom01" class="form-label"><b>Año</b></label>
                    <input type="text" name="anio" class="form-control" id="anio" required maxlength="4" pattern="\d{4}">
                    <div class="valid-feedback">
                   Bien!
                    </div>
                    </div>

                </td>
            </tr>
            <tr>
                <td><div class="col-md-12">
                        <label for="validationCustom01" class="form-label"><b>Nacionalidad</b></label>
                        <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" required>
                        <div class="valid-feedback">
                        Bien!
                        </div>
                         </div>

                </td>
                <td>  <div class="col-md-3">
    <label for="validationCustom04" class="form-label"><b>Genero</b></label>
    <select class="form-select" name="genero" id="genero" required>
      <option>Comedia</option>
      <option>Drama</option>
      <option>Terror</option>
      <option>Romanticas</option>
      <option>Suspenso</option>
      <option>Otras</option>
    </select>
    <div class="invalid-feedback">
      Seleccione un genero valido.
    </div>
  </div>
                
                </td>
            </tr>

            </table>
            <div class="col-md-4">
                    <label for="validationCustom01" class="form-label"><b>Duracion</b></label>
                    <input type="text" name="duracion" class="form-control" id="duracion" required maxlength="3" pattern="\d{3}">(minutos)
                    <div class="valid-feedback">
                   Bien!
                    </div>
                    </div>



                    <div class="col-md-8">
                    <label for="validationCustom01" class="form-label"><b>Restricciones de edad</b></label><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Todo publico" required>
                    <label class="form-check-label" for="inlineRadio1">Todo Público</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Mayores de 7 años">
                    <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion" value="Mayores de 18 años" >
                    <label class="form-check-label" for="inlineRadio3">Mayores de 18 años</label>
                    </div>
                    </div>


                    <div class="mb-3">
                    <label for="validationTextarea" class="form-label"><b>Sinopsis</b></label>
                    <textarea class="form-control" name="sinopsis" id="sinopsis" required></textarea>
                    <div class="invalid-feedback">
                    Por favor ingrese una sinopsis.
                    </div>
                    </div>



 
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="submit">Enviar</button>
    <button class="btn btn-secondary" type="reset" id="btn-clear">Borrar</button>
  </div>
</form>          
         </div>
      </div>
   </div>

   <script src="ejercicio4.js"></script>
</body>
</html>