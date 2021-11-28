<?php


    require_once ("conexion/conexion.php");
    session_start();


    $conexion=new Conectar;

    $usuario=$_POST['users'];
    $clave=$_POST['passw'];

    $sql=$conexion->conexion()->prepare("SELECT  COUNT(*) FROM usuarios WHERE nombre=:username AND clave= :claveuser;");
    /* bindParam--> Vincula un parámetro al nombre de una variable especifica*/
    $sql->bindParam(':username', $usuario, PDO::PARAM_STR);
    $sql->bindParam(':claveuser', $clave, PDO::PARAM_STR);
    $sql->execute();

    /*fetchColumn-->Este método me devuelce el valor de un campo o columna en expecifico, de la consulta anterior.  */
    $columna=$sql->fetchColumn();

    if($columna>0){
        $_SESSION['usuario'] = $usuario;
        header("Location:../Vista/php/paginaPrincipal.php");
    }else{
        echo "<h1>¡Error al ingresar su usuario o contraseña favor de revisarlo! </h1> <br> <h2><a href='../'>Regresar</a><h2>";

    }

    $conexion->cerrarConexion();
?>
