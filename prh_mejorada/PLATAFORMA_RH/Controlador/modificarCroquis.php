<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['croquisEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreCroquis=$_FILES['croquisEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc5.pdf');
        $filesnombreCroquis='archivos/'.$id.'/'.$nombreCroquis;


        include("../Modelo/modificarCroquis_modelo.php");

    }

 ?>
