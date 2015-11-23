var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /^[a-zA-Z]{3}[0-9]{3}$/;

$(document).ready(function () {
    $("#boton").click(function (){

        var estado = $("#estado").val();
         
        if(estado == 'nada'){
            $("#mensaje1").fadeIn("slow");
            return false;                 
        }
        else{    
            $("#mensaje1").fadeOut();
                    
            }
			 
    });
	

});
