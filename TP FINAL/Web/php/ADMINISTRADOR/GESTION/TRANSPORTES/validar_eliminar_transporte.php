<html>
	<?php include("transportes_datos.php"); ?>
	<div id="divContenedor">
	<?PHP
	
	if(!isset($_SESSION))
	session_start() ;
	
	$id_trans_elim =$_GET ["ID"];
	
	
		include ('../../../rutas.php');
	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	mysql_query("DELETE FROM transporte WHERE id_transporte = '".$id_trans_elim."'")
    or die(mysql_error()); 

    //Mensaje y boton para continuar//
	echo("<h3>ELIMINACION EXITOSA</h3>");
	?>
	<button onclick="location.href='./<?php echo $eliminar_transportes  ?>'" class="boton">Continuar</button>
	</div> 
</html>