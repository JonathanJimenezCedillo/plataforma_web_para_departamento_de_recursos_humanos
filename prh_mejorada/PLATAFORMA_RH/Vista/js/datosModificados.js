function modificarEmpleados(){
    $(document).ready(function(){
        $(document).on('click','#modificar',function(){
            console.log("bine");

            $.ajax({


                url:"../../Controlador/datosModficados.php",

                method:"POST",

                data:$("#formulario").serialize(),
                success:function(respuesta){
                    $("#main").html(respuesta);

                }

            });
        });
    });
}
