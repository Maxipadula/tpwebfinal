	<?PHP
	 include ("../rutas.php"); 
	 include ("chofer_home.php");
	 
	 $id = $_SESSION["id_usuario"];
	 $id_viaje = $_SESSION["id_viaje"];
	 
	 $consulta_viaje=mysql_query("SELECT V.origen origen,V.destino destino,V.cliente cliente,V.fecha_inicio inicio,V.carga carga,A.descripcion acoplado
					  FROM viaje V inner join
							acoplado A on A.id_acoplado= V.id_acoplado
					  WHERE id_viaje = ".$id_viaje."");
	
	$viaje = mysql_fetch_assoc($consulta_viaje);
			 

	?>
 	<div id="divContenedor">
 	
 	<h3>DATOS DE VIAJE ASIGNADO</h3>

 	<form class='contacto' method="post">
 		<div id="contacto">

 				<div><label>ID DE VIAJE</label>
					</br>
					<input type="text" name="id_viaje"  value="<?php echo $id_viaje?>"readonly = "readonly">
 				</div>	
 				</br>
				
 				<div><label>ORIGEN</label>
 					</br>
 					<input type="text" name="origen" id="origen" value="<?php echo $viaje["origen"]?>"readonly = "readonly">
 					
 				</div>
 				</br>
 								
 				<div><label>DESTINO</label>
 					</br>
 					<input type="text" name="destino" id="destino" value="<?php echo $viaje["destino"]?>"readonly = "readonly">
 			
 				</div>
 				</br>
				
 				<div><label>CLIENTE</label>
 					</br>
 					<input type="text" name="cliente" id="cliente" value="<?php echo $viaje["cliente"]?>"readonly = "readonly">
 				</div>
 				</br>
				
 				<div><label>FECHA Y HORA DE INICIO</label>
 					</br>
 				<input type="text" name="inicio" id="inicio" value="<?php echo $viaje["inicio"]?>"readonly = "readonly">				
 				</div>
 				</br>
				
				<div><label>CARGA</label>
 					</br>
 				<input type="text" name="carga" id="carga" value="<?php echo $viaje["carga"]?>"readonly = "readonly">				
 				</div>
 				</br>
				
				<div><label>ACOPLADO</label>
 					</br>
 				<input type="text" name="acoplado" id="acoplado" value="<?php echo $viaje["acoplado"]?>"readonly = "readonly">				
 				</div>
 	</form>
 	</div>
 </div>
 </body>
</html>