<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['cvEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreCv=$_FILES['cvEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc3.pdf');
        $filesnombreCv='archivos/'.$id.'/'.$nombreCv;


        include("../Modelo/modificarCv_modelo.php");

    }

 ?>
