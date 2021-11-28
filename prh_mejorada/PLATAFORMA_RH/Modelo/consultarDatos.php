<?php

    require_once("conexion/conexion.php");

   class ConsultaDatos extends Conectar
   {




     public function consultaTipoDiscapacidad(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM discapacidades");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

           }

      public function consultaDepartamentos(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT iddepartamentos, nombre FROM  departamentos");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }

       public function consultaCategorias(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM categorias");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }

       public function consultaCargos(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM cargos");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
      public function consultaCargosTabla(){
          $conexion=new Conectar;
          $conexion=$conexion->conexion();
          $sql=$conexion->prepare("SELECT * FROM empleados_cargos LIMIT 20");
          $sql->execute();
          $resultado=$sql->fetchAll();


          return $resultado;

         }

       public function consultaTablas(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM tablas");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }

       public function consultaDucumentos(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM documentaciones");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
       public function consultaBajas(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM baja_empleado");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
       public function tablaCategorias(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM categorias");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
       public function tablaCargos(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM cargos");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
       public function tablaDepartamentos(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM departamentos");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
      public function tablaDependencias(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM dependencias");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }
       public function tablaDiscapacidades(){
        $conexion=new Conectar;
        $conexion=$conexion->conexion();
        $sql=$conexion->prepare("SELECT * FROM discapacidades");
        $sql->execute();
        $resultado=$sql->fetchAll();


        return $resultado;

       }

   }






 ?>
