<?php

    require_once("../Modelo/conexion/conexion.php");
    $conexion=new Conectar;
    /* Informacion del Empleado */
    /* Validamos si la variables no están definidas */
if (isset($_POST["numexp"])||isset($_POST["nom"])||isset($_POST["apds"])||isset($_POST["sexos"])|| isset($_POST["edocivil"])||isset($_POST["fechNa"])||isset($_POST["curp"])||isset($_POST["calle"])||isset($_POST["colonia"])||isset($_POST["muni"])||isset($_POST["codpostal"])||isset($_POST["discapacidades_tipo"])||isset($_POST["discap"])||isset($_POST["categoria"])||isset($_POST["depa"])||isset($_POST["salario"])||isset($_POST["cargo"])||isset($_POST["fechinicio"])||isset($_FILES["foto"]["name"])||isset($_FILES["actanaci"]["name"])||isset($_FILES["doccurp"]["name"])||isset($_FILES["cv"]["name"])||isset($_FILES["ine"]["name"])||isset($_FILES["cd"]["name"])||isset($_FILES["croq"]["name"])||isset($_FILES["reflaborales"]["name"]))
    {


            $id = $_POST["numexp"];
            $nombre = $_POST["nom"];
            $apellidos = $_POST["apds"];
            $sexoE = $_POST["sexos"];
            $edocivilE = $_POST["edocivil"];
            $fechNaE = $_POST["fechNa"];
            $curpE = $_POST["curp"];
            $calleE = $_POST["calle"];
            $coloniaE = $_POST["colonia"];
            $muniE = $_POST["muni"];
            $codpostalE = $_POST["codpostal"];
            $categoriaE = $_POST["categoria"];
            $depaE = $_POST["depa"];
            $salarioE = $_POST["salario"];
            $fecEhinicioE = $_POST["fechinicio"];
            $cargoE = $_POST['cargo'];



            include("../Modelo/modificarDatosFormulario.php");


    }else{
        echo "variables no definidas";
    }




 ?>





















 ?>
