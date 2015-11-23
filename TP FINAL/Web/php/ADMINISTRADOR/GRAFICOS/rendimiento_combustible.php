<html>
	<head>
	</head>
	<body>
		<?php
			 include ("./graficos_datos.php"); 
		?>
		<div id="divContenedor"> 
	    <div class="divTabla">
		<?php
			$consulta_transporte = mysql_query ("SELECT M.descripcion marca,MO.descripcion modelo, T.patente patente,T.id_transporte ID,E.descripcion estado,T.km_recorridos km,T.num_chasis chasis,T.num_motor motor
											 FROM estado E inner join
												  transporte T on E.id_estado = T.id_estado inner join 
											      vehiculo V on T.id_vehiculo = V.id_vehiculo inner join 
											      marca M on V.id_marca = M.id_marca inner join 
											      modelo MO on V.id_modelo = MO.id_modelo")or die (mysql_error());
		
			echo "<form class='chequeado' method='post' action=". $validar_modificacion_transportes.">";
			if ($row = mysql_fetch_array($consulta_transporte)){
				echo "<table border = '1'> \n";
				echo "<tr><td>MARCA</td><td>MODELO</td><td>PATENTE</td><td>ESTADO</td><td>KM RECORRIDOS</td><td>NUMERO DE CHASIS</td><td>NUMERO DE MOTOR</td></tr>\n";
			
				do{
					echo "<tr><td>".$row["marca"]."</td><td>".$row["modelo"]."</td><td>".$row["patente"]."</td><td>".$row["estado"]."</td><td>".$row["km"].".KM</td><td>".$row["chasis"]."</td><td>".$row["motor"]."</td><td class='tBotonAgregar'><a target='_blank' href='".$graficar_combustible ."?ID=".$row["ID"]."' class = 'tLink'>Seleccionar</a></td><br></tr> \n";     
				
				}while ($row = mysql_fetch_array($consulta_transporte));
			
				echo "</table> \n";
			 
			
			} else {
				echo "<h3> No se encontraron registros </h3>";
		} 
		
		?>	
		</div>
		</div>
	</body>
</html>