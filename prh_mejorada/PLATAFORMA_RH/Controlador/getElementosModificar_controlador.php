<?php

    require_once("../Modelo/conexion/conexion.php");
    $conexion=new Conectar;

    if (isset($_POST['id'])) {
        $id=$_POST['id'];

        $sql=$conexion->conexion()->prepare("CALL modificarEmpleados(:id)");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        $sql->execute();
        $sql=$sql->fetchAll();



        include("../Vista/php/modificar.php");
    }

 ?>
