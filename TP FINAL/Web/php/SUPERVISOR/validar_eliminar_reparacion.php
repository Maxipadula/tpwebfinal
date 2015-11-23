<?php 
	include ("reparacion_datos.php");
	
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$id_reparacion = $_GET["ID"];
	
	$eliminar_reparacion=mysql_query("DELETE FROM reparacion WHERE codigo_reparacion = '".$id_reparacion."'")or die (mysql_error());
	
	echo "ELIMINACION EXITOSA";
?>