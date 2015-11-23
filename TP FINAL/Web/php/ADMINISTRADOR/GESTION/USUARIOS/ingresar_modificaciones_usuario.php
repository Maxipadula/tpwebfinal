<?PHP

	
 include ("usuarios_datos.php");
	$id_usuario = $_SESSION["usuario_a_modificar"];
	
	
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	if (isset ($usuario)){
		$update_usuario = mysql_query("UPDATE usuario
									   SET usuario ='".$_POST["usuario"]."'
									   WHERE id_usuario = '".$id_usuario."'") or die (mysql_error());
		
	}
	
	if (isset ($_POST["nombre"])){
		$update_usuario = mysql_query("UPDATE usuario
									   SET nombre ='".$_POST["nombre"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());
		
	}
    
	if (isset ($_POST["password"])){
		$update_usuario = mysql_query("UPDATE usuario
									   SET pass ='".$_POST["password"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["fecha"])){
		$update_usuario = mysql_query("UPDATE usuario
									   SET fecha_nacimiiento ='".$_POST["fecha"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["licencia"])){
		$update_usuario = mysql_query("UPDATE usuario
									   SET id_licencia ='".$_POST["licencia"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());
		
	}
	
	if (isset ($_POST["rol"])){
		
		$consulta = mysql_query("SELECT codigo_rol
								 FROM rol
								 WHERE descripcion = '".$_POST["rol"]."'")or die (mysql_error());
								 
		$id_rol= mysql_fetch_assoc($consulta);
		
		$update_usuario = mysql_query("UPDATE usuario
									   SET codigo_rol ='".$id_rol["codigo_rol"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());
		
	}
	
	echo("<div id='divContenedor'>MODIFICACION EXITOSA</div>");

?>