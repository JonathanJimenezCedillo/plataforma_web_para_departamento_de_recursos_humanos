<?php

    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['actaEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreActaNacimiento=$_FILES['actaEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc1.pdf');
        $filesnombreActaNacimiento='archivos/'.$id.'/'.$nombreActaNacimiento;


        include("../Modelo/modificarActaNacimiento_modelo.php");

    }


 ?>
