<html>
	<?PHP

	 include ("mecanicos_datos.php");
	 
	$id_mecanico_elim = $_GET["ID"];
	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");;
		
	
	
	mysql_query("DELETE FROM mecanico WHERE id_mecanico = '".$id_mecanico_elim."'")
    or die(mysql_error()); 
	echo "<div id='divContenedor'> Eliminacion Exitosa </div>";
	?>

	
</html>