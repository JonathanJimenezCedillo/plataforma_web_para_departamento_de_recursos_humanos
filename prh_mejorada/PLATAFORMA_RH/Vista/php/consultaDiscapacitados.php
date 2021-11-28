<?php

    require_once ("../../Modelo/validarSesiones.php");

    require_once("../../Modelo/consultaMostrar_modelo.php");

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_consultas.css">

    <title>CONSULTA DISCAPACIDAD</title>
</head>
<body>
    <?php include("navar.php"); ?>
    <nav class="navbar navbar-light bg-light ">
              <a class="navbar-brand">Búsqueda por nombre de la enfermedad</a>
              <form class="form-inline">
                <input id="search" class="form-control mr-sm-2" type="search" placeholder="Nombre de la enfermedad" aria-label="Search">

              </form>
    </nav>

   <div id="main" class="container">
        <div class="table-responsive-lg">

            <table class="table tabla" id="mitabla">
                    <colgroup span="5"></colgroup>
                    <thead>
                        <tr class="tabla-cabecera">
                            <th colspan="6"><h4>INFORMACIÓN</h4></th>
                        </tr>
                    </thead>
                    <tr class="columnas-tabla">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO DE DISCAPACIDAD</th>
                        <th>NOMBRE ENFERMEDAD</th>
                        <th>CARGO</th>
                        <th>FECHA DE INICIO</th>

                    </tr>

                    <tbody>
                        <?php
                             foreach ($sql as $fila) {
                         ?>
                        <tr class="tabla-cuerpo">
                            <td><?php echo $fila['idempleado']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['iddiscapacidad']; ?></td>
                            <td><?php echo $fila['nombres']; ?></td>
                            <td><?php echo $fila['idcargo']; ?></td>
                            <td><?php echo $fila['fechainicio']; ?></td>


                        </tr>
                        <?php
                            }
                            $conexion->cerrarConexion();
                        ?>
                    </tbody>
            </table>

        </div>
    </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/consultaDiscapacidades.js"></script>
</body>
</html>
