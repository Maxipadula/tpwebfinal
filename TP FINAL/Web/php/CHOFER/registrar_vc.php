<html>
<head>
		<title>Vale Combustible | S.G.L</title>
		<script type="text/javascript" src="../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../js/funciones/validarVC.js"></script>
</head>
	<body>

		<?php
			 session_start();
			 
			 include ('../rutas.php');
			 $permiso = "registrar vale";

			 $id = $_SESSION["id_usuario"];
			 $id_viaje = $_SESSION["id_viaje"];
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
			include("../permiso.php");
		?>
		
		<?php include ("menu_chofer.php");?>
				
		<div id="divContenedor">
			<h3> VALE DE COMBUSTIBLE </h3>
				
				<form class='contacto' method="post" action="<?php echo $validar_vc?>">
					<div id="contacto">
						<div><label>ID de VIAJE</label>
						</br>
						<input type="text" name="id_viaje"  value="<?php echo $id_viaje?>"readonly = "readonly">
						</div>	
						</br>
						<div><label>FECHA Y HORA</label>
						</br>
							<input type="text" name="fecha_hora_vc" id="fyh" placeholder="AAAA-MM-DD hh:mm:ss">
							<div id="mensaje1" class="errores"> Ingrese fecha valida</div>
						</div>
						
						</br>
						
						<div><label>LUGAR</label>
							</br>
							<input type="text" name="lugar_vc" id="lugar" placeholder="Lugar">
							<div id="mensaje2" class="errores"> Ingrese solo letras</div>							
						</div>
						</br>
						
						<div><label>LATITUD</label>
							</br>
							<input type="text" name="latitud" id="latitud" placeholder="Ingrese Latitud del GPS">
							<div id="mensaje3" class="errores"> Ingrese solo numeros</div>	
						</div>
						</br>
						<div><label>LONGITUD</label>
							</br>
							<input type="text" name="longitud" id="longitud" placeholder="Ingrese Longitud del GPS">
							<div id="mensaje4" class="errores"> Ingrese solo numeros</div>	
							
						</div>
						</br>
						<div><label>COSTO</label></br>
							<input type="text" name="costo_vc" id="costo" placeholder="Costo">
							<div id="mensaje5" class="errores"> Ingrese solo numeros</div>	
						</div>
						</br>
											
						<div><label>CANTIDAD</label></br>							
							<input type="text" name="cantidad_vc" id="cantidad" placeholder="Cantidad">
							<div id="mensaje6" class="errores"> Ingrese solo numeros</div>	
						</div>
						</br>
				
						<input type="submit" value="Registrar" id="boton" class="boton" />
						<input type="reset" value="Borrar Todo" class="boton">
					</div>
				</form>

			</div>
		</div>
	</body>
</html>