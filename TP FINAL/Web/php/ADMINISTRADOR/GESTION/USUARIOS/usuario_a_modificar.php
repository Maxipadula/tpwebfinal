<html>
	<?php 
		session_start() ;
	
		$tipo_usuario_mod =$_POST ["tipo_usuario_modificar"] or die ;
		$num_usuario_mod =$_POST ["numero_usuario_modificar"]or die ;
		
		
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");

	$consulta_id_doc=mysql_query("SELECT *
								  FROM tipo_doc
								  WHERE descripcion ='".$tipo_usuario_mod."'")or die ("no q");
	
	$id_tipo_doc = mysql_fetch_assoc($consulta_id_doc);


	
	$consulta =("SELECT U.id_usuario 
	                      FROM usuario U inner join
							    tipo_doc TD on U.id_tipo_doc = TD.id_tipo_doc
						  WHERE TD.id_tipo_doc ='".$id_tipo_doc["id_tipo_doc"]."' AND  num_doc='".$num_usuario_mod."'") or die ("no q");
		
	$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($resultado); /*CANTIDAD DE FILAS AFECTADAS*/
	

		if ( $filasafect != 0){
	
	    if ( $filasafect == 1){
			
			$fila1 = mysql_fetch_assoc($resultado); 
			
			$_SESSION["usuario_a_modificar"] = $fila1["id_usuario"];
			
			header("Location: ./".$menu_modificacion_usuario."");
			
		}else header("location:error.php");
			 
	}else header("location:error.php");
	?>
</html>