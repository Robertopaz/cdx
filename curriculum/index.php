<!DOCTYPE html>
<!-- VARIABLES DE SESION -->
<html>
<head>
		<title>Portal Informática</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/cd-fi-uaq.css">
	<script src="js/funciones.js"></script>
	
</head>
<body>
<header>
	<!-- DATOS DE LOGIN -->
	<div id="barra-titulo">
		<div class="titulo">
			<h1>PORTAL INFORMÁTICA</h1>
		</div>

		
	</div>
</header>
<div class=" div6 formularioLog">
<div class="div4 divEscudoForm "><img src="css/images/escudoPrueba.png" class="escudoForm"></div>
	<h1 class="tituloForm">Inicio de Sesión</h1>
	<div class="div12 abajoLog">
		<input type="text" name="" class="div8 inputForm" id="usuario" placeholder="Usuario">
	<input type="password" name="" class="div8 inputForm" id="password" placeholder="Contraseña">
	<button class="div3 botonForm menta logBtn" name="Submit" value="Submit" onclick="Validacion()">Aceptar</button>
	</div>
	
</div>
<div id="bg-negro" onclick="cerrar()"></div>
<div id="modal">
	<h1></h1>
	<p></p>
	<div class="div4"></div>
	<button class="div4 menta" onclick="cerrar()">OK</button>
</div>
</body>
</html