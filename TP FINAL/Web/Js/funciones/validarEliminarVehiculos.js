var expr = /^[0-9]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var idElim = $("#idElim").val();

        if(idElim == "" || !expr.test(idElim)){
            $("#mensaje1").fadeIn("slow");
            return false;
        }
        else {
            $("#mensaje1").fadeOut();
        }

    });
    
});