var expr2 = /^\d{4}-\d{2}-\d{2}$/;


$(document).ready(function () {

    $("#boton").click(function (){

    	var fecha = $("#fecha").val();

			if(fecha == "" || !expr2.test(fecha)){
                 $("#mensaje1").fadeIn("slow");
                 return false;
            }
            else{
                $("#mensaje1").fadeOut();
            } 
	});  
});
