var expr1 = /^[0-9]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var numDoc = $("#numDoc").val();
        var permiso = $("#permiso").val();

         //Verifica que no este vacío y que sean letras
        if(numDoc == "" || !expr1.test(numDoc)){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje1").fadeOut();
            }
 
    });
    
});
