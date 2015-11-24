 <html>
	<?php  include ("viajes_datos.php");?>

  	<head>
 		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarPermiso.js"></script>
	</head>
	
	
	<body>
	
	<div id="divContenedor">
		<p>SELECCIONE VIAJE A MODIFICAR</p>
	</div>
	<div class="divTabla">
	
	 	
 
		
		<form class='contacto' method="get" action="<?php echo $usuario_a_modificar ?>">
			<div id="contacto">
		
		
			<?PHP
	
			include ('../rutas.php');
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_viaje_modificar  = mysql_query ("SELECT V.id_viaje id_vi, U.nombre nomb , A.descripcion descrip, T.id_transporte id_trans, 
														V.origen ori, V.destino dest, V.cliente cli, V.fecha_inicio fecha, V.carga carg
													   FROM viaje V inner join 
															usuario U on V.id_usuario = U.id_usuario inner join 
															acoplado A on V.id_acoplado = A.id_acoplado inner join 
															transporte T on V.id_transporte = T.id_transporte 
													   ") or die (mysql_error());
			
			if ($row = mysql_fetch_array($consulta_viaje_modificar)){
			echo "<table border = '1'> \n";
			echo "<tr><td>ID</td><td>NOMBRE</td><td>ACOPLADO</td><td>TRANSPORTE</td><td>ORIGEN</td><td>
			DESTINO</td><td>CLIENTE</td><td>FECHA_I</td><td>CARGA</td></tr> \n";
			do{
				echo "<tr><td>".$row["id_vi"]."</td><td>".$row["nomb"]."</td><td>".$row["descrip"]
				."</td><td>".$row["id_trans"]."</td><td>".$row["ori"]."</td><td>".$row["dest"]
				."</td><td>".$row["cli"]."</td><td>".$row["fecha"]."</td><td>".$row["carg"]
				."</td><td class='tBotonModif'><a href='".$menu_modificacion_viajes."?ID=".$row["id_vi"]."' class = 'tlink'>  Modificar </a></td><td class='tBotonElim'><a href='".$validar_eliminacion_viaje."?ID=".$row["id_viaje"]."' class = 'tlink'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta_viaje_modificar));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 
		
			?>
		
		
			</div>
		</form>
			

	
	</div>
	</div>
	
	</body>
 </html>