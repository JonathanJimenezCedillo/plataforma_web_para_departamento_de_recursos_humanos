<?php

    require_once ("conexion/conexion.php");


    $salida="";
    if (isset($_POST['search'])) {
        $search=$_POST['search'];
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL buscaCargos(:valor)");
        $sql->bindParam(':valor',$search,PDO::PARAM_STR);
        $sql->execute();
        $sql=$sql->fetchAll();

    }
    if (!empty($_POST['search'])) {
    $salida.="<table class='table tabla'>
                            <colgroup span='7'></colgroup>
                            <thead>
                                <tr class='tabla-cabecera'>
                                    <th colspan='7'><h4>INFORMACIÓN</h4></th>
                                </tr>
                            </thead>
                            <tr class='columnas-tabla'>
                                <th>NÚMERO DE EMPLEADO</th>
                                <th>CARGO</th>
                                <th>DEPARTAMENTO</th>
                                <th>FECHA DE INICIO</th>
                                <th>SALARIO</th>

                                <th colspan='2'>OPCIONES</th>
                            </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                                $salida.="<tr class='tabla-cuerpo'>
                                    <td>". $fila['idempleado']."</td>
                                    <td>". $fila['idcargo']."</td>
                                    <td>". $fila['iddepartamento']."</td>
                                    <td>". $fila['fechainicio']."</td>
                                    <td>". $fila['salario']."</td>

                                </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}else{
        require_once("consultarDatos.php");
    $datos = new ConsultaDatos;
    $cargos = $datos->consultaCargosTabla();
   $salida.="<table class=' table tabla'>
                            <colgroup span='7'></colgroup>
                            <thead>
                                <tr class='tabla-cabecera'>
                                    <th colspan='7'><h4>INFORMACIÓN</h4></th>
                                </tr>
                            </thead>
                            <tr class='columnas-tabla'>
                                <th>NÚMERO DE EMPLEADO</th>
                                <th>CARGO</th>
                                <th>DEPARTAMENTO</th>
                                <th>FECHA DE INICIO</th>
                                <th>SALARIO</th>

                                <th colspan='2'>OPCIONES</th>
                            </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                                $salida.="<tr class='tabla-cuerpo'>
                                    <td>". $fila['idempleado']."</td>
                                    <td>". $fila['idcargo']."</td>
                                    <td>". $fila['iddepartamento']."</td>
                                    <td>". $fila['fechainicio']."</td>
                                    <td>". $fila['salario']."</td>

                                </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}



?>
