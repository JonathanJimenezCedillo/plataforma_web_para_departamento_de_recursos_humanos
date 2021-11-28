<?php

    require_once("conexion/conexion.php");
    $conexion = new Conectar;

    include("../Controlador/datosModicar_controlador.php");

    $sql=$conexion->conexion()->prepare("SELECT * FROM documentaciones WHERE     iddocumentaciones='$dato'");
    $sql->execute();

    $documento=$sql->fetchAll();

    include("../Vista/php/consultaDovumentosModificados.php");

 ?>
