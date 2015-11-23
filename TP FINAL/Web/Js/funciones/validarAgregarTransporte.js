var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /^[a-zA-Z]{3}[0-9]{3}$/;

$(document).ready(function () {
	 
	
    $("#marca_transporte").change(function(){
		
		
		var marca = $("#marca_transporte").val();
		  
		  $.ajax({
			   
			
			     url: "modelo_transportes.php",
				type: "POST",
				data:'marca='+marca,
				success: function(a) {
						  $("#modelo_transporte").html(a);
						  console.log("ready!");
							
					}
			  
			}); 
	});


    $("#boton").click(function (){

        var estado = $("#estado").val();
        var marca = $("#marca_transporte").val();
        var modelo = $("#modelo_transporte").val();
        var chasis = $("#chasis").val();
        var motor = $("#motor").val();
        var anio = $("#anio").val();
        var patente = $("#patente").val();
        var kmreco = $("#kmreco").val();
         
        if(estado == 'nada'){
            $("#mensaje1").fadeIn("slow");
            return false;                 
        }
        else{
            
            $("#mensaje1").fadeOut();
                    
            if(marca == 'nada'){
            $("#mensaje2").fadeIn("slow");
            return false;                 
            }
            else{
            
            $("#mensaje2").fadeOut();
            

            if(modelo == 'nada'){
            $("#mensaje3").fadeIn("slow");
            return false;                 
            }
            else{
            
            $("#mensaje3").fadeOut();

            if (chasis == '' || !expr1.test(chasis)) {
                $("#mensaje4").fadeIn("slow");
            return false;                 
        }
        else{
            
            $("#mensaje4").fadeOut();
            
            if (motor == '' || !expr1.test(motor)) {
                $("#mensaje5").fadeIn("slow");
            return false;                 
        }
        else{
            
            $("#mensaje5").fadeOut();

            if (anio == '' || !expr1.test(anio)) {
                $("#mensaje6").fadeIn("slow");
            return false;                 
        }
        else{
            
            $("#mensaje6").fadeOut();

            if (patente == '' || !expr2.test(patente)) {
                $("#mensaje7").fadeIn("slow");
            return false;                 
        }
        else{
            
            $("#mensaje7").fadeOut();

            if (kmreco == '' || !expr1.test(kmreco)) {
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
            }
            }
            }
			 
    });
	

});
