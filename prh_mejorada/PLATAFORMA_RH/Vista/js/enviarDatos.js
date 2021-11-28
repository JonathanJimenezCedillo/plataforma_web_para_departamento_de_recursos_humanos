function enviarDatos(){


    let  parametro = new FormData($('#ingresarDatos')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/datosformulario.php",
                //usamos el metodo POST para enviar los datos
                method:"POST",
                /*recibimos los datos que esten dentro de la etiqueta HTML
                con el id="formulario, con la funcion serialize la enviamos
                a le dirección, anterior"*/
                contentType:false,
                processData:false,
                success:function(respuesta){
                    /*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
                    id="main" */
                    $("#main").html(respuesta);

                }

            });


}





function enviarDatosDiscapacidades(){
    $(document).ready(function(){
        $(document).on('click','#btnDispacacidad',function(){

            $.ajax({

                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/datosDiscapacidades.php",
                //usamos el metodo POST para enviar los datos
                method:"POST",
                /*recibimos los datos que esten dentro de la etiqueta HTML
                con el id="formulario, con la funcion serialize la enviamos
                a le dirección, anterior"*/
                data:$("#formDiscapacidad").serialize(),
                success:function(respuesta){
                    $("#respuesta").html(respuesta);
                     document.getElementById('Tengo').style.display="none";

                    /*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
                    id="main" */
                }

            });
        });
    });
}

