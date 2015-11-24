<html>

	<?php
		include ("transportes_datos.php");
		
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
		include ("../../../rutas.php");
		
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	  	$transporte = $_GET["ID"];
		
		
		$_SESSION["id_transporte"] = $transporte;			
	

	?>	
<div id="divContenedor">
 	<h2>MODIFICAR TRANSPORTE</H2>
		<p>Que dato desea modificar?</p>

		<form class='contacto' method="post" action="<?php echo $menu_modificacion_transporte?>">
			<div id="alineacion">
			</br>
 				<div><label>ID</label>
					</br>
					<input type="text" name="id_transporte"  value="<?php echo $transporte?>"readonly = "readonly">
 				</div>	

			<input type="checkbox" name="datos[]" value="vehiculo">Vehiculo</input>
			<br>
			<input type="checkbox" name="datos[]" value="patente">Patente</input>
			<br>
			<input type="checkbox" name="datos[]" value="estado">Estado</input>
			<br>
			<input type="checkbox" name="datos[]" value="chasis">Numero de Chasis</input>
			<br>
			<input type="checkbox" name="datos[]" value="motor">Numero de Motor</input>
			</br>
			<br>
			<input type="checkbox" name="datos[]" value="km">Km recorridos</input>
			</br>
			<br>
			<input type="checkbox" name="datos[]" value="año">Año de fabricacion</input>
			</br>
			</br>
		</div>
			<input type="submit" value="Modificar" class="boton" />

	
		</form>
	</div>
</div>
</html>	