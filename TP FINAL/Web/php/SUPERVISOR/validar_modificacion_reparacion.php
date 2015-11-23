<html>
 <?php include ("reparacion_datos.php"); ?>
<head>
</head>
<body>
	<?php
    	$cod_r=$_GET["ID"];

	 include ('../rutas.php');?>
	
	
	<div id="divContenedor">
	 	<h2>MODIFICAR REPARACIONES</H2>
		<p>Que dato desea modificar?</p>

		<form class='contacto' method="post"  action="<?php echo $validar_modificacion_reparacion2?>">
			<div id="alineacion">
			</br>
 				<div><label>CODIGO</label>
					</br>
					<input type="text" name="codigo"  value="<?php echo $cod_r?>"readonly = "readonly">
 				</div>	
 			</br>
	
			<input type="checkbox" name="datos[]" value="mecanico">MECANICO</input>
			<br>
			<input type="checkbox" name="datos[]" value="transporte">TRANSPORTE</input>
			<br>
			<input type="checkbox" name="datos[]" value="orden">ORDEN</input>
			<br>
			<input type="checkbox" name="datos[]" value="costo">COSTO</input>
			<br>
			<input type="checkbox" name="datos[]" value="fecha">FECHA</input>
			</br>
			</BR>
		</div>
			<input type="submit" value="Modificar" class="boton" />
			<input type="button" onclick="history.back()" name="volver atrás" value="Volver" class="boton"/>
	
		</form>
	</div>
</body>
</html>