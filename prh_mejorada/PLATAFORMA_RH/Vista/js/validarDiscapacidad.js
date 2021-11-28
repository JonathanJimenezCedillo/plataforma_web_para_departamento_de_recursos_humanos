

function habilitarCampos(){
let elemento = document.getElementById('abrirVentana'); //se define la variable "elemento" igual a nuestro div

    if (elemento.style.display==="block"){ //se obtiene el id

    elemento.style.display="none"; //damos un atributo display:none que oculta el div
    }else{
        elemento.style.display="block";
    }
}


