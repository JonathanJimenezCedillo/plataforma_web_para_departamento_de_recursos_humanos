<?php
     require_once("conexion/conexion.php");

    $conexion = new Conectar;

    $sql=$conexion->conexion()->prepare("CALL consultaTrabajo_con_Discapacidades()");
    $sql->execute();
     /*fetchAll()--> Devuelve un array que contiene todas las filas de nuestra consulta guardada en la variable $sql, y la almacenamis en la variable $resultado, ésta variable ya contiene todos los registros*/
     $sql=$sql->fetchAll();

 ?>
