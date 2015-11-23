var expr = /^[a-zA-Z]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var usuario = $("#usuario").val();
        var pass = $("#pass").val();
 
         //Verifica que no este vacío y que sean letras
        if(usuario == "" || !expr.test(usuario)){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje1").fadeOut();  

            if(pass == "" || !expr1.test(pass)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();
                }
            }
    
    });
    
});
