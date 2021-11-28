<?php
     require_once ("../../Modelo/validarSesiones.php");
      require_once("../../Modelo/consultarDatos.php");
    $datos = new ConsultaDatos;
    $categoriasT = $datos->tablaCategorias();
    $cargosT = $datos->tablaCargos();
    $departamentosT = $datos->tablaDepartamentos();
    $dependenciasT = $datos->tablaDependencias();
    $discapacidadesT = $datos->tablaDiscapacidades();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>INFORMACION ADICIONAL </title>
</head>
<body>
        <h1>INFORMACION ADICIONAL </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <table class="table table-responsive table-striped">
                    <caption> Tabla de Categorias</caption>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Código de Identifiación</th>
                      <th scope="col">Categoría</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($categoriasT as $fila): ?>
                      <tr class="tabla-cuerpo">
                          <td><?php echo $fila['idcategorias']; ?></td>
                          <td><?php echo $fila['nombre']; ?></td>

                    </tr>
                      <?php endforeach ?>
                  </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-responsive table-striped">
                  <caption>Tabla de Cargos</caption>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Código de Identifiación</th>
                      <th scope="col">Categoría</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($cargosT as $fila): ?>
                      <tr class="tabla-cuerpo">
                          <td><?php echo $fila['idcargos']; ?></td>
                          <td><?php echo $fila['nombre']; ?></td>

                    </tr>
                      <?php endforeach ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <table class="table table-responsive table-striped">
                    <caption>Tabla de Departamentos</caption>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Código de Identifiación</th>
                      <th scope="col">Departamentos</th>
                      <th scope="col">Dependencias</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($departamentosT as $fila): ?>
                      <tr class="tabla-cuerpo">
                          <td><?php echo $fila['iddepartamentos']; ?></td>
                          <td><?php echo $fila['nombre']; ?></td>
                          <td><?php echo $fila['iddependencia']; ?></td>

                    </tr>
                      <?php endforeach ?>
                  </tbody>
                </table>
            </div>

             <div class="col-md-4">

                <table class="table table-responsive table-striped">
                    <caption>Tabla de Discapacidades</caption>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Código de Identifiación</th>
                      <th scope="col">Tipo</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($discapacidadesT as $fila): ?>
                      <tr class="tabla-cuerpo">
                          <td><?php echo $fila['iddiscapacidades']; ?></td>
                          <td><?php echo $fila['tipo']; ?></td>

                    </tr>
                      <?php endforeach ?>
                  </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <table class="table table-responsive table-striped">
                    <caption>Tabla de Dependencias</caption>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Código de Identifiación</th>
                      <th scope="col">Dependencias</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dependenciasT as $fila): ?>
                      <tr class="tabla-cuerpo">
                          <td><?php echo $fila['iddependencias']; ?></td>
                          <td><?php echo $fila['nombre']; ?></td>

                    </tr>
                      <?php endforeach ?>
                  </tbody>
                </table>
            </div>



        </div>
    </div>
</body>
</html>
