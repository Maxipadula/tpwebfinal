<html> 
 	<?PHP 
 	
 	 
	$id_mecanic =$_POST ["id_me"]; 	 
 	$nombree =$_POST ["nombre"];
	$int_ext =$_POST ["internoexterno"];
	
	include ("mecanicos_datos.php");
 	 
	 
include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
 	 
	$insert_mecanico = mysql_query("insert into mecanico (id_mecanico, nombre) 
 									values ('".$id_mecanic."','".$nombree."')  
 										    ;")or die (mysql_error());
 	if($int_ext == "interno"){
		
	    $insert_mecanico_interno = mysql_query("insert into mecanico_interno (id_mecanico) 
 									   values ('".$id_mecanic."');")or die (mysql_error());
 										                      
	}else if ($int_ext == "externo"){
		
		$empresa = $_POST["empresa"];
		
		$insert_mecanico_externo = mysql_query("insert into mecanico_externo (id_mecanico,empresa) 
 									            values ('".$id_mecanic."','".$empresa."');")or die (mysql_error());
		
	}else echo("ERROR");
 	/*$fila2 = mysql_fetch_assoc($consulta2); 
	
 	$id_mode = $fila2["MODELO"]; 
 	 
 	 
 	//echo $id_mode; PARA VER QUE TRAEN
 							 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$id_mar = $fila1["marca"]; 
 		 					   
      
 	//echo $id_mar; PARA VER QUE TRAEN 
       */
 											 
	echo "<p>Los datos han sido guardados con exito.</p>   " 
  
 	
 							 
  
 	?> 
 	 
 </html> 