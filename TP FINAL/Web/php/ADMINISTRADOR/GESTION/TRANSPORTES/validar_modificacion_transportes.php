<html>

	<?php
		include ("transportes_datos.php");
		
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
		include ("../../../rutas.php");
		
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	   $id_transporte = $_POST["transporte"];
	   $estado = $_POST["estado"];
	
	$update = mysql_query ("UPDATE transporte
							SET id_estado = '".$estado."'
							WHERE id_transporte = '".$id_transporte."'")or die(mysql_error());
							
	
	echo"modificacion terminada";
	?>								  