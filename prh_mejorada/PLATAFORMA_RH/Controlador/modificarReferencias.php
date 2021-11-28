<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['referenciaEmpleado']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreReferencias=$_FILES['referenciaEmpleado']['name'];
        $files= glob('../archivos/'.$id.'/Doc7.pdf');
        $filesnombreReferencias='archivos/'.$id.'/'.$nombreReferencias;


        include("../Modelo/modificarReferencias_modelo.php");

    }

 ?>
