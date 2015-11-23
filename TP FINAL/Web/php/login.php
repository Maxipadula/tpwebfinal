<html>

<?php include "rutas.php"; ?>
	<head>
	<meta charset="UTF-8">
		<title>LOGIN | S.G.L</title>
		
		<script type="text/javascript" src="../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../js/funciones/validarlogin.js"></script>
		
		<LINK REL="Stylesheet" HREF="../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
		
		<div id='divHeaderLogin'>
			<h1> Sistema de Gestión Logistica</h1>
		</div>
		
		<form id='login' method="post" action="<?php echo $validar?>">
				
					</br>
				<div>
					<label for="usuario">LOGIN</label></br>
					<input name="usuario" type="text" id="usuario" class="usuario" placeholder="Ingrese usuario" autofocus=""/ >
					<div id="mensaje1" class="errores"> Ingresa solo caracteres</div>
				</div>
					
					

				<div>
					<label for="pass">PASSWORD</label></br>
					<input name="clave" type="password" id="pass" class="pass" placeholder="Ingrese contraseña"/ >
					<div id="mensaje2" class="errores"> Ingrese contraseña</div>
				</div>

					</br>

				<input name="submit" type="submit" id="boton" value="Ingresar" class="boton"/>
			
		</form>
	</body>
</html>
			