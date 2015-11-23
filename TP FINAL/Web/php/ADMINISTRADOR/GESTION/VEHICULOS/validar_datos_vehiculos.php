<html> 
	<?php include("vehiculos_datos.php"); ?>
 	<?PHP 

 	 
	$id_vehi =$_POST ["id_ve"]; 	 
 	$model =$_POST ["modelo"]; 
 	$marc =$_POST ["marca"]; 
 	$cap_carga =$_POST ["capacidad_carga"]; 
 	 
	 
 	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
 	
		$consulta_id= mysql_query(" SELECT MAX( id_modelo ) ID
                                        FROM modelo ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_modelo= $fila1["ID"];
			
			$id_modelo +=100;
			
 	$insert_modelo= mysql_query("insert into modelo (id_modelo, descripcion)
								 values	('".$id_modelo."', '".ucfirst($model)."'); ") or die (mysql_error()); 
 	

	
 	 
 	 
 	//echo $id_mode; PARA VER QUE TRAEN
 							 
 	$consulta1= mysql_query(" SELECT id_marca marca
                               FROM marca
                               WHERE marca.descripcion = '".ucfirst($marc)."' ") or die ("no q2"); 
 	 
 							 

 	$filas_afectadas_marca = mysql_num_rows($consulta1);
	
	if ($filas_afectadas_marca == 0){
		
	    $consulta_id_marca= mysql_query(" SELECT MAX( id_marca ) ID
                                        FROM marca ") or die ("no query");
                             
			
		$fila2 = mysql_fetch_assoc($consulta_id_marca);
			
		$id_mar= $fila2["ID"];
			
		$id_mar+=1;
		
		$insert_marca = mysql_query("insert into marca (id_marca, descripcion)
													values	('".$id_mar."', '".ucfirst($marc)."');");
	}else if($filas_afectadas_marca ==1){
		
		$fila2 = mysql_fetch_assoc($consulta1); 
	
 	    $id_mar = $fila2["marca"]; 
		
	}	 					   
      
 	//echo $id_mar; PARA VER QUE TRAEN 
       
  
 	$insert_vehiculo = mysql_query("insert into vehiculo (id_vehiculo, id_modelo, id_marca , capacidad_carga) 
 									values ('".$id_vehi."','".$id_modelo."','".$id_mar."','".$cap_carga."')  
 										    ;")or die (mysql_error()); 
 											 
	echo "<div id='divContenedor'>CARGA EXITOSA</div>";
 							 
  
 	?> 
 	 
 </html> 