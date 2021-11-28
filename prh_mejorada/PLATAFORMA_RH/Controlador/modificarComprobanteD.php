<?php
    require_once("../Modelo/conexion/conexion.php");
    $conexion= new Conectar;

    if (isset($_POST['numeroEmpleado']) || isset($_FILES['comprobanteD']['name']))
    {
        /*Nota tabien traer la ruta del archivo para que sea más sencillo al momeno de borrar el aarchivo*/
        $id=$_POST['numeroEmpleado'];
        $nombreComprobante=$_FILES['comprobanteD']['name'];
        $files= glob('../archivos/'.$id.'/Doc5.pdf');
        $filesnombreComprobante='archivos/'.$id.'/'.$nombreComprobante;


        include("../Modelo/modificarComprobante_modelo.php");

    }

 ?>
