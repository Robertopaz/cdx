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
		<div class="div3"></div>
		<div class="div7">
			<h1>Gestión Académica</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Tipo de gestión</h4></div>
	   		<div class="div4"><h4>Cargo</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv">
	   			<option value="0" style="display: none;">Seleeciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div4">
	   			<select id="tipo" style="width: 220px;"> 
	   			<option value="2" style="display:none">Selecciona...</option>
	   			<option value="1">Individual</option>
	   			<option value="0">Colectivo</option>
	   			</select>
	   		</div>
	   		<div class="div4"> <input type="text" id="cargo" placeholder="ej. Coordinador"></div>
	   		<div class="div12"></div>
	   		
	   			   		
	   		<div class="div4"><h4>Función</h4></div>
	   		<div class="div4"><h4>Órgano colegiado</h4></div>
	   		<div class="div4"><h4>Aprobado</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><textarea id="fun"></textarea></div>	   		
	   		<div class="div4"><textarea id="cole"></textarea></div>	   		
	   		<div class="div4"><select style="width: 190px;" id="apro">
	   		<option value="2" style="display:none">Selecciona...</option>
	   				<option value="1">Si</option>
	   				<option value="0">No</option>
	   			</select>
	   		</div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Resultados</h4></div>
	   		<div class="div4"><h4>Terminada</h4></div>
	   		<div class="div4"><h4>Fecha de inicio de gestión</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><textarea id="resul"></textarea></div>	   		
	   		<div class="div4"><select style="width: 190px;" id="term">
	   		<option value="2" style="display:none">Selecciona...</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div4"><input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="feciges"></div>
	   		<div class="div12"></div>
	   		
	   		
	   		<div class="div4"><h4>Fecha de término<br>de gestión</h4></div>
	   		<div class="div4"><h4>Fecha de último informe</h4></div>
	   		<div class="div4"><h4>Horas a la semana</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="fectges"></div>
	   		<div class="div4"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="date" id="fecuinfo"></div>
	   		<div class="div4"><input style="height: 25px;" placeholder="Sólo números" type="number" id="hra"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="gestionacademica(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';}else{
		header('location:index.php');
		}?>
