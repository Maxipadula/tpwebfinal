<html>
<body>
<?php
				   $consulta_usuario = mysql_query ('SELECT U.nombre nombre,U.usuario usuario,U.pass pass,U.fecha_nacimiento fecha,T.descripcion tipo,U.num_doc num,U.id_licencia licencia,R.descripcion rol
											     FROM tipo_doc T inner join 
												      usuario U on T.id_tipo_doc = U.id_tipo_doc inner join
												      rol R on U.codigo_rol = R.codigo_rol')or die (mysql_error());
		
			if ($row = mysql_fetch_array($consulta_usuario)){
		
     		echo "<table border = '1'> \n";
			echo "<tr><td>NOMBRE</td><td>USUARIO</td><td>CONTRASEÑA</td><td>FECHA DE NACIMIENTO</td><td>TIPO DOC</td><td>NUMERO DE DOC</td><td>LICENCIA</td><td>ROL</td></tr>\n";
			
			do{
				echo "<tr><td>".$row["nombre"]."</td><td>".$row["usuario"]."</td><td>".$row["pass"]."</td><td>".$row["fecha"]."</td><td>".$row["tipo"].".KM</td><td>".$row["num"]."</td><td>".$row["licencia"]."</td><td>".$row["rol"]."</td></tr> \n";     
			} while ($row = mysql_fetch_array($consulta_usuario));
			echo "</table> \n";
			 
			
		} else {
			echo "<h3> No se encontraron registros </h3>";
		} 
?>
</body>
</html>