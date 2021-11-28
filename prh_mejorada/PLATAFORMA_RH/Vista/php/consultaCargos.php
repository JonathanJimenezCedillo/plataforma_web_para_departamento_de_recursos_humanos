<?php
     require_once ("../../Modelo/validarSesiones.php");
      require_once("../../Modelo/consultarDatos.php");
    $datos = new ConsultaDatos;
    $cargos = $datos->consultaCargosTabla();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_consultas.css">
    <title>CONSULTA CARGOS</title>
</head>
<body>
    <?php include("navar.php"); ?>
    <nav class="navbar navbar-light bg-light ">
              <a class="navbar-brand">Búsqueda por cargo o departamento</a>
              <form class="form-inline">
                <input id="search" class="form-control mr-sm-2" type="search" placeholder="Ingresa el cargo/departamento" aria-label="Search">

              </form>
            </nav>

            <div  class="container" style="margin: auto;">
                <div class="row">
                    <div class="table-responsive" id="main">
                        <table class=" table tabla">
                        <colgroup span="7"></colgroup>
                        <thead>
                            <tr class="tabla-cabecera">
                                <th colspan="7"><h4>INFORMACIÓN</h4></th>
                            </tr>
                        </thead>
                        <tr class="columnas-tabla">
                            <th>NÚMERO DE EMPLEADO</th>
                            <th>CARGO</th>
                            <th>DEPARTAMENTO</th>
                            <th>FECHA DE INICIO</th>
                            <th>SALARIO</th>

                        </tr>

                        <tbody>
                            <tr class="tabla-cuerpo">
                                <?php foreach ($cargos as $fila): ?>
                                    <td><?php echo $fila['idempleado']; ?></td>
                                    <td><?php echo $fila['idcargo']; ?></td>
                                    <td><?php echo $fila['iddepartamento']; ?></td>
                                    <td><?php echo $fila['fechainicio']; ?></td>
                                    <td><?php echo $fila['salario']; ?></td>

                            </tr>
                                <?php endforeach ?>
                        </tbody>
                        </table>


                    </div>
                </div>
            </div>

    <script src="../js/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/buscaCargos.js"></script>
</body>
</html>
