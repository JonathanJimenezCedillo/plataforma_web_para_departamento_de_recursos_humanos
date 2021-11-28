<?php



         $sql=$conexion->conexion()->prepare("CALL ingresarEmpleados(:id, :nombre, :app, :fecha, :sexo, :edo, :curp, :calle, :colonia, :municip, :cpd, :catego, :cargosE, :departamentosE, :fechasIE, :salariosE, :docExp);");




            $sql->bindParam(':id', $id,PDO::PARAM_INT);
            $sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $sql->bindParam(':app', $apellidos, PDO::PARAM_STR);
            $sql->bindParam(':fecha', $fechNaE, PDO::PARAM_STR);
            $sql->bindParam(':sexo', $sexoE, PDO::PARAM_STR);
            $sql->bindParam(':edo', $edocivilE, PDO::PARAM_STR);
            $sql->bindParam(':curp', $curpE, PDO::PARAM_STR);
            $sql->bindParam(':calle', $calleE, PDO::PARAM_STR);
            $sql->bindParam(':colonia', $coloniaE, PDO::PARAM_STR);
            $sql->bindParam(':municip', $muniE, PDO::PARAM_STR);
            $sql->bindParam(':cpd', $codpostalE, PDO::PARAM_INT);
            $sql->bindParam(':catego', $categoriaE, PDO::PARAM_INT);
            $sql->bindParam(':cargosE', $cargoE, PDO::PARAM_STR);
            $sql->bindParam(':departamentosE', $depaE, PDO::PARAM_STR);
            $sql->bindParam(':fechasIE', $fecEhinicioE, PDO::PARAM_STR);
            $sql->bindParam(':salariosE', $salarioE, PDO::PARAM_STR);
            $sql->bindParam(':docExp', $id, PDO::PARAM_INT);

            $sql->execute();




            if ($sql) {
            $sql=$conexion->conexion()->prepare("INSERT INTO documentaciones VALUES(:docExp, :actaD, :curpD, :cvD, :ineD, :comptD, :croqD, :refeD, :fotoD);");

            $sql->bindParam(':docExp',$id,PDO::PARAM_INT);
            $sql->bindParam(':actaD',$acta,PDO::PARAM_STR);
            $sql->bindParam(':curpD',$curp,PDO::PARAM_STR);
            $sql->bindParam(':cvD',$cv,PDO::PARAM_STR);
            $sql->bindParam(':ineD',$ine,PDO::PARAM_STR);
            $sql->bindParam(':comptD',$cd,PDO::PARAM_STR);
            $sql->bindParam(':croqD',$croquis,PDO::PARAM_STR);
            $sql->bindParam(':refeD',$refe,PDO::PARAM_STR);
            $sql->bindParam(':fotoD',$foto,PDO::PARAM_STR);
            $sql->execute();

                if ($sql) {
                    echo "GUARDADO BD";
                    echo "<a id='link' href='../php/consultas.php' style='color:blue;
    text-align: center;'><h2>Consultar</h2></a>";
                } else {
                    echo "NO GUARDADO BD";
                }

                include ("guardarDocumentos_modelo.php");

            }else{
                echo "NO GUARDADO BD";
            }





 ?>
