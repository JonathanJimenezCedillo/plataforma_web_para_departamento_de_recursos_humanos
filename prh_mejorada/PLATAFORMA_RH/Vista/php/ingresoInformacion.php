<?php

  require_once ("../../Modelo/validarSesiones.php");
  require_once("../../Modelo/consultarDatos.php");
  $datos = new ConsultaDatos;
  $departamentos = $datos->consultaDepartamentos();
  $categorias = $datos->consultaCategorias();
  $discapacidades = $datos->consultaTipoDiscapacidad();
  $cargos = $datos->consultaCargos();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_ingresoInformacion.css">
    <title>INGRESO DE INFORMACIÓN</title>

</head>
<body>

    <form id="ingresarDatos" class="formulario" enctype="multipart/form-data" method="POST">
        <fieldset>
            <legend>INFORMACIÓN PERSONAL</legend>

                <label for="exp">NÚMERO DE EXPEDIENTE</label>
                <input type="text" id="exp" name="numexp"  required>

                <label for="n">NOMBRE</label>
                <input type="text" id="n" name="nom" onKeyUp="this.value=this.value.toUpperCase();"  required>

                <label for="aps">APELLIDOS</label>
                <input type="text" id="aps" name="apds" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="sx">SEXO</label>
                <select name="sexos" id="sx">
                    <option value="MASCULINO">MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>
                </select>

                <label for="ec">ESTADO CIVIL</label>
                <input type="text" id="ec" name="edocivil" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="fn">FECHA DE NACIMIENTO</label>
                <input type="date" name="fechNa" id="fn"required>

                <label for="c">CURP</label>
                <input type="text" id="c" name="curp" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="c">CALLE</label>
                <input type="text" id="c" name="calle" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="col">COLONIA</label>
                <input type="text" id="col" name="colonia" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="m">MUNICIPIO</label>
                <input type="text" id="m" name="muni" onKeyUp="this.value=this.value.toUpperCase();"required>

                <label for="cp">CÓDIGO POSTAL</label>
                <input type="number" name="codpostal" id="cp" required>



        </fieldset>

        <fieldset>
            <legend>INFORMACIÓN LABORAL</legend>
                <label for="dep"> DEPARTAMENTO</label>

                <select name="depa" id="dep">
                    <?php foreach ($departamentos as $fila ): ?>
                        <option value="<?php echo $fila['iddepartamentos'];?>"><?php echo $fila['nombre']; ?></option>
                    <?php endforeach ?>
                </select>

                <label for="cate">CATEGORIA</label>

                <select name="categoria" id="cate">
                    <?php foreach ($categorias as $fila): ?>
                        <option value="<?php echo $fila['idcategorias']; ?>"><?php echo $fila['nombre']; ?></option>
                    <?php endforeach ?>
                </select>

                <label for="cate">CARGOS</label>
                <select name="cargo" id="carg">
                    <?php foreach ($cargos as $fila): ?>
                        <option value="<?php echo $fila['idcargos']; ?>">
                            <?php echo $fila['nombre']; ?>
                        </option>
                    <?php endforeach ?>
                </select>

                <label for="sal">SALARIO</label>
                <input type="number" id="sal" name="salario" required>

                <label for="fi">FECHA DE INICIO</label>
                <input type="date" id="fi" name="fechinicio" required>

                <legend>DOCUMENTACION</legend>

                <label for="fo">FOTOGRAFÍA</label>
                <input type="file" id="fo" name="foto" accept="image/*">

                <label for="acta">ACTA DE NACIMIENTO</label>
                <input type="file" id="acta" name="actanaci" accept="application/pdf">

                <label for="crps">CURP</label>
                <input type="file" id="crps" name="doccurp" accept="application/pdf">

                <label for="cvitae">CURRICULUM VITAE (CV)</label>
                <input type="file" id="cvitae" name="cv" accept="application/pdf">

                <label for="identificacion">INE</label>
                <input type="file" id="identificacion" name="ine" accept="application/pdf">

                <label for="compdomi">COMPROBANTE DE DOMICILIO</label>
                <input type="file" id="compdomi" name="cd" accept="application/pdf">

                <label for="croq">CROQUIS</label>
                <input type="file" id="croq" name="croquis" accept="application/pdf">

                <label for="rl">(2) REFERENCIAS LABORALES</label>
                <input type="file" id="rl" name="reflaborales" accept="application/pdf">
                <input type="button" value="Ingresar" name="btn_enviar" id="btn_enviar" onclick="enviarDatos()">

        </fieldset>
    </form>
    <a href='../Vista/php/consultas.php'></a>
    <div id="respuesta">
            <p>¿Tienes alguna Discapacidad?</p>
                <input type="button" value="SI" name="" id="Tengo" class="discapacidad" onclick="habilitarCampos('abrirVentana')">

                <div class="ventanaEmergente" id="abrirVentana">
                    <form id="formDiscapacidad" method="POST">
                        <label for="exp">NÚMERO DE EXPEDIENTE</label>
                        <input type="text" id="exp" name="numexp" >
                        <br>
                        <label for="td">TIPO DE DISCAPACIDAD</label>
                        <select id="td" name="tipodiscap">
                             <?php foreach ($discapacidades as $fila): ?>
                                <option value="<?php echo $fila['iddiscapacidades']; ?>"><?php echo $fila['tipo']; ?></option>
                            <?php endforeach ?>
                        </select>
                        <br>
                        <label for="d">NOMBRE DE LA DISCAPACIDAD</label>
                        <input type="text" id="d" name="discap" onKeyUp="this.value=this.value.toUpperCase();">
                        <input type="button" id="btnDispacacidad" value="Enviar" onclick="enviarDatosDiscapacidades();">
                    </form>
                </div>

    </div>


</body>
</html>
