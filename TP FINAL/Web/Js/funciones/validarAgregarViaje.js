var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /^\d{4}-\d{2}-\d{2}$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var origen = $("#origen").val();
        var destino = $("#destino").val();
        var cliente = $("#cliente").val();
        var fIni = $("#fIni").val();
        var carga = $("#carga").val();

         //Verifica que no este vacío y que sean letras
        if(origen == "" || !expr.test(origen)){
            $("#mensaje4").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje4").fadeOut();

            if(destino == "" || !expr.test(destino)){
                $("#mensaje5").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje5").fadeOut();

                if(cliente == ""){
                     $("#mensaje6").fadeIn("slow");
                    return false;
                }
                else{
                    $("#mensaje6").fadeOut();

                    if(fIni == "" || !expr2.test(fIni)){
                         $("#mensaje7").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje7").fadeOut();
                        
                        if(carga == "" || !expr1.test(carga)){
                            $("#mensaje8").fadeIn("slow");
                            return false;
                         }
                        else{
                            $("#mensaje8").fadeOut();
                            }
                        }
                    }  
                }  
            }
    
    });
    
});
