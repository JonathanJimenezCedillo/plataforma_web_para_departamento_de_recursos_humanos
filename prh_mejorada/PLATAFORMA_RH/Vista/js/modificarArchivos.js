
/*LLAMADA DE LAS FUNCIONES DECLARADAS */
function modificarFoto(){

    $(document).ready(function(){
        $(document).on('click','#btnFotoEmpleado', modificarFotos);
    });

}

function modificarActaNacimiento(){
   $(document).ready(function(){
        $(document).on('click','#btnActaEmpleado', modificarActasNacimientos);
    });
}

function modificarCurp(){
    $(document).ready(function(){
        $(document).on('click','#btnCurp', modificarCurps);
    });
}
function modificarCv(){
    $(document).ready(function(){
        $(document).on('click','#btnCv', modificarCvs);
    });
}
function modificarIne(){
    $(document).ready(function(){
        $(document).on('click','#btnIne', modificarInes);
    });
}
function modificarComprobanteD(){
    $(document).ready(function(){
        $(document).on('click','#btncomprobanteD', modificarComprobantesDs);
    });
}
function modificarCroquis(){
    $(document).ready(function(){
        $(document).on('click','#btnCroquis', modificarCroquiss());
    });
}
function modificarReferenciaL(){
    $(document).ready(function(){
        $(document).on('click','#btnReferencia', modificarReferenciaLs());
    });
}

/*DECLARACIÓN DE LAS FUNCIONES A UTILIZAR*/

function modificarFotos(){
     let  parametro = new FormData($('#form-foto')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarFoto.php",
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

                    $("#form-foto").html(respuesta);


                }

            });
}

function modificarActasNacimientos(){
    let  parametro = new FormData($('#form-actaNacimiento')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarActaNacimiento.php",
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

                    $("#form-actaNacimiento").html(respuesta);


                }

            });
}

function modificarCurps(){
 let  parametro = new FormData($('#form-curp')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarCurp.php",
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

                    $("#form-curp").html(respuesta);


                }

            });
}
function modificarCvs(){
 let  parametro = new FormData($('#form-cv')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarCv.php",
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

                    $("#form-cv").html(respuesta);


                }

            });
}
function modificarInes(){
 let  parametro = new FormData($('#form-ine')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarIne.php",
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

                    $("#form-ine").html(respuesta);


                }

            });
}
function modificarComprobantesDs(){
 let  parametro = new FormData($('#form-cbtd')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarComprobanteD.php",
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

                    $("#form-cbtd").html(respuesta);


                }

            });
}
function modificarCroquiss(){
 let  parametro = new FormData($('#form-croquis')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarCroquis.php",
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

                    $("#form-croquis").html(respuesta);


                }

            });
}
function modificarReferenciaLs(){
 let  parametro = new FormData($('#form-referencias')[0]);

            $.ajax({
                /*Datos a enviar al servidor.*/
                data:parametro,
                /*decimos que iremos a esta dirección*/
                url:"../../Controlador/modificarReferencias.php",
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

                    $("#form-referencias").html(respuesta);


                }

            });
}
