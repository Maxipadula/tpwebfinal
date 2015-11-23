var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;
var expr3 = /(\+|-)?([0-9]+(\.[0-9]+))/;

$(document).ready(function () {

    $("#boton").click(function (){

        var fyh = $("#fyh").val();
        var lugar = $("#lugar").val();
        var latitud = $("#latitud").val();
        var longitud = $("#longitud").val();
        var costo = $("#costo").val();
        var cantidad = $("#cantidad").val();

                    if(fyh == "" || !expr2.test(fyh)){
                         $("#mensaje1").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje1").fadeOut();

                            if(lugar == "" || !expr.test(lugar)){
                            $("#mensaje2").fadeIn("slow");
                            return false;
                             }
                            else{
                            $("#mensaje2").fadeOut();

                                if(latitud == "" || !expr3.test(latitud)){
                                $("#mensaje3").fadeIn("slow");
                                return false;
                                 }
                                else{
                                $("#mensaje3").fadeOut();

                                    if(longitud == "" || !expr3.test(longitud)){
                                    $("#mensaje4").fadeIn("slow");
                                    return false;
                                     }
                                    else{
                                    $("#mensaje4").fadeOut();

                                        if(costo == "" || !expr1.test(costo)){
                                        $("#mensaje5").fadeIn("slow");
                                        return false;
                                         }
                                        else{
                                        $("#mensaje5").fadeOut();

                                            if(cantidad == "" || !expr1.test(cantidad)){
                                            $("#mensaje6").fadeIn("slow");
                                            return false;
                                             }
                                            else{
                                            $("#mensaje6").fadeOut();
                                            }

                                        }

                                    }
                                }


                            }

                        }   
    
    });
    
});
