
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
<?php   	session_start();
		include ("../../../rutas.php"); 
 	   
	   $permiso = "administracion de permisos";
				
	    $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		  mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
		include("../../../permiso.php");
?>
<div id='divHeader'>
			   <h1> ADMINISTRAR PERMISOS</h1>
		</div>
	<nav id='divNav' >
       <ul>
			<li><a href="./usuarios_datos.php">ADMINISTRAR USUARIOS</a></li>
			 
			<li><a href="../registrar_datos.php">SALIR</a></li>

       </ul>
 
	</nav>
	<div id="divContenedor">
	</br>
		<a href="./<?php echo $asignar_permiso ?>" class="boton">&nbsp;&nbsp;ASIGNAR PERMISOS&nbsp;&nbsp;</a></br>
		</br><a href="./<?php echo $agregar_permiso ?> "class="boton">&nbsp;&nbsp;AGREGAR NUEVO PERMISO&nbsp;&nbsp;</a></br>
	</div>
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
	 echo    "<div class='divTabla'>"	;
		
			if ($chofer = mysql_fetch_array($consulta_permiso_chofer)){
			echo "<div id='divContenedor'><h3>CHOFER</h3> </div><table border = '1'> \n";
			echo "<tr><td>PERMISOS</td></tr>\n";
			do{
				echo "<tr><td>".$chofer["permiso"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_permiso ."?ID=".$chofer["ID"]."' class = 'tLink' >ELIMINAR</a></td></tr> \n";     
			} while ($chofer = mysql_fetch_array($consulta_permiso_chofer));
			echo "</table> \n";
			
			
		} else {
			echo "<h3> No se encontraron registros </h3>";
		}

		if ($admin = mysql_fetch_array($consulta_permiso_admin)){
			echo "<div id='divContenedor'><h3>ADMINISTRADOR</h3></div><table border = '1'> \n";
			echo "<tr><td>PERMISOS</td></tr>\n";
			do{
				echo "<tr><td>".$admin["permiso"]."</td><td class='tBotonElim'><a href='".$validar_eliminacion_permiso ."?ID=".$admin["ID"]."' class = 'tLink' >ELIMINAR</a></td></tr> \n";     
			} while ($admin = mysql_fetch_array($consulta_permiso_admin));
			echo "</table> \n";
			
								
		} else {
			echo "<h3> No se encontraron registros </h3>";
		} 
		
			if ($supervisor = mysql_fetch_array($consulta_permiso_supervisor)){
			echo "<div id='divContenedor'><h3>SUPERVISOR</h3></div><table border = '1'> \n";
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



</html>