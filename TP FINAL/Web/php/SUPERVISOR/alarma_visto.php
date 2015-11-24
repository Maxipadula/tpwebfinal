<?php
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
				
	$contador = $_GET["contador"];
	$transporte = $_GET["ID"];
	
	
	
	$nuevo_cont = $contador+1;
			
	$aumentar_contador= mysql_query("UPDATE alar_transp
									 SET contador= '".$nuevo_cont."'
									 WHERE id_transporte = ".$transporte."")or die (mysql_error());
												           
	echo $nuevo_cont;														 
	header("location:".$supervisor_home."");
?>