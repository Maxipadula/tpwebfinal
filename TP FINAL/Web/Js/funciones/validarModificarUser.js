$(document).ready(function(){
	

$(".contacto").submit( function(){
        var check = $("input[type='checkbox']:checked").length;
 
            if(check == ""){
                $("#mensaje1").fadeIn("slow");
                return false;
            } else {
				$("#mensaje1").fadeOut();
                return true;
            }   
    });
});