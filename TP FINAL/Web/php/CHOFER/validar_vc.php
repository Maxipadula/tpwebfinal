<?PHP

   include ("chofer_home.php");
	
	$fecha_hora =$_POST ["fecha_hora_vc"];
	$desc_lugar =$_POST ["lugar_vc"];
	$latitud =$_POST ["latitud"];
	$longitud =$_POST ["longitud"];
	$costo =$_POST ["costo_vc"];
	$cantidad =$_POST ["cantidad_vc"];
	$id_viaje=$_POST ["id_viaje"];

	

	
		include ('../rutas.php');
	

	
	$consultar_viaje= mysql_query("SELECT fecha_fin fin
					  FROM viaje
					  WHERE id_viaje = '".$id_viaje."'")or die ("no query");
					  
	$fecha = mysql_fetch_assoc($consultar_viaje);
	
	
	if($fecha["fin"] == 0){
	
			$consulta_id= mysql_query(" SELECT MAX( id_vc ) ID
                                        FROM vale_combustible ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vc= $fila1["ID"];
			
			$id_vc++;
		
		$consulta_lugar=mysql_query(" SELECT *
                                  FROM lugar 
								  WHERE latitud ='".$latitud."' and longitud ='".$longitud."'") or die (mysql_error());
								  
		$lugares = mysql_num_rows($consulta_lugar);
	

	
		if($lugares == 0){
		
			$consulta_id= mysql_query(" SELECT MAX( id_lugar ) ID
                                        FROM lugar ") or die ("no query");
                             
			
			$fila2 = mysql_fetch_assoc($consulta_id);
			
			$id_lugar=$fila2["ID"];
				
			$id_lugar++;
			
			$insertar_lugar = mysql_query ("insert into lugar(id_lugar,descripcion,latitud,longitud)
										  values (".$id_lugar.",'".$desc_lugar."','".$latitud."','".$longitud."')")or die (mysql_error());
										
		}else {
			$lugar = mysql_fetch_assoc($consulta_lugar);
			$id_lugar = $lugar["id_lugar"];
		}
	
		
	
		$insert_vc = mysql_query("insert into vale_combustible(id_vc,id_viaje,  fecha_hora, id_lugar, costo, cantidad)
							                    values ('".$id_vc."','".$id_viaje."','".$fecha_hora."',".$id_lugar.",'".$costo."', '".$cantidad."')") or die (mysql_error());

		
		echo "<p>Los datos han sido guardados con exito.</p>" ; 

	}else
		echo"EL VIAJE QUE QUIERES MODIFICAR YA TERMINO";
?>