<?PHP
 include ("viajes_datos.php");
 

	$id_modif = $_SESSION["viaje_a_modificar"];
	
	
	
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	/*if (isset ($usuario)){
		$update_viaje = mysql_query("UPDATE usuario
									   SET usuario ='".$_POST["usuario"]."'
									   WHERE id_usuario = '".$id_usuario."'") or die (mysql_error());
		
	}
	*/
	
	
	
	if (isset ($_POST["nombre"])){
		$update_nombre = mysql_query("UPDATE viaje
									   SET id_usuario ='".$_POST["nombre"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
									   echo "hola";
									   echo $id_modif;
		
	}
	
	
	
    
	if (isset ($_POST["acoplado"])){
		$update_acoplado = mysql_query("UPDATE viaje
									   SET id_Acoplado ='".$_POST["acoplado"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
	
	if (isset ($_POST["transporte"])){
		$update_transporte = mysql_query("UPDATE viaje
									   SET id_transporte ='".$_POST["transporte"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["origen"])){
		$update_origen = mysql_query("UPDATE viaje
									   SET origen ='".$_POST["origen"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
		if (isset ($_POST["destino"])){
		$update_destino = mysql_query("UPDATE viaje
									   SET destino ='".$_POST["destino"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
		if (isset ($_POST["cliente"])){
		$update_cliente = mysql_query("UPDATE viaje
									   SET cliente ='".$_POST["cliente"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
		if (isset ($_POST["fecha_inicio"])){
		$update_fecha = mysql_query("UPDATE viaje
									   SET fecha_inicio ='".$_POST["fecha_inicio"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	
		if (isset ($_POST["carga"])){
		$update_carga = mysql_query("UPDATE viaje
									   SET carga ='".$_POST["carga"]."'
									   WHERE id_viaje = '".$id_modif."'")or die (mysql_error());
		
	}
	

	echo("MODIFICACION EXITOSA");
	
?>