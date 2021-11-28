<?php

   require_once("../Modelo/conexion/conexion.php");
   $conexion = new Conectar;

   if (isset($_POST['numexp']) && isset($_POST['tipodiscap']) && isset($_POST['discap'])) {

        $idEm=$_POST['numexp'];
        $tipoDis=$_POST['tipodiscap'];
        $nombreDis=$_POST['discap'];



        $sql=$conexion->conexion()->prepare("CALL ingresarEmpleadoDiscapaciado(:idE, :tipoD, :nombreD )");

        $sql->bindParam(':idE', $idEm, PDO::PARAM_INT);
        $sql->bindParam(':tipoD', $tipoDis, PDO::PARAM_STR);
        $sql->bindParam(':nombreD', $nombreDis, PDO::PARAM_STR);

        $sql->execute();

        echo "SE INGRESO CORRECTAMENTE";
        echo "<a id='link' href='../php/consultaDiscapacitados.php' style='color:blue;
        text-align: center;'><h2>Consultar</h2></a>";
   } else {
       echo "ERROR NO SE PUDO INGRESAR A LA BD";
   }






 ?>
