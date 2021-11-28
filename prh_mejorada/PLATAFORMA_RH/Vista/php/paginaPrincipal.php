<?php

    require_once ("../../Modelo/validarSesiones.php");

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_paginaPrincipal.css">
    <title>RECURSOS HUMANOS</title>
</head>
<body id="pp">
    <header class="cabecera" >
        <h1 >RECURSOS HUMANOS</h1>
        <ul>
            <li> <a href="../../Modelo/salir.php">CERRAR SESIÓN</a></li>
        </ul>
    </header>

    <div class="contenedor" id="main">
        <div >

            <fieldset >

                <legend>INGRESO DE INFORMACIÓN</legend>

                <ul>
                    <li>
                        <input type="button"  class="botonimagenIngresar" onclick="enviarRegistro()">
                    </li>
                </ul>

            </fieldset>

            <fieldset >
                <legend>CONSULTAR INFORMACIÓN</legend>

                <ul>
                    <li>
                        <input type="button" class="botonimagenConsultar"
                        onclick="enviarConsulta()">
                    </li>
                </ul>

            </fieldset>

            <fieldset >
                            <legend>INFORMACION ADICIONAL</legend>

                            <ul>
                                <li>
                                    <input type="button" class="botonimagenInformacionAdicional"
                                    onclick="informacionAdicional()">
                                </li>
                            </ul>

            </fieldset>

        </div>

    </div>



    <script src="../js/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/buscaEmpleados.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/validarDiscapacidad.js"></script>
    <script src="../js/enviarDatos.js"></script>
    <script src="../js/modificar.js"></script>

</body>
</html>
