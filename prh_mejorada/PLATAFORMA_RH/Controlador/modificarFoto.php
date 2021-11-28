<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['fotoEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreImagen=$_FILES['fotoEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/*.png');
        $filesFoto='archivos/'.$id.'/'.$nombreImagen;


        include("../Modelo/modificarFoto_modelo.php");

    }

 ?>
