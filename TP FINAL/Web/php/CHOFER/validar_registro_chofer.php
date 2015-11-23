<?PHP
	
	 include ("chofer_home.php");
	
	$fecha_hora =$_POST ["fecha_hora_viaje"];
	$km_recorridos =$_POST ["km_recorridos_viaje"];
	$id_usuario = $_SESSION["id_usuario"];
	$combustible = $_POST["combustbile"];
	$id_viaje=$_POST ["id_viaje"];

		include ('../rutas.php');
	

	
		$consultar_viaje= mysql_query("SELECT *
					  FROM viaje
					  WHERE id_viaje = '".$id_viaje."'")or die ("no query");
					  
	   $fecha = mysql_fetch_assoc($consultar_viaje);

                              
	
	if($fecha["fecha_fin"] == 0){						
					
							
							
	
	$update_viaje_km_recorridos = mysql_query("UPDATE viaje
												SET fecha_fin = '".$fecha_hora."',
													km_recorridos = '".$km_recorridos."',
													combustible_cons ='".$combustible."'
												where id_viaje = '".$id_viaje."'");
									   
	
	$total_km_recorridos = mysql_query ("select V.km_recorridos viaje_km, T.km_recorridos trans_km, V.id_transporte trans
										 from viaje V inner join 
											  transporte T on V.id_transporte = T.id_transporte
											  where V.id_viaje = '".$id_viaje."'");
											  
	$fila1 = mysql_fetch_assoc($total_km_recorridos)or die ;
	
	$total = $fila1 ["viaje_km"] + $fila1 ["trans_km"];
	

	
	$id_trasnporte = $fila1["trans"];
	
	$modificacion_km = mysql_query("update transporte
									set km_recorridos = '".$total."'
									where id_transporte = '".$id_trasnporte."' ");
	
	
	
							
		
	echo "Registro exitoso";
	}else	echo"EL VIAJE QUE QUIERES MODIFICAR YA TERMINO";
	/*if($update_viaje_km_recorridos == true)
			  header("location:./".$chofer_home."");
	*/
?>