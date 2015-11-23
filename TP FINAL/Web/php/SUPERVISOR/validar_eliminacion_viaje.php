<html>
	<?PHP
	session_start() ;
	
	$id_eliminar_viaj =$_GET ["ID"];
	
	
		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");;
		
		 $consulta  = mysql_query ("SELECT id_viaje
									FROM viaje
									WHERE id_viaje ='".$id_eliminar_viaj."'") or die ("no q");
	
	//$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($consulta); /*CANTIDAD DE FILAS AFECTADAS*/
	
	$fila1 = mysql_fetch_assoc($consulta); /*DEVUELVE UN ARRAY DONDE CADA POSICION SE CORRESPONDE CON LOS ATRIBUTOS DE LA BD*/
	
	$mecanico_eliminar = $fila1["id_viaje"];
	
	mysql_query("DELETE FROM viaje WHERE id_viaje = '$id_eliminar_viaj'")
    or die(mysql_error()); 
	
	?>
	
</html>