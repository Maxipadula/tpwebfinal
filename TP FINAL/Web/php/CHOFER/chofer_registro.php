<html>
	<head>
		<title>Crear Registro | S.G.L</title>
		<script type="text/javascript" src="../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../js/funciones/validarRegistro.js"></script>
	</head>
	
	<body>
		<?php
			
			 session_start();
			 
			 $permiso ="registrar datos de viaje";
			 $id = $_SESSION["id_usuario"];
			 $id_viaje = $_SESSION["id_viaje"];
			 
			 include ('../rutas.php');
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../permiso.php");
			
		?>
		
		<?php include ("menu_chofer.php");?>
				
		<div id="divContenedor">
			<h3> REGISTRO DE VIAJE</h3>
			<div class="divTabla">
					
			<form class='contacto' method="post" action="<?php echo $chofer_validar_registro_viaje?>">
			<div id="contacto">
				
						<div><label>ID de VIAJE</label>
						</br>
						<input type="text" name="id_viaje"  value="<?php echo $id_viaje?>"readonly = "readonly">
						</div>	
						</br>
				
				<div><label>FECHA Y HORA DE LLEGADA</label>
				</br>
					<input type="text" name="fecha_hora_viaje" id="fyh" placeholder="AAAA-MM-DD hh:mm:ss">
					<div id="mensaje1" class="errores"> Ingrese fecha valida</div>					
				</div>
				</br>
				
				<div><label>KILOMETROS RECORRIDOS</label>
				</br>
					<input type="text" name="km_recorridos_viaje" size="5" id="km" placeholder="Kilometros Recorridos">
					<div id="mensaje2" class="errores"> Ingrese solo numeros</div>	
				</div>
				
				</br>
				<div><label>COMBUSTIBLE CONSUMIDO</label>
				</br>
					<input type="text" name="combustbile" size="5" id="combustible" placeholder="Combustible Consumido">
					<div id="mensaje3" class="errores"> Ingrese solo numeros</div>	
					
				</div>
				
				</br>
				
			
				<input type="submit" value="Registrar" class="boton" id="boton">
				<input type="reset" value="Borrar Todo" class="boton">
			</div>
			</form>
			</div>
		</div>
	</body>
</html>