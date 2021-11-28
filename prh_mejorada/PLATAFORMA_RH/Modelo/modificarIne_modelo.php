<?php

    $sql=$conexion->conexion()->prepare("UPDATE documentaciones SET ine=:ineModificado WHERE iddocumentaciones=:idD");
        $sql->bindParam(':ineModificado', $filesnombreIne, PDO::PARAM_STR);
        $sql->bindParam(':idD', $id, PDO::PARAM_STR);
        $sql->execute();


        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/pruebas/archivos/'.$id.'/';
        move_uploaded_file($_FILES['ineEmpleado']['tmp_name'],$carpeta_destino.$nombreIne);

        foreach($files as $file){
            if(is_file($file)) //si existe el archivo
                unlink($file);//elimino el fichero

           }
        echo ' <h2><a href="consultaDocumentos.php">Confirmar</a><h2/>';



 ?>
