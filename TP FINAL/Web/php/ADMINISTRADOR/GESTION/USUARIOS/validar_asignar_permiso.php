<?php include ("permisos_datos.php"); ?>
<?php


	$permiso = $_POST["permiso"];
	$rol = $_POST["rol"];

	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");

	$consulta1 = mysql_query(" select codigo_rol codigo
								from rol
								where descripcion = '".$rol."'") or die (mysql_error());
	
	$fila1 = mysql_fetch_assoc($consulta1) or die (mysql_error());
	
	$consulta2 = mysql_query(" select id_permiso id
								from permiso
								where descripcion = '".$permiso."'") or die (mysql_error());
								
	
	$fila2 = mysql_fetch_assoc($consulta2) or die (mysql_error());
	
	$cod_rol = $fila1["codigo"];
	$id_permiso = $fila2["id"];
	
    $consulta_id= mysql_query(" SELECT MAX( id_dp ) ID
                                        FROM dar_permiso ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_dp= $fila1["ID"];
			
			$id_dp +=1;
	
	$insertar_permiso = mysql_query ("insert into dar_permiso(id_permiso,codigo_rol,id_dp)
											values('".$id_permiso."','".$cod_rol."','".$id_dp."');") or die (mysql_error());
?>

