<?php



         $sql=$conexion->conexion()->prepare("CALL editarDatosEmpleados(:id, :nombre, :app, :fecha, :sexo, :edo, :curp, :calle, :colonia, :municip, :cpd, :catego, :cargosE, :departamentosE, :fechasIE, :salariosE);");




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


            $sql->execute();




            if ($sql) {
                  echo "<h1 style='
    text-align: center;'>Se a modificado correctamente</h1>";
                  echo "<a href='../php/consultas.php' style='color:blue;
    text-align: center;'><h2>Consultar</h2></a>";

            }else{
                  echo "<a href='../Vista/php/consultas.php'>NO MODIFICADO GUARDADO BD</a>";
            }


            $conexion->conexion();

 ?>
