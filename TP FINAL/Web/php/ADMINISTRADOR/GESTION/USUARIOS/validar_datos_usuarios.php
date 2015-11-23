<html> 
 <?php include ("usuarios_datos.php"); ?>
 	<?PHP 

 	 
 	$id_us =$_POST ["id_usuario"]; 
 	$usua =$_POST ["usuario"]; 
 	$nombree =$_POST ["nombre"]; 
 	$passw =$_POST ["pass"]; 
 	$fecha_na =$_POST ["fecha_nacimiento"]; 
 	$tipo_d =$_POST ["id_tipo_documento"]; 
 	$numero_doc =$_POST ["num_doc"]; 
 	$id_lic =$_POST ["id_lic"]; 
 	$rol =$_POST ["rol"]; 
 	 
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 
 	$consulta2= mysql_query(" SELECT id_tipo_doc tipo 
                               FROM tipo_doc 
                               WHERE descripcion = '".$tipo_d."' ") or die ("no q3"); 
 	 
 	$fila2 = mysql_fetch_assoc($consulta2); 
 	$id_tipo_d = $fila2["tipo"]; 
 	 
 	 
 	//echo $id_tipo_d; PARA VER QUE TRAEN
 							 
 							 
 	$consulta1= mysql_query(" SELECT codigo_rol ID 
                               FROM rol  
                               WHERE rol.descripcion = '".$rol."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1) or die ("error"); 
 							 
 	$cod_rol = $fila1["ID"]; 
 		 					   
      

  
 	$insert_usuario = mysql_query("insert into usuario (id_usuario, usuario, nombre, pass, fecha_nacimiento, id_tipo_doc, num_doc, id_licencia, codigo_rol) 
 									values ('".$id_us."','".$usua."','".$nombree."','".$passw."', '".$fecha_na."', '".$id_tipo_d."', '".$numero_doc."', '".$id_lic."', '".$cod_rol."')  
 										    ;")or die (mysql_error()); 
 											 

 							 
	echo "CARGA COMPLETA"
 	?> 
	
 	 
 </html> 
