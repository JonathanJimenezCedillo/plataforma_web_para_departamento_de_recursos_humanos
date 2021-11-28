<?php
    require_once("../../Modelo/validarSesiones.php");
    require_once("../../Modelo/consultarDatos.php");
    $datos = new ConsultaDatos;
    $documentos = $datos->consultaDucumentos();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_consultas.css">
    <title>CONSULTA DOCUMENTOS</title>
</head>
<body>
    <?php include("navar.php"); ?>

    <div class="container">

        <div class="table-responsive-lg">
            <table class="tabla">
                <colgroup span="11"></colgroup>
                <thead>
                    <tr class="tabla-cabecera">
                        <th colspan="11"><h4>INFORMACIÓN</h4></th>
                    </tr>
                </thead>
                <tr class="columnas-tabla">
                    <th>ID</th>
                    <th>ACTA DE NACIMIENTO</th>
                    <th>CURP</th>
                    <th>CURRICULUM VITAE (CV)</th>
                    <th>INE</th>
                    <th>COMPROBANTE DE DOMICILIO</th>
                    <th>CROQUIS</th>
                    <th>REFERENCIAS LABORALES (2)</th>
                    <th>FOTO</th>
                    <th colspan="2">OPCIONES</th>
                </tr>

                <tbody>
                    <?php foreach ($documentos as $fila): ?>
                    <tr class="tabla-cuerpo">
                            <td><?php echo $fila['iddocumentaciones']?></td>
                            <td><iframe src="../../<?php echo $fila['acta'];?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['curp'] ?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['cv'] ?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['ine'] ?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['comprobante'] ?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['croquis'] ?>" height="40" width="130"></iframe></td>
                            <td><iframe src="../../<?php echo $fila['referencias'] ?>" height="40" width="130"></iframe></td>
                            <td><img src="../../<?php echo $fila['foto']; ?>" height="40" width="40" ></td>


                        <td>
                            <button onclick="modificarDocumentos(<?php echo $fila['iddocumentaciones'] ?>)">
                                <img src="../img/logos/actualizarInformacion.jpg" alt="">
                            </button>
                        </td>

                    </tr>
                         <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="container bg-secondary" id="main"></div>

    </div>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/modificar.js"></script>
    <script src="../js/modificarArchivos.js"></script>
    <script src="../js/enviarDatos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
