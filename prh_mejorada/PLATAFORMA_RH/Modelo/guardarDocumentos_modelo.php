<?php


     for($i=0;$i<=8;$i++) {


        if (!file_exists('../archivos/'.$id)) {

            mkdir('../archivos/'.$id,0777,true);

            if (file_exists('../archivos/'.$id)) {

                if (@move_uploaded_file($rutaTempArchivos[$i], '../archivos/'.$id.'/'.$nombresArchivos[$i])) {
                 /*echo "<a href='../php/consultas.php'>Confirmar</a>  ";*/
             }else{
                /*echo "<a href='../php/consultas.php'>Confirmar</a>  ";*/
            }
        }
        }else{
            /*validamos si se movió el arhivo correctamente*/
            if (@move_uploaded_file($rutaTempArchivos[$i], '../archivos/'.$id.'/'.$nombresArchivos[$i])) {

                /*echo "<a href='../php/consultas.php'>Confirmar</a>  ";*/
            }else{
                /*echo "<a href='../php/consultas.php'>Confirmar</a>  ";*/
            }
        }


    }


 ?>
