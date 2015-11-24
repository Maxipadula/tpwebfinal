<?php include ("permisos_datos.php"); ?>
<?php


	$dp = $_GET["ID"];


	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");

	
	mysql_query("DELETE FROM dar_permiso WHERE id_dp = '".$dp."'")
    or die(mysql_error()); 
	
		header("location:./permisos_datos.php");
?>