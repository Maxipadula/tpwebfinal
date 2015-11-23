<?php
	$id_rol = $_SESSION["cod_rol"];
	
	$validar_permiso = mysql_query("SELECT *
									FROM rol R join
									     dar_permiso DP on R.codigo_rol = DP.codigo_rol join
										 permiso P on DP.id_permiso = P.id_permiso
									WHERE P.descripcion = '".$permiso."' and R.codigo_rol = '".$id_rol."'") or die (mysql_error());
	
	$filasafectadas = mysql_num_rows($validar_permiso);
	
	 if ( $filasafectadas != 1)
		
		die ("<div id='divContenedor'> <h1> No dispone de permisos suficientes para ingresar a este sitio </h1> </div>");						
?>