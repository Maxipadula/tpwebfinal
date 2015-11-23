var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/;

$(document).ready(function () {

    $("#boton").click(function (){

        var fyh = $("#fyh").val();
        var km = $("#km").val();
        var combustible = $("#combustible").val();

                    if(fyh == "" || !expr2.test(fyh)){
                         $("#mensaje1").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje1").fadeOut();

                            if(km == "" || !expr1.test(km)){
                            $("#mensaje2").fadeIn("slow");
                            return false;
                             }
                            else{
                            $("#mensaje2").fadeOut();
                                if(combustible == "" || !expr1.test(combustible)){
                                $("#mensaje3").fadeIn("slow");
                                return false;
                                 }
                                else{
                                $("#mensaje3").fadeOut();
                                }

                            }
                        }   
    
    });
    
});
