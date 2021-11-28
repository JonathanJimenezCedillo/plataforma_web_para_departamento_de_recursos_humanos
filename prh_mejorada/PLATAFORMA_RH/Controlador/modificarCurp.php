<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['curpEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreCurp=$_FILES['curpEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc2.pdf');
        $filesnombreCurp='archivos/'.$id.'/'.$nombreCurp;


        include("../Modelo/modificarCurp_modelo.php");

    }

 ?>
