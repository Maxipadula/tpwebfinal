var expr = /^[a-zA-Z]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var permiso = $("#permiso").val();

        if(permiso == "" || !expr.test(permiso)){
            $("#mensaje1").fadeIn("slow");
            return false;
        }
        else {
            $("#mensaje1").fadeOut();
        }

    });
    
});
