<html>
	
	 <?php include ("mecanicos_datos.php"); ?>
	<?php 
	
	if(!isset($_SESSION)){
		session_start();
	}
	$modificar = $_GET["ID"];
	
	$clase = $_GET["clase"];
	

 		
 		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
	
	
?>
	
	<?php if($clase == "int"){?>
		
		<form class='contacto' method='post' action=".<?php echo  $validar_mecanico_interno ?>.">
 		<div id='contacto'>
 				</br>
 				<div><label>ID</label>
					</br>
					<input type='text' name='id_mecanico'  value=".<?php echo $modificar?>."readonly = 'readonly'>
 				</div>	
 				</br>
		
 				<div><label>EMPRESA</label>
 					</br>
 					<input type='text' name='empresa' id='user' placeholder='Usuario'>
 					<div id='mensaje1' class='errores'> Ingresa solo letras</div>
 				</div>
 				</br>
		
	<?php }?>
</html>