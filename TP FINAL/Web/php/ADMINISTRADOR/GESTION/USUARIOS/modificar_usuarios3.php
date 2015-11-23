<html>
	<head>
	<meta charset="UTF-8">
		<title>Modificar User | S.G.L</title>
		
		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarModificarUsuarios.js"></script>
		
		<LINK REL="Stylesheet" HREF="../Css/login.css" TYPE="text/css">
	</head>
	
	
	
	 <?php include ("usuarios_datos.php"); ?>
	 
	 <div id="divContenedor">
	<?php 
	
	if(!isset($_SESSION)){
		session_start();
	}
	$modificar = $_POST["id_usuario"];
	
	$_SESSION["usuario_a_modificar"] = $modificar;
	

 		
 		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
		
		echo "<form class='chequeado' method='post' action=". $ingresar_modificaciones_usuario.">";
		
		ifs('usuario');
		ifs('nombre');
	    ifs('password');

		
    if(chequeado('licencia'))
	{
		echo "</br>Licencia</br>
		<select name='licencia'>
		<option value='NO' selected='selected'>NO</option>
		<option value='A.1'>A.1</option>
        <option value='B.1'>B.1</option>
        <option value='B.2'>B.2</option>
		<option value='C'>C</option>
		<option value='D.1'>D.1</option>
		<option value='D.2'>D.2</option>
		<option value='E.1'>E.1</option>
		<option value='E.2'>E.2</option>
		<option value='F'>F</option>
		</select>"
		;}
		
		  if(chequeado('rol'))
		{
		echo "</br>Rol</br>
		  <select name='rol'>    
		  <option value='chofer' selected='selected'>Chofer</option>
        <option value='administrador'>Administrador</option>
          <option value='supervisor'>Supervisor</option>
          </select>"
		;}
				echo "<br>";
		
		echo "</br> <input type='submit' value='Enviar' class='boton'/>
							<input type='reset' value='Borrar' class='boton'/>
							</form> ";
		
		
		
		
		
		function ifs ($check){
		
			if(chequeado($check))
			{
			  echo "</br>
					 ".ucfirst($check)."
						</br>
						<input type='text' name='".$check."'>
						
			
					
					</br>";
				};
		}
		
		function chequeado($valor){
			if(!empty($_POST["datos"]))
			{
				foreach($_POST["datos"] as $chkval)
				{
					if($chkval == $valor)
					{
						return true;
					}
				}
			}
        return false;
        }

	
	?>
	</div>
</html>
