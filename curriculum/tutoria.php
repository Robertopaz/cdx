<?php
session_start();
if(isset($_SESSION['valida'])){

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
		<div class="div4"></div>
		<div class="div4">
			<h1>Tutorías</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Nombre del alumno</h4></div>
	   		<div class="div4"><h4>Nivel de estudios</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><select style="width: 200px;" id="clv">
	   			<option value="0" style="display: none;">Seleeciona el profesor</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>		
	   		<div class="div4"><input placeholder="Obligatorio" type="text" id="alu"></div>
	   		<div class="div4"><select id="nil"  style="width: 190px;">
	   			<option value="0" style="display:none">Selecciona el nivel</option>
	   			<option value="1" >Licenciatura</option>
	   			<option value="2" >Maestria</option>
	   			<option value="3">Doctorado</option>
	   			<option value="4">Posdoctorado</option>
	   			</select></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><h4>Programa educativo</h4></div>
	   		<div class="div4"><h4>Tutoría terminada</h4></div>
	   		<div class="div4"><h4>Fecha de inicio</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><select id="prog" style="width: 190px;">
	   			<option value="0" style="display:none">Selecciona el programa</option>
	   			<option value="INC11">INC11</option>
	   			<option value="SOF11">SOF11</option>
	   			<option value="TEL11">TEL11</option>
	   			<option value="LAT11">LAT11</option>
	   			<option value="INF11">INF11</option>
	   			<option value="ASE">Asesorias</option>
	   			<option value="POS">Posgrado</option>
	   		</select></div>
	   		<div class="div4"> <select id="term" style="width: 190px;">
	   			<option value="2" style="display:none">Selecciona la opción</option>
	   			<option value="1">Sí</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div4"><input type="date" id="feci" style="width: 190px;"></div>
	   		<div class="div12"></div>

	   		<div class="div6"><h4>Fecha de fin</h4></div>
	   		<div class="div6"><h4>Tipo de tutoria</h4></div>
	   		<div class="div12"></div>
	   		<div class="div6"><input type="date" id="fecf" style="width: 350px;"></div>
	   		<div class="div6"> <input type="text" id="tipo" style="width: 350px;"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="tutorias(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php'; }else{
		header('location:index.php');
		}?>