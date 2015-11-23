<html>
<?php include ("permisos_datos.php"); ?>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../../../../js/funciones/validarAgregarPermiso.js"></script>
</head>
<body>
<div id="divContenedor">

	<?PHP
		   
			if(!isset($_SESSION)){
			session_start();
			}
		
				include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_permiso) ID
                                        FROM permiso ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_permiso= $fila1["ID"];
			
			$id_permiso +=1;
	?>
	<form class='contacto' method="post" action="<?php echo  $validar_agregar_permiso ?>">
 		<div id="contacto">
 		</br>
 				<div><label>ID DEL PERMISO:</label>
					</br>
					<input type="text" name="id_permiso"  value="<?php echo $id_permiso?>"readonly = "readonly">
 				</div>	
 				</br>
				
				<div><label>NOMBRE DEL PERMISO QUE DESEA AGREGAR:</label>
				</br>
 				<input type="text" name="permiso" id="permiso">
 				<div id="mensaje1" class="errores"> Ingresa solo letras</div>
 				</div>
 				</br>
		
 				<input type="submit" value="Agregar" class="boton" id="boton" />
				
 	</form>
</div>
</body>
</html>