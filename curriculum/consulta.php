<?php
session_start();
if(isset($_SESSION['valida'])){
	include 'up.php'; 
	include 'conex.php';
	$con=Conectarse();
?>

<div id="bg-negro" onclick="cerrar()"></div>
<div id="modal"></div>

<div id="contenido">
	<div class="div12">
		<div class="div4"><div class="div5"><label>Buscar</label></div><div class="div7"><select class="div12" id="parametroBusqueda">
			<option>Profesor</option>
			<option>Articulos</option>
			<option>Asesorias</option>
			<option>Consultoria</option>
			<option>Datos laborales</option>
			<option>Direccion individualizada</option>
			<option>Docencia</option>
			<option>Estudios</option>
			<option>Gestion academica</option>
			<option>LGAC</option>
			<option>Libros</option>
			<option>Material de apoyo</option>
			<option>Memorias</option>
			<option>Patente</option>
			<option>Premio</option>
			<option>Proyecto de investigacion</option>
			<option value="Tutoria">Tutoría</option>
		</select></div></div>
		<div class="div6"><div class="div6"><label>Clave o nombre de profesor*</label></div>
		<div class="div6"><input type="text" name="" class="div12" id="cve-nom"></div></div>
		<div class="div2"><div class="div6">
			<div class="div1"></div><button class="div11 oscuro" onclick="Busqueda()">Aceptar</button></div></div>
		</div>
		<hr>
		<div class="div12" id="cuerpoConsulta">
		<hr>
		<div id="bg-negro" onclick="cerrar()"></div>
		<div id="modal"></div>
		
</div>
	<?php include 'down.php'; }else{
		header('location:index.php');
		}?>