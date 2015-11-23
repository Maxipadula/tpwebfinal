<html>
	<head>
	<?php include ('../rutas.php'); ?>

		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
		<div id='divHeader_supervisor'>
			<h1> RECURSOS A GESTIONAR</h1>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
       			    <li> <a href="./<?php echo $viajes_datos ?>">VIAJES</a></li>
            		<li><a href="./<?php echo $reparacion_datos?>">REPARACIONES</a></li>
					<li> <a href="./<?php echo $supervisor_home?>">ATRAS</a></li>
				</ul>
				
			</nav>

		<div id="divContenedor">
			<?PHP		
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			
			

			$consulta_alarmas = mysql_query ("select R.descripcion des, A.kilometros km, A.id_alarmas id
												from alarmas A inner join 
												repuesto R on A.id_repuesto = R.id_repuesto 
											  ") or die ("no consulta alarmas");							  		
	
			if($consulta_alarmas!=NULL){
					if(mysql_num_rows($consulta_alarmas)>0){
							while($row=mysql_fetch_array($consulta_alarmas)){
								//echo "ID de la alarma: ".$row['id']." KILOMETROS de la alarma: ".$row['km'];
								echo "<br>";
								
								
									echo "Transportes superaron los " .$row['km']. " kilometros y deben reparar " .$row['des']. ".";
									echo "<br>";
								
								$consulta_transporte = mysql_query (" select T.id_transporte transp, T.km_recorridos km, AT.contador cont
																	  from transporte T inner join
																	  alar_transp AT on T.id_transporte = AT.id_transporte
																	  where AT.id_alarmas = ".$row['id']."
										                            ") or die ("no consulta transporte");

								
								
								if($consulta_transporte!=NULL){
										if(mysql_num_rows($consulta_transporte)>0){
												while($filaa=mysql_fetch_array($consulta_transporte)){
												
												
													if ($filaa ['km'] > (($filaa ['cont'] + 1) * ($row ['km']))){
															
															$valor = $filaa ['km'] /  ($row ['km']);
													
															$entera=intval($valor); 
															
															echo "<br>";
															echo "Veces que sono la alarma:";
															echo $entera;
															echo "<br>";

															
															$contador_cambio = mysql_query ("update alar_transp
																							set contador =  ".$entera."
																							where id_transporte= ".$filaa['transp']." and
																								  id_alarmas = ".$row['id']."
																				 ") or die ("no contador cambio");
															
															echo "El transporte: " .$filaa['transp']. "";
															echo "<br>";
															
															
													}
																																				
												}	
								
										}
								}
								
								//echo "<br>";
								//echo "PASOOOOOOOOOO";
								//echo "<br>";
							}
					}else{			
					}
					
			}
			
			

			
		
	
			/*
			$alarma = mysql_query (" select R.descripcion des, A.kilometros km
									 from alarmas A inner join 
										  repuesto R on A.id_repuesto = R.id_repuesto 
										  ") or die ("no queryss");
  
			if($alarma!=NULL){
				if(mysql_num_rows($alarma)>0){
						while($row=mysql_fetch_array($alarma)){
							//echo "ID de la alarma: ".$row['id']." KILOMETROS de la alarma: ".$row['km'];
							echo "<br>";
							echo "Los siguientes transportes han superado los " .$row['km']. " kilometros y deben reparar " .$row['des']. ".";
							echo "<br>";
							$transporte = mysql_query ("select id_transporte id,km_recorridos kilometros
														from transporte") or die ("no query");
														
							if($transporte!=NULL){
									if(mysql_num_rows($transporte)>0){
											while($filaa=mysql_fetch_array($transporte)){
												
												
												if ($row['km'] < $filaa['kilometros']){
		
													echo "El transporte: " .$filaa['id']. "";
													echo "<br>";
											
												}		
										}
									}
							}

						}
				}else{
				}
				mysql_free_result($alarma);
			}		
		*/
		?>

		</div>

		</body>



</html>