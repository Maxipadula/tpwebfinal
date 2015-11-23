
<html>
<head>
	<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../../../../js/funciones/validarEliminar.js"></script>
</head>
<body>
<?php include ("permisos_datos.php"); ?>
	<div id="divContenedor">
	</br>
	<p>SELECCIONAR PERMISO A ELIMINAR</p>
	
	<?php
		
		include ('../../../rutas.php');
	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta_permiso_chofer = mysql_query ("SELECT R.descripcion rol,P.descripcion permiso,DP.id_dp ID
											        FROM rol R inner join 
											            dar_permiso DP on R.codigo_rol = DP.codigo_rol inner join
												        permiso P on P.id_permiso = DP.id_permiso
											        WHERE DP.codigo_rol = '1' ")or die (mysql_error());
													
		
		 $consulta_permiso_admin = mysql_query ("SELECT R.descripcion rol,P.descripcion permiso,DP.id_dp ID
											        FROM rol R inner join 
											            dar_permiso DP on R.codigo_rol = DP.codigo_rol inner join
												        permiso P on P.id_permiso = DP.id_permiso
											        WHERE DP.codigo_rol = '2' ")or die (mysql_error());
	    
		
		$consulta_permiso_supervisor = mysql_query ("SELECT R.descripcion rol,P.descripcion permiso,DP.id_dp ID
											        FROM rol R inner join 
											            dar_permiso DP on R.codigo_rol = DP.codigo_rol inner join
												        permiso P on P.id_permiso = DP.id_permiso
											        WHERE DP.codigo_rol = '3' ")or die (mysql_error());
	echo "<div id='divContenedor'> ";
	 echo    "<div class='divTabla'>"	;
		
			if ($chofer = mysql_fetch_array($consulta_permiso_chofer)){
			echo "CHOFER </br><table border = '1'> \n";
			echo "<tr><td>PERMISOS</td></tr>\n";
			do{
				echo "<tr><td>".$chofer["permiso"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_permiso ."?ID=".$chofer["ID"]."' class = 'tLink' >ELIMINAR</a></td></tr> \n";     
			} while ($chofer = mysql_fetch_array($consulta_permiso_chofer));
			echo "</table> \n";
			
			
		} else {
			echo "<h3> No se encontraron registros </h3>";
		}

		if ($admin = mysql_fetch_array($consulta_permiso_admin)){
			echo "ADMINISTRADOR </br><table border = '1'> \n";
			echo "<tr><td>PERMISOS</td></tr>\n";
			do{
				echo "<tr><td>".$admin["permiso"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_permiso ."?ID=".$admin["ID"]."' class = 'tLink' >ELIMINAR</a></td></tr> \n";     
			} while ($admin = mysql_fetch_array($consulta_permiso_admin));
			echo "</table> \n";
			
			echo "</br></br>";
			
			
		} else {
			echo "<h3> No se encontraron registros </h3>";
		} 
		
			if ($supervisor = mysql_fetch_array($consulta_permiso_supervisor)){
			echo "SUPERVISOR </br><table border = '1'> \n";
			echo "<tr><td>PERMISOS</td></tr>\n";
			do{
				echo "<tr><td>".$supervisor["permiso"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_permiso ."?ID=".$supervisor["ID"]."' class = 'tLink' >ELIMINAR</a></td></tr> \n";     
			} while ($supervisor = mysql_fetch_array($consulta_permiso_supervisor));
			echo "</table> \n";
		
		echo "</br></br>";	
			
		} else {
			echo "<h3> No se encontraron registros </h3>";
		} 
	?>
	</div>
	</div>
	</div>
</body>
</html>