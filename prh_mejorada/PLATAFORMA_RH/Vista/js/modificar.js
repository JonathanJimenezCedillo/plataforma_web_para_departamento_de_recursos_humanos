function modificarDocumentos(dato){
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
    ajaxRequest.open("POST","../../Modelo/consultaModificar_modelo.php?id="+dato,true);
    ajaxRequest.send();//cargamos el archivo
}
