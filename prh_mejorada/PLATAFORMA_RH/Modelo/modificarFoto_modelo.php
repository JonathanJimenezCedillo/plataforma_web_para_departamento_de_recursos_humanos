<?php

    $sql=$conexion->conexion()->prepare("UPDATE documentaciones SET foto=:fotoModificada WHERE iddocumentaciones=:idD");
        $sql->bindParam(':fotoModificada', $filesFoto, PDO::PARAM_STR);
        $sql->bindParam(':idD', $id, PDO::PARAM_STR);
        $sql->execute();


        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/pruebas/archivos/'.$id.'/';
        move_uploaded_file($_FILES['fotoEmpleado']['tmp_name'],$carpeta_destino.$nombreImagen);

        foreach($files as $file){
            if(is_file($file)) //si existe el archivo
                unlink($file);//elimino el fichero

           }
               echo ' <h2><a href="consultaDocumentos.php">Confirmar</a><h2/>';



 ?>
