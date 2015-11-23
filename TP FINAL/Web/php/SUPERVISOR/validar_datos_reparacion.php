<html> 
 	<?PHP 
 	include ("reparacion_datos.php"); 
 	 
 	
 	$id_mecani =$_POST ["mecanicos"]; 
 	$id_transp =$_POST ["transporte"]; 
 	$fech =$_POST ["fecha"]; 

 	 	 
 	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 

	


	foreach($_POST['repuesto'] as $id_repuesto){
		
		$consulta_km= mysql_query("SELECT *
									FROM transporte
									WHERE id_transporte = '".$id_transp."'") or die (mysql_error());
										   
		$transportes = mysql_fetch_assoc($consulta_km);
	
		
		$km = $transportes["km_recorridos"];

		
		$consulta_repuestos = mysql_query("SELECT *
									       FROM repuesto
										   WHERE id_repuesto = '".$id_repuesto."'") or die (mysql_error());
		
		$repuestos = mysql_fetch_assoc($consulta_repuestos);
		
		
		
		$consulta_id_orden= mysql_query(" SELECT MAX( id_orden ) ID
										   FROM orden ") or die ("no query");
		
		$orden=mysql_fetch_assoc($consulta_id_orden);
		$id_orden=$orden["ID"]+1;
		
		$cantidad = $_POST[$repuestos["id_repuesto"]];
		
		$costo=$repuestos["costo"]*$cantidad;
		
		$insertar_orden=mysql_query("insert into orden (id_orden,id_repuesto,cantidad)
									values (".$id_orden.",'".$repuestos["id_repuesto"]."','".$cantidad."')")or die(mysql_error());
		
		
		
		$consulta_id= mysql_query(" SELECT MAX( codigo_reparacion ) IDR
                                        FROM reparacion ") or die ("no query");
                             
			
		$fila1 = mysql_fetch_assoc($consulta_id);
			
		$codigo_reparacion= $fila1["IDR"];
			
		$codigo_reparacion +=1;
		
		
		
		$insertar_reparacion=mysql_query("insert into reparacion (codigo_reparacion, id_mecanico, id_transporte,id_orden, costo, fecha,km)
															values	(".$codigo_reparacion.",".$id_mecani.",'".$id_transp."','".$id_orden."', '".$costo."', '".$fech."', '".$km."')")or die(mysql_error());
	}
	
  
  
	echo "REGISTRO REPARACION EXITOSO";
  
 	?> 
 	 
 </html> 