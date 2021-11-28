<?php

    require_once ("conexion/conexion.php");


    $salida="";
    if (isset($_POST['search'])) {
        $search=$_POST['search'];
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL buscaDiscapacidad(:valor)");
        $sql->bindParam(':valor',$search,PDO::PARAM_STR);
        $sql->execute();
        $sql=$sql->fetchAll();
    }
    if (!empty($_POST['search'])) {
    $salida.="<table class='table tabla' id='mitabla'>
                    <colgroup span='5'></colgroup>
                    <thead>
                        <tr class='tabla-cabecera'>
                            <th colspan='6'><h4>INFORMACIÓN</h4></th>
                        </tr>
                    </thead>
                    <tr class='columnas-tabla'>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO DE DISCAPACIDAD</th>
                        <th>NOMBRE ENFERMEDAD</th>
                        <th>CARGO</th>
                        <th>FECHA DE INICIO</th>

                    </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                                $salida.="<tr class='tabla-cuerpo'>
                            <td>". $fila['idempleado'] ."</td>
                            <td>". $fila['nombre'] ."</td>
                            <td>". $fila['iddiscapacidad'] ."</td>
                            <td>". $fila['nombres'] ."</td>
                            <td>". $fila['idcargo'] ."</td>
                            <td>". $fila['fechainicio'] ."</td>

                        </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}else{
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL consultaTrabajo_con_Discapacidades()");
        $sql->execute();
        $sql=$sql->fetchAll();
   $salida.="<table class='table tabla' id='mitabla'>
                    <colgroup span='5'></colgroup>
                    <thead>
                        <tr class='tabla-cabecera'>
                            <th colspan='6'><h4>INFORMACIÓN</h4></th>
                        </tr>
                    </thead>
                    <tr class='columnas-tabla'>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO DE DISCAPACIDAD</th>
                        <th>NOMBRE ENFERMEDAD</th>
                        <th>CARGO</th>
                        <th>FECHA DE INICIO</th>

                    </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                     $salida.="<tr class='tabla-cuerpo'>
                            <td>". $fila['idempleado'] ."</td>
                            <td>". $fila['nombre'] ."</td>
                            <td>". $fila['iddiscapacidad'] ."</td>
                            <td>". $fila['nombres'] ."</td>
                            <td>". $fila['idcargo'] ."</td>
                            <td>". $fila['fechainicio'] ."</td>

                        </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}



?>
