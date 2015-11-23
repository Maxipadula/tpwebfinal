<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	<body>
		<?php
			 include ("../../rutas.php");
             session_start();
			 
			 
		?>

        <div id='divHeader'>
            <h1>
               LISTADOS
            </h1>

            <div id="bienvenido">
                Bienvenido, <?php echo $_SESSION["nombre"]; ?>
            </div>
		</div>
		   <nav id='divNav'>
            <ul>
                <li>
                    <a target="_blank" href="./<?php echo $lista_usuarios?>">USUARIOS</a>
                </li>

                <li>
                    <a target="_blank" href="./<?php echo $lista_transportes?>">TRANSPORTES</a>
                </li>

				
				<li>
                    <a target="_blank" href="./<?php echo $lista_viajes?>">VIAJES</a>
                </li>
				
				<li>
                    <a target="_blank" href="./<?php echo $lista_permisos?>">PERMISOS</a>
                </li>
				
				<li>
                    <a target="_blank" href="./<?php echo $lista_reparaciones?>">REPARACIONES</a>
                </li>

                <li>
                    <a href="../<?php echo $administrador_home2?>">SALIR</a>
                </li>
            </ul>
        </nav>

        <div id="divContenedor">
        </div>
	</body>
</html>