
function enviarRegistro(){
	var ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function(){
	/*Valoramos si la peteción está finaliza y tiene éxito*/
	if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
		/*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
        id="main" */
        document.getElementById("main").innerHTML = ajaxRequest.responseText;
	}
  }
  	/*Sincronizamos el archivo tablaModificar_vista.php obteniendo el parámetro,
  	 que recibimos en la variable (dato), esto lo haceos con el meétodo GET,
  	 después enviamos el parámetro, de la siguiente manera*/
  	  ajaxRequest.open("GET","../php/ingresoInformacion.php",true);
	  ajaxRequest.send();//cargamos el archivo

}

function enviarConsulta(){
	var ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function(){
	/*Valoramos si la peteción está finaliza y tiene éxito*/
	if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
        /*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
        id="main" */
		document.getElementById("pp").innerHTML = ajaxRequest.responseText;
	}
  }
  	/*Sincronizamos el archivo tablaModificar_vista.php obteniendo el parámetro,
  	 que recibimos en la variable (dato), esto lo haceos con el meétodo GET,
  	 después enviamos el parámetro, de la siguiente manera*/
  	  ajaxRequest.open("GET","../php/navar.php",true);
	  ajaxRequest.send();//cargamos el archivo

}

function informacionAdicional(){
	var ajaxRequest = new XMLHttpRequest();
	ajaxRequest.onreadystatechange = function(){
	/*Valoramos si la peteción está finaliza y tiene éxito*/
	if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
        /*Sobre escribimos el contenido en la etiqueta HTML, que tenga el
        id="main" */
		document.getElementById("main").innerHTML = ajaxRequest.responseText;
	}
  }
  	/*Sincronizamos el archivo tablaModificar_vista.php obteniendo el parámetro,
  	 que recibimos en la variable (dato), esto lo haceos con el meétodo GET,
  	 después enviamos el parámetro, de la siguiente manera*/
  	  ajaxRequest.open("GET","../php/tablas.php",true);
	  ajaxRequest.send();//cargamos el archivo

}






