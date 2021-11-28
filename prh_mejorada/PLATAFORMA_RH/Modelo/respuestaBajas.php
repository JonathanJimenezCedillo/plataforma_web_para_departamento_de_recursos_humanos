<?php

    require_once ("conexion/conexion.php");


    $salida="";
    if (isset($_POST['search'])) {
        $search=$_POST['search'];
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL buscaBajas(:valor)");
        $sql->bindParam(':valor',$search,PDO::PARAM_STR);
        $sql->execute();
        $sql=$sql->fetchAll();





    }
    if (!empty($_POST['search'])) {
    $salida.="<table class='table tabla'>
                    <colgroup span='4'></colgroup>
                    <thead>
                        <tr class='tabla-cabecera'>
                            <th colspan='7'><h4>INFORMACIÓN</h4></th>
                        </tr>
                    </thead>
                    <tr class='columnas-tabla'>
                        <th>ID BAJA</th>
                        <th>NUMERO DE EMPLEADO</th>
                        <th>CARGO</th>
                        <th>FECHA DE BAJA</th>
                        <th colspan='7'>OPCIONES</th>
                    </tr>

                            <tbody>";
                foreach ($sql as $fila) {
                   $salida.="<tr class='tabla-cuerpo'>
                   <td>". $fila['idbaja']."</td>
                    <td>". $fila['idempleado']."</td>
                    <td>".$fila['idscargos']."</td>
                    <td>". $fila['fechabaja']."</td>


                <td>
                    <button id='modificar' onclick='eliminarBajas(".$fila['idempleado'].")'>
                        <img src='../img/logos/borrar.png' alt=''></button>
                </td>
            </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}else{
        require_once("consultarDatos.php");
    $datos = new ConsultaDatos;
    $cargos = $datos->consultaBajas();
   $salida.="<table class='table tabla'>
                    <colgroup span='4'></colgroup>
                    <thead>
                        <tr class='tabla-cabecera'>
                            <th colspan='7'><h4>INFORMACIÓN</h4></th>
                        </tr>
                    </thead>
                    <tr class='columnas-tabla'>
                        <th>ID BAJA</th>
                        <th>NUMERO DE EMPLEADO</th>
                        <th>CARGO</th>
                        <th>FECHA DE BAJA</th>
                        <th colspan='7'>OPCIONES</th>
                    </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                   $salida.="<tr class='tabla-cuerpo'>
                       <td>". $fila['idbaja']."</td>
                        <td>". $fila['idempleado']."</td>
                        <td>".$fila['idscargos']."</td>
                        <td>". $fila['fechabaja']."</td>


                <td>
                    <button id='modificar' onclick='eliminarBajas(".$fila['idempleado'].")'>
                        <img src='../img/logos/borrar.png' alt=''></button>
                </td>
            </tr>";
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}



?>
