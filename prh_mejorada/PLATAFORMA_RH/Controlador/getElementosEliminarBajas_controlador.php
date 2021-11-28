<?php

    require_once("../Modelo/conexion/conexion.php");
    $conexion=new Conectar;

    if (isset($_GET['id'])) {
        $id=$_GET['id'];


        $sql = $conexion->conexion()->prepare("CALL eliminarBajas(:id)");
        $sql->bindParam(':id',$id, PDO::PARAM_INT);
        $sql->execute();

        if ($sql) {


            echo "<a href='consultaBajas.php' style='text-align:center;'><h2>Consultar</h2></a>";
        }else{

            echo "<a href='consultaBajas.php' style='text-align:center;'><h2>Consultar</h2></a>";

        }

        $ruta="../archivos/".$id;

          foreach(glob($ruta."/*") as $archivos_carpeta){
                if (is_dir($archivos_carpeta)){
                  rmdir($archivos_carpeta);
                } else {
                unlink($archivos_carpeta);
                }
              }
              rmdir($ruta);



}







 ?>
