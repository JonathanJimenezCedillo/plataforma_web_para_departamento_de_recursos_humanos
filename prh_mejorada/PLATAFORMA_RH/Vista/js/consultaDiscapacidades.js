$(document).ready(function(){
    $("#search").keyup(function(e){
       let search = $("#search").val();

        $.ajax({
        url: '../../Modelo/respuestaDiscapacidades.php',
        type: 'POST',
        data: {search: search},
        success:function(respuesta){
            $("#main").html(respuesta);
            window.onbeforeunload;
        }
    });

    });
});

