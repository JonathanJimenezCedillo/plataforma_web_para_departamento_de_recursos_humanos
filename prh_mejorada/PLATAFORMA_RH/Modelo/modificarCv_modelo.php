<?php

    $sql=$conexion->conexion()->prepare("UPDATE documentaciones SET cv=:cvModificado WHERE iddocumentaciones=:idD");
        $sql->bindParam(':cvModificado', $filesnombreCv, PDO::PARAM_STR);
        $sql->bindParam(':idD', $id, PDO::PARAM_STR);
        $sql->execute();


        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/pruebas/archivos/'.$id.'/';
        move_uploaded_file($_FILES['cvEmpleado']['tmp_name'],$carpeta_destino.$nombreCv);

        foreach($files as $file){
            if(is_file($file)) //si existe el archivo
                unlink($file);//elimino el fichero

           }
               echo ' <h2><a href="consultaDocumentos.php">Confirmar</a><h2/>';



 ?>
