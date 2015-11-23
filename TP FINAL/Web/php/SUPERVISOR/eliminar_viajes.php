<html>

	<?php include ("viajes_datos.php"); ?>
	
	<head>
 		<script type="text/javascript" src="../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../js/funciones/validarEliminar.js"></script>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
	
	
	<div id="divContenedor">
	<div class="divTabla">
	SELECCIONAR EL MECANICO QUE QUIERAS ELIMINAR
		<br>
		<br>
	<?php
		
			include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT id_viaje, origen, destino, carga
									FROM viaje ") or die ("no q");
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>Origen</td><td>Destino</td><td>Carga</td></tr> \n";
			do{
				echo "<tr><td>".$row["origen"]."</td><td>".$row["destino"]."</td><td>".$row["carga"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_viaje."?ID=".$row["id_viaje"]."' class = 'tlink'>Eliminar</a></td></tr> \n";      
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
	

	<!--
	<form class='contacto' method="post" action="<?php echo $validar_eliminacion_viaje ?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR ID:
					</br>
					<input type="text" name="id_eliminar_viaje">
					</label>
				</div>
				<br>
		
				<input type="submit" value="Eliminar">
			
	-->			
		</div>
	</div>
	</div>
</html>