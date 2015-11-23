<html>

	<?php include("vehiculos_datos.php"); ?>
	<?PHP
	
	if(!isset($_SESSION))
	session_start() ;
	
	$id_vehiculo_elim =$_GET ["ID"];
	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	
	
	mysql_query("DELETE FROM vehiculo WHERE id_vehiculo = '".$id_vehiculo_elim."'")
    or die(mysql_error()); 
	echo("<div id='divContenedor'>ELIMINACION EXITOSA</div>");
	?>
	</div>
</html>