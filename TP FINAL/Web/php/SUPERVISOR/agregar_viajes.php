 <html>
	 <?php include ("viajes_datos.php"); ?>
	
 	<head>
 		<script type="text/javascript" src="../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../js/funciones/validarAgregarViaje.js"></script>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
	
	<?PHP
				include ('../rutas.php');
	
				$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_viaje ) ID
                                        FROM viaje ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_viaje= $fila1["ID"];
			
			$id_viaje +=1;
	?>

	
	<div id="divContenedor">
	<div class="divTabla">
	 FORMULARIO PARA TABLA VIAJES
 	<form class='contacto' method="post" action="<?php echo $validar_datos_viaje ?>">
 		<div id="contacto">
 				</br>
				
 				<div><label>ID
					</br>
					<input type="text" name="id_viajes"  value="<?php echo $id_viaje?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
			<?php	
		
				$consulta  = mysql_query ("SELECT id_usuario, nombre
										  FROM usuario
										  where codigo_rol = 1") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>Chofer</td><td>Seleccionar</td></tr> \n";
				do{
					echo "<tr><td>".$row["nombre"].
					"</td><td class='tBotonAgregar'><label><input type='radio' name='chofer' value='".$row["id_usuario"]."'></input></label></td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta));			
				echo "</table> \n";
				} else {
				echo "No se encontraron registros";
				} 
			?>
			<div id="mensaje1" class="errores"> Ingrese una opcion</div>
				<br>
 			
				<?php	
	
				$consulta  = mysql_query ("SELECT t.id_transporte id, t.patente patente,M.descripcion marca,MO.descripcion modelo
											FROM transporte T join 
											     vehiculo V on V.id_vehiculo = T.id_vehiculo join
												 marca M on M.id_marca = V.id_marca join
												 modelo MO on MO.id_modelo = V.id_modelo") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>Patente</td><td>Vehiculo</td><td>Seleccionar</td></tr> \n";
				do{
					echo "<tr><td>".$row["patente"]."</td><td>".$row["marca"]."  ".$row["modelo"].
					"</td><td class='tBotonAgregar'><label><input type='radio' name='transporte' value='".$row["id"]."'></input></label></td></tr> \n"; 
					
				} while ($row = mysql_fetch_array ($consulta));
					
				echo "</table> \n";
				} else {
				echo "No se encontraron registros";
				} 
			?>
				<div id="mensaje2" class="errores"> Ingrese una opcion</div>
				</br>
				
				<?php	
				
				$consulta_acoplado  = mysql_query ("SELECT id_acoplado id_aco, descripcion descr, paten 
													FROM acoplado
													") or die ("no qaaaaa");
			
				if ($row = mysql_fetch_array($consulta_acoplado)){
				echo "<table border = '1'> \n";
				echo "<tr><td>Descripcion</td><td>Seleccionar</td></tr> \n";
				do{
					echo "<tr><td>".$row["descr"]."</td><td class='tBotonAgregar'> <input type='radio' name='acoplado' class = 'tlink' value='".$row["id_aco"]."'></a></td></tr> \n"; 
					
				} while ($row = mysql_fetch_array ($consulta_acoplado));
				echo "</table> \n";
				} else {
				echo "No se encontraron registros";
				} 
			?>
				<div id="mensaje3" class="errores"> Ingrese una opcion</div>
				</br>

 				<div><label>ORIGEN</label>
 					</br>
 					<input type="text" name="origen" id="origen" placeholder="Origen">
 					<div id="mensaje4" class="errores"> Ingrese solo letras</div>
 				</div>
 				</br>
				
				<div><label>DESTINO</label>
 				</br>
 				<input type="text" name="destino" id="destino" placeholder="Destino">
 				<div id="mensaje5" class="errores"> Ingrese solo Letras</div>
 				</div>
 				</br>
				
				<div><label>CLIENTE</label>
 				</br>
 				<input type="text" name="cliente" id="cliente" placeholder="Cliente">
 				<div id="mensaje6" class="errores"> Ingrese Cliente</div>
 				</div>
 				</br>
				
				 <div><label>FECHA DE INICIO</label>
 				</br>
 				<input type="text" name="fecha_inicio" id="fIni" placeholder="AAAA-MM-DD">
 				<div id="mensaje7" class="errores"> Ingresa fecha valida [AAAA-MM-DD]</div>
 				</div>
 				</br>
				
				 <div><label>CARGA</label>
 				</br>
 				<input type="text" name="carga" id="carga" placeholder="Carga">
 				<div id="mensaje8" class="errores"> Ingrese solo letras</div>
 				</div>
 				</br>
				
 				<input type="submit" value="Agregar" class="boton" id="boton">
				<input type="submit" value="Atras" onclick = "location='viajes_datos.php'" class="boton"/>
				<br>
 		</div>
	</form>
 
 </div>
 </diV>
 </html>