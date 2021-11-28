<?php

     require_once ("../Modelo/validarSesiones.php");
     require_once("../Modelo/consultarDatos.php");
     $datos = new ConsultaDatos;
     $cargos = $datos->consultaCargos();
     $departamentos=$datos->consultaDepartamentos();
     $categorias=$datos->consultaCategorias();


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles_ingresoInformacion.css">
    <title>MODIFICAR INFORMACIÓN</title>

</head>
<body>


    <form id="formulario"  class="formulario form-group" method="POST">
       <div class="row">
            <div class="col-6">

                <fieldset >
                    <legend>INFORMACIÓN PERSONAL</legend>

                    <label for="">NÚMERO DE EXPEDIENTE</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-2" type="text" name="numexp" value="<?php echo $fila['idnumeroempleados']; ?>" disabled>
                    <?php endforeach ?>
                    <br>
                    <label for="">NOMBRE</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9" onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="nom" value="<?php echo $fila['nombre']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">APELLIDOS</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9"  onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="apds" value="<?php echo $fila['apellidopaterno']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">SEXO</label>
                    <select class="col-9"  name="sexos" id="">
                        <?php foreach ($sql as $fila): ?>
                            <option value="<?php echo $fila['sexo']; ?>"><?php echo $fila['sexo']; ?></option>
                        <?php endforeach ?>
                            <option value="MASCULINO">MASCULINO</option>
                            <option value="FEMENINO">FEMENINO</option>
                    </select>
                    <br>
                    <label for="">ESTADO CIVIL</label>
                    <?php foreach ($sql as $fila): ?>
                        <input  class="col-9" onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="edocivil" value="<?php echo $fila['estadocivil']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">FECHA DE NACIMIENTO</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-8" type="text" name="fechNa" value="<?php echo $fila['fechanacimiento']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">CURP</label>
                    <?php foreach ($sql as $fila): ?>
                        <input  class="col-9" onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="curp" value="<?php echo $fila['curp']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">CALLE</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9" onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="calle" value="<?php echo $fila['calle']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">COLONIA</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9"  onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="colonia" value="<?php echo $fila['colonia']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">MUNICIPIO</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9"  onKeyUp="this.value=this.value.toUpperCase();"  type="text" name="muni" value=" <?php echo $fila['municipio']; ?>">
                    <?php endforeach ?>
                    <br>
                    <label for="">CÓDIGO POSTAL</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-3" type="text" name="codpostal" value=" <?php echo $fila['codigopostal']; ?> ">
                    <?php endforeach ?>
                </fieldset>
            </div>
            <div class="col-6">
                <fieldset>
                    <legend>INFORMACIÓN LABORAL</legend>

                    <label>DEPARTAMENTO</label>
                    <select class="col-9"name="depa" id="">
                        <?php foreach ($sql as $fila): ?>
                            <option value="<?php echo $fila['iddepartamentos']; ?>"><?php echo $fila['departamento']; ?>
                            </option>
                        <?php endforeach ?>

                        <?php foreach ($departamentos as $fila): ?>
                            <option value="<?php echo $fila['iddepartamentos']; ?>"><?php echo $fila['nombre']; ?>
                            </option>
                        <?php endforeach ?>
                    </select>

                    <label>CARGO</label>
                    <select class="col-10"name="cargo" id="">
                        <?php foreach ($sql as $fila): ?>
                            <option value="<?php echo $fila['idcargos']; ?>"><?php echo $fila['cargo']; ?>
                            </option>
                        <?php endforeach ?>

                        <?php foreach ($cargos as $fila): ?>
                            <option value="<?php echo $fila['idcargos']; ?>"><?php echo $fila['nombre'];?>
                            </option>
                        <?php endforeach ?>
                    </select>

                    <label>CATEGORIA</label>
                    <select class="col-9"name="categoria" id="">
                        <?php foreach ($sql as $fila): ?>
                            <option value="<?php echo $fila['idcategorias']; ?>"><?php echo $fila['categoria']; ?>
                            </option>
                        <?php endforeach ?>

                        <?php foreach ($categorias as $fila): ?>
                            <option value="<?php echo $fila['idcategorias']; ?>"><?php echo $fila['nombre']; ?>
                            </option>
                        <?php endforeach ?>
                    </select>


                    <label for="">SALARIO</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9"type="text" name="salario" value="<?php echo $fila['salario']; ?> ">
                    <?php endforeach ?>

                    <label for="">FECHA DE INICIO</label>
                    <?php foreach ($sql as $fila): ?>
                        <input class="col-9" type="text" name="fechinicio" value="<?php echo $fila['fecha']; ?> ">
                    <?php endforeach ?>

                    <button type="button" id="modificar" class="btn btn-success btn-block" onclick="modificarEmpleados()">Modificar</button>
                </fieldset>
            </div>
        </div>
    </form>

</body>
</html>
