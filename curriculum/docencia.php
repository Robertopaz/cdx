<?php
session_start();
if(isset($_SESSION['valida'])){

$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
?>
<script>
	$( function() {
    $( "#fecini" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
  } );
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div4"></div>
		<div class="div4">
			<h1>Docencia</h1>
		</div>
		<div class="div12"></div>
	    <div class="div12"></div>


	   	<form onsubmit="return false">

	   		<div class="div4"><h4>Clave de profesor</h4></div>
	 		<div class="div4"><h4>Nombre del curso</h4></div>
	   		<div class="div4"><h4>Nivel de Estudio</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" >
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor WHERE habilitado=1  ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><select style="width: 190px;" id="curs" >
	   			<?php $qri = "SELECT cvePlan AS plan, nombreCurso AS nombre, cveCurso AS clave FROM curso ORDER BY nombre, plan ASC";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="0" style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> <?php echo "(".($row1->plan).")";?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"> <select id="nives" >
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="0" style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Dependencia de educación<br>superior donde está registrado<br>el programa educativo</h4></div>
	   		<div class="div4"><h4>Fecha de inicio</h4></div>
	   		<div class="div4"><h4>Número de alumnos</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select id="inst" style="width: 190px;">
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="0" style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><input style="width: 190px;" type="text" id="fecini"></div>
	   		<div class="div4"><input placeholder="solo números" onkeypress="return valida(event)" type="text" id="alumnos"></div>
	   		<div class="div12"></div>


	   		<div class="div4"><h4>Duración en semanas</h4></div>
	   		<div class="div4"><h4>Horas de asesoría al mes</h4></div>
	   		<div class="div4"><h4>Horas semanales dedicadas<br>al curso</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><input placeholder="solo números" onkeypress="return valida(event)" type="text" id="durar"></div>
	   		<div class="div4"><input placeholder="solo números" onkeypress="return valida(event)" type="text" id="mesase"></div>
	   		<div class="div4"> <input placeholder="solo números" onkeypress="return valida(event)" type="text" id="hracurso"> </div>
	   		<div class="div12"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="doce(this.form)">Guardar</button>
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php'; }else{
		header('location:index.php');
		}?>
