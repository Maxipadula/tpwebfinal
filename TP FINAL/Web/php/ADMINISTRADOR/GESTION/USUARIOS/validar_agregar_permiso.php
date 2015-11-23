<?php
<?php include ("permisos_datos.php"); ?>

	session_start();
	
	$permiso = $_POST["permiso"];
	$id_permiso = $_POST["id_permiso"];
	
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
	$agregar_permiso =mysql_query("insert into permiso(id_permiso, descripcion)
									values('".$id_permiso."','".$permiso."');");
	
										
	header("location: ".$permisos_datos."");
?>