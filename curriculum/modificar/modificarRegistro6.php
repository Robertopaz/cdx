<?php
$registro = "actual";
include 'up.php';
include 'conex.php';

$con = Conectarse();

?>
<script src="js/funciones.js">
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Alta de tutorías</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"></div><div class="div3"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>		
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Nombre del alumno</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="alu" onblur="validar2(this.id)" required></div>
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Nivel de estudios</h4></div>
	   		<div class="div3"><select id="nil" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona el nivel</option>
	   			<option value="1" >Licenciatura</option>
	   			<option value="2" >Maestria</option>
	   			<option value="3">Doctorado</option>
	   			<option value="4">Posdoctorado</option>
	   			</select></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Programa Educativo</h4></div>
	   		<div class="div3"><select id="prog" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona el programa</option>
	   			<option value="INC11">INC11</option>
	   			<option value="SOF11">SOF11</option>
	   			<option value="TEL11">TEL11</option>
	   			<option value="LAT11">LAT11</option>
	   			<option value="INF11">INF11</option>
	   			<option value="ASE">Asesorias</option>
	   			<option value="POS">Posgrado</option>
	   		</select></div>
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Tutoria terminada</h4></div>
	   		<div class="div3"> <select id="term" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona la opción</option>
	   			<option value="1">Sí</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Fecha de Inicio</h4></div>
	   		<div class="div3"><input type="date" id="feci" style="width: 190px;"></div>
	   		<div class="div12"></div>

	   		<div class="div2"></div><div class="div3"><h4>Fecha de Fin</h4></div>
	   		<div class="div3"><input type="date" id="fecf" style="width: 190px;"></div>
	   		<div class="div12"></div>

	   		<div class="div2"></div><div class="div3"><h4>Tipo de Tutoria</h4></div>
	   		<div class="div3"> <input type="text" id="tipo"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="tutorias(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>