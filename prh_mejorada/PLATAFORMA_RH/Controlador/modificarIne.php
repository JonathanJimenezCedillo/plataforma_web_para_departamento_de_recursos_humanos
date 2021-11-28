<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['ineEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreIne=$_FILES['ineEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc4.pdf');
        $filesnombreIne='archivos/'.$id.'/'.$nombreIne;


        include("../Modelo/modificarIne_modelo.php");

    }

 ?>
