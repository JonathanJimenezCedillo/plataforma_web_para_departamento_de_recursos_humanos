<?php

    require_once ("conexion/conexion.php");


    $salida="";
    if (isset($_POST['search'])) {
        $search=$_POST['search'];
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL buscarEmpleados(:valor)");
        $sql->bindParam(':valor',$search,PDO::PARAM_STR);
        $sql->execute();
        $sql=$sql->fetchAll();
    }
    if (!empty($_POST['search'])) {
    $salida.="<table class='tabla'>
                            <colgroup span='16'></colgroup>
                            <thead>
                                <tr class='tabla-cabecera'>
                                    <th colspan='15'><h4>INFORMACIÓN</h4></th>
                                </tr>
                            </thead>
                            <tr class='columnas-tabla'>
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
                                <th colspan='2'>OPCIONES</th>
                            </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                                $salida.="<tr idElement=". $fila['idnumeroempleados']." class='tabla-cuerpo'>
                                    <td>". $fila['idnumeroempleados']."</td>
                                    <td>". $fila['nombre']."</td>
                                    <td>". $fila['apellidopaterno']."</td>
                                    <td>". $fila['fechanacimiento']."</td>
                                    <td>". $fila['sexo']."</td>
                                    <td>". $fila['estadocivil']."</td>
                                    <td>". $fila['curp']."</td>
                                    <td>". $fila['calle']."</td>
                                    <td>". $fila['colonia']."</td>
                                    <td>". $fila['municipio']."</td>
                                    <td>". $fila['codigopostal']."</td>
                                    <td>". $fila['idcategoria']."</td>
                                    <td>
                                        <button id='modificar' class='botonModificar'>
                                            <img src='../img/logos/actualizarInformacion.jpg'>
                                        </button>
                                    </td>

                                    <td>
                                        <button class=' fas fa-trash-alt btn btn-danger' data-toggle='modal' data-target='#modalEliminar' id='eliminar'>
                                            <img src='../img/logos/borrar.png' alt=''></button>
                                    </td>
                                </tr>";
                                 include("../Vista/php/modal_vista.php");
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}else{
        $conexion = new Conectar;
        $sql=$conexion->conexion()->prepare("CALL datosEmpleados()");
        $sql->execute();
        $sql=$sql->fetchAll();
  $salida.="<table class='tabla'>
                            <colgroup span='16'></colgroup>
                            <thead>
                                <tr class='tabla-cabecera'>
                                    <th colspan='15'><h4>INFORMACIÓN</h4></th>
                                </tr>
                            </thead>
                            <tr class='columnas-tabla'>
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
                                <th colspan='2'>OPCIONES</th>
                            </tr>

                            <tbody>";
                            foreach ($sql as $fila) {
                                $salida.="<tr idElement=". $fila['idnumeroempleados']." class='tabla-cuerpo'>
                                    <td>". $fila['idnumeroempleados']."</td>
                                    <td>". $fila['nombre']."</td>
                                    <td>". $fila['apellidopaterno']."</td>
                                    <td>". $fila['fechanacimiento']."</td>
                                    <td>". $fila['sexo']."</td>
                                    <td>". $fila['estadocivil']."</td>
                                    <td>". $fila['curp']."</td>
                                    <td>". $fila['calle']."</td>
                                    <td>". $fila['colonia']."</td>
                                    <td>". $fila['municipio']."</td>
                                    <td>". $fila['codigopostal']."</td>
                                    <td>". $fila['idcategoria']."</td>
                                     <td>
                                        <button id='modificar' class='botonModificar'>
                                            <img src='../img/logos/actualizarInformacion.jpg'>
                                        </button>
                                    </td>

                                    <td>
                                        <button class=' fas fa-trash-alt btn btn-danger' data-toggle='modal' data-target='#modalEliminar' id='eliminar'>
                                            <img src='../img/logos/borrar.png' alt=''></button>
                                    </td>
                                </tr>";
                                include("../Vista/php/modal_vista.php");
                            }

        $salida.=" </tbody>
                </table>";
    $conexion->cerrarConexion();

    echo $salida;
}



?>

