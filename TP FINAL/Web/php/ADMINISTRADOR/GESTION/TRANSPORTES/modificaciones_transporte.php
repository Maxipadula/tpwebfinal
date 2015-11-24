<?PHP

	
 include ("transportes_datos.php");
 
	$id_transporte = $_SESSION["id_transporte"];
	
	
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	if (isset ($_POST["marca"])){
		$consulta_marca =mysql_query("SELECT id_vehiculo id
									  FROM vehiculo
									  WHERE id_marca = ".$_POST["marca"]."")or die (mysql_error());
									  
		$vehiculo=mysql_fetch_assoc($consulta_marca);
		
		$update_usuario = mysql_query("UPDATE transporte
									   SET id_vehiculo ='".$vehiculo["id"]."'
									   WHERE id_transporte = '".$id_transporte."'") or die (mysql_error());
		
	}
	
	if (isset ($_POST["modelo"])){
		$consulta_modelo =mysql_query("SELECT id_vehiculo id
									  FROM vehiculo
									  WHERE id_marca = ".$_POST["modelo"]."")or die (mysql_error());
									  
		$vehiculo=mysql_fetch_assoc($consulta_modelo);
		$update_usuario = mysql_query("UPDATE transporte
									   SET id_vehiculo ='".$vehiculo["id"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
		
	}
    
	if (isset ($_POST["patente"])){
		$update_usuario = mysql_query("UPDATE transporte
									   SET patente ='".$_POST["patente"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["km"])){
		$update_usuario = mysql_query("UPDATE transporte
									   SET km_recorridos ='".$_POST["km"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["año"])){
		$update_usuario = mysql_query("UPDATE transporte
									   SET anio_fabricacion ='".$_POST["patente"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["estado"])){
		
		$consulta = mysql_query("UPDATE transporte
									   SET id_estado ='".$_POST["estado"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
								 
	
		
	}
	if (isset ($_POST["motor"])){
		
		$consulta = mysql_query("UPDATE transporte
									   SET num_motor ='".$_POST["motor"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
								 
	
		
	}
	if (isset ($_POST["chasis"])){
		
		$consulta = mysql_query("UPDATE transporte
									   SET num_chasis ='".$_POST["chasis"]."'
									   WHERE id_transporte = '".$id_transporte."'")or die (mysql_error());
								 
	
		
	}
	
	header("location:./transportes_datos.php");
?>