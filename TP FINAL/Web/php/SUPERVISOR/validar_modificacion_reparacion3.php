<?PHP
 include ("reparacion_datos.php");
 

	$cod_mod = $_SESSION["reparacion_a_modificar"];
	
	
	
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	
	
	
	if (isset ($_POST["costo"])){
		$update_costo = mysql_query("UPDATE reparacion
									   SET costo ='".$_POST["costo"]."'
									   WHERE codigo_reparacion = '".$cod_mod."'")or die (mysql_error());	
	}
	
	if (isset ($_POST["fecha"])){
		$update_fecha = mysql_query("UPDATE reparacion
									   SET fecha ='".$_POST["fecha"]."'
									   WHERE codigo_reparacion = '".$cod_mod."'")or die (mysql_error());	
	}
  
 	if (isset ($_POST["mecanico"])){
		$update_mecanico = mysql_query("UPDATE reparacion
									   SET id_mecanico ='".$_POST["mecanico"]."'
									   WHERE codigo_reparacion = '".$cod_mod."'")or die (mysql_error());	
	}
	
	 if (isset ($_POST["transporte"])){
		$update_transporte = mysql_query("UPDATE reparacion
									   SET id_transporte ='".$_POST["transporte"]."'
									   WHERE codigo_reparacion = '".$cod_mod."'")or die (mysql_error());	
	}
	
	if (isset ($_POST["orden"])){
		$update_orden = mysql_query("UPDATE reparacion
									   SET id_orden ='".$_POST["orden"]."'
									   WHERE codigo_reparacion = '".$cod_mod."'")or die (mysql_error());	
	}


	echo("MODIFICACION EXITOSA");
	
?>