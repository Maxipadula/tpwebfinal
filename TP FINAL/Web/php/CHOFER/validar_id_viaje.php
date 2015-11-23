<?PHP
	session_start() ;
	
	
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$id_viaje = $_POST["id_viaje"];
	$id_chofer =  $_SESSION["id_usuario"];
	
	$consulta_viaje = mysql_query("SELECT * 
									FROM viaje
									WHERE id_viaje ='".$id_viaje."' AND  id_usuario='".$id_chofer."'") or die (mysql_error());
									
	$numero = mysql_num_rows($consulta_viaje);
	
	if($numero == 1){
		
		$_SESSION["id_viaje"]=$id_viaje;
		header("location:./".$chofer_home."");
	}
	else{
		echo "LO SIENTO, NO ESTAS ASIGNADO AL VIAJE INGRESADO";
	}
	

	

?>
