var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /^\d{4}-\d{2}-\d{2}$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var user = $("#user").val();
        var name = $("#name").val();
        var pass = $("#pass").val();
        var fnac = $("#fnac").val();
        var numDoc = $("#numDoc").val();

         //Verifica que no este vacío y que sean letras
        if(user == ""){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje1").fadeOut();

            if(name == "" || !expr.test(name)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();

                if(pass == ""){
                     $("#mensaje3").fadeIn("slow");
                    return false;
                }
                else{
                    $("#mensaje3").fadeOut();

                    if(fnac == "" || !expr2.test(fnac)){
                         $("#mensaje4").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje4").fadeOut();
                        
                        if(numDoc == "" || !expr1.test(numDoc)){
                            $("#mensaje5").fadeIn("slow");
                            return false;
                         }
                        else{
                            $("#mensaje5").fadeOut();
                            }
                        }
                    }  
                }  
            }
    
    });
    
});
