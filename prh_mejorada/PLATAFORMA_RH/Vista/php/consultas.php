<?php

    require_once ("../../Modelo/validarSesiones.php");

    require_once ("../../Modelo/consultaMostrarDatos_modelo.php");

 ?>
<!DOCTYPE html>
<html lang="es" id="pp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_consultas.css">
    <title>CONSULTA DE EMPLEADOS</title>
</head>
<body>


        <?php include("navar.php"); ?>

            <nav class="navbar navbar-light bg-light ">
              <a class="navbar-brand">Búsqueda por número de empleado o categoría</a>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" id="search" placeholder="Ingresa #empleado/categoría" aria-label="Search">
              </form>
            </nav>

        <div  id="main">
                <table class="tabla" >
                            <colgroup span="16"></colgroup>
                            <thead>
                                <tr class="tabla-cabecera">
                                    <th colspan="15"><h4>INFORMACIÓN</h4></th>
                                </tr>
                            </thead>
                            <tr class="columnas-tabla">
                                <th>NÚMERO DE EMPLEADO</th>
                                <th>NOMBRE</th>
                                <th>APELLIDOS</th>
                                <th>FECHA DE NACIMIENTO</th>
                                <th>SEXO</th>
                                <th>ESTADO CIVIL</th>
                                <th>CURP</th>
                                <th>CALLE</th>
                                <th>COLONIA</th>
                                <th>MUNICIPIO</th>
                                <th>CP</th>
                                <th>CATEGORIA</th>
                                <th colspan="2">OPCIONES</th>
                            </tr>

                            <tbody>
                                <?php
                                    foreach ($sql as $fila) {

                                 ?>
                                <tr idElement="<?php echo $fila['idnumeroempleados']; ?>"   class="tabla-cuerpo">
                                    <td ><?php echo $fila['idnumeroempleados']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['apellidopaterno']; ?></td>
                                    <td><?php echo $fila['fechanacimiento']; ?></td>
                                    <td><?php echo $fila['sexo']; ?></td>
                                    <td><?php echo $fila['estadocivil']; ?></td>
                                    <td><?php echo $fila['curp']; ?></td>
                                    <td><?php echo $fila['calle']; ?></td>
                                    <td><?php echo $fila['colonia']; ?></td>
                                    <td><?php echo $fila['municipio']; ?></td>
                                    <td><?php echo $fila['codigopostal']; ?></td>
                                    <td><?php echo $fila['idcategoria']; ?></td>
                                    <td>
                                        <button id='modificar' class='botonModificar'>
                                            <img src='../img/logos/actualizarInformacion.jpg'>
                                        </button>
                                    </td>

                                    <td>
                                        <button class=' fas fa-trash-alt btn btn-danger' data-toggle='modal' data-target='#modalEliminar' id='eliminar'>
                                            <img src='../img/logos/borrar.png' alt=''></button>
                                    </td>
                                </tr>
                                <?php
                                    include("modal_vista.php");
                                    }
                                    $conexion->cerrarConexion();
                                 ?>
                            </tbody>
                </table>
        </div>
    <script src="../js/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/buscaEmpleados.js"></script>
    <script src="../js/datosModificados.js"></script>
    <script src="../js/modificarEmpleados.js"></script>

</body>
</html>

