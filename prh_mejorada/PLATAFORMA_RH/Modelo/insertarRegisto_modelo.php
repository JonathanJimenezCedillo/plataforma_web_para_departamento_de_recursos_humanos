<?php

    require_once("conexion/conexion.php");
    $conexion=new Conectar;
    $sqls=$conexion->conexion()->prepare("CALL consultaDiscapacidadesLimite(:iniciar, :final);");
    $sqls->bindParam('iniciar', $inicio, PDO::PARAM_INT);
    $sqls->bindParam('final', $resgistrosPorPagina, PDO::PARAM_INT);
    $sqls->execute();
    $sqls=$sqls->fetchAll();


 ?>
