<html>
 <?php include ("viajes_datos.php"); ?>
<head>
</head>
<body>
	<?php
    	$id_v=$_GET["ID"];

	 include ('../rutas.php');?>
	
	
	<div id="divContenedor">
	 	<h2>MODIFICAR VIAJES</H2>
		<p>Que dato desea modificar?</p>

		<form class='contacto' method="post"  action="<?php echo $menu_modificacion_viajes2?>">
			<div id="alineacion">
			</br>
 				<div><label>ID</label>
					</br>
					<input type="text" name="id_viajee"  value="<?php echo $id_v?>"readonly = "readonly">
 				</div>	
 			</br>
			<!--<input type="checkbox" name="datos[]" value="id">ID VIAJE</input>
			<br>
			-->
			<input type="checkbox" name="datos[]" value="nombre">NOMBRE</input>
			<br>
			<input type="checkbox" name="datos[]" value="acoplado">ACOPLADO</input>
			<br>
			<input type="checkbox" name="datos[]" value="transporte">TRANSPORTE</input>
			<br>
			<input type="checkbox" name="datos[]" value="origen">ORIGEN</input>
			<br>
			<input type="checkbox" name="datos[]" value="destino">DESTINO</input>
			</br>
			<input type="checkbox" name="datos[]" value="cliente">CLIENTE</input>
			</br>
			<input type="checkbox" name="datos[]" value="fecha_inicio">FECHA INICIO</input>
			</br>
			<input type="checkbox" name="datos[]" value="carga">CARGA</input>
			</br>
			</br>
		</div>
			<input type="submit" value="Modificar" class="boton" />
			<input type="button" onclick="history.back()" name="volver atrás" value="Volver" class="boton"/>
	
		</form>
	</div>
</body>
</html>