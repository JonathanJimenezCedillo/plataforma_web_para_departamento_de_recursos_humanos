


 $(document).ready(function(){
        $(document).on('click','.botonModificar',function(){
            let elemento=$(this)[0].parentElement.parentElement;
            let id=$(elemento).attr("idElement");

            $.post("../../Controlador/getElementosModificar_controlador.php",{id},function(respuesta){
                $("#main").html(respuesta)
            });

        });
    });



function ejecutarAjaxEliminar(dato){
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function(){
    /*Valoramos si la peteción está finaliza y tiene éxito*/
    if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
        document.getElementById("main").innerHTML = ajaxRequest.responseText;
        /*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
        id="main" */
    }
  }
    /*Sincronizamos el archivo tablaModificar_vista.php obteniendo el parámetro,
     que recibimos en la variable (dato), esto lo haceos con el meétodo GET,
     después enviamos el parámetro, de la siguiente manera*/
    ajaxRequest.open("GET","../../Controlador/getElementosEliminar_controlador.php?id="+dato,true);
    ajaxRequest.send();//cargamos el archivo
}
