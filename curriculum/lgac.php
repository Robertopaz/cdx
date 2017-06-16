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
		<div class="div12">
			<h1>Lineas de generación o Aplicación innovadora del conocimiento</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Campo</h4></div>
	   		<div class="div4"><h4>Actividades</h4></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>		
	   		<div class="div4"> <textarea id="campo"></textarea></div>	   		
	   		<div class="div4"> <textarea type="text" id="act"></textarea></div>
	   		<div class="div12"></div>


	   		<div class="div4"><h4>Horas</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><input placeholder="solo número" onkeypress="return valida(event)" type="text" id="hrs"></div>
	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="aplicacion(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>