<html>
	<?PHP
	include ("usuarios_datos.php");


	$id_usu_eliminar =$_GET["ID"];
	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
	
	
	mysql_query("DELETE FROM usuario WHERE id_usuario = '".$id_usu_eliminar."'")
    or die(mysql_error()); 
	
	echo("<div id='divContenedor'>ELIMINACION EXITOSA </div>");
	?>
	
</html>