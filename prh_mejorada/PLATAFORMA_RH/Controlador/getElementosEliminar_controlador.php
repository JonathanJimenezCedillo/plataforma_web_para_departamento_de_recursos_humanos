<?php

    require_once("../Modelo/conexion/conexion.php");
    $conexion=new Conectar;

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql=$conexion->conexion()->prepare("CALL eliminarEmpleados(:id)");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        $sql->execute();
        $sql=$sql->fetchAll();

        echo "<a href='consultas.php' style='text-align:center;'><h2>Consultar</h2></a>";
    }

 ?>
