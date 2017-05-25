<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
/* En esta interfaz se modificarn los registros de docencia con los que cuenta el maestro, accede por medio del id del registro*/
 echo $sql="SELECT docencia.* FROM docencia WHERE cveDocencia=".$parametro;
$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
?>
<script src="js/funciones.js">
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h1>Docencia</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" readonly="true" value=<?php echo $row[3]; ?>></div>		

	   		<div class="div1"></div><div class="div2"><h4>Nivel de Estudio</h4></div>
	   		<div class="div3"> <select id="nives" >
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el nivel</option>
						<option value="<?php echo $row1->clave;?>" <?php 	if ($row1->clave==$row[4]) {
							 echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div7"></div>
	   		<div class="div12"></div>
	   		<div class="div8"><h4>Dependencia de educación superior donde está registrado el progrma educativo</h4></div>
	   		<div class="div3"><select id="inst" style="width: 190px;">
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona la Institución</option>
						<option value="<?php echo $row1->clave;?>" <?php 	if ($row1->clave==$row[2]) {
							 echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Nombre del curso</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="curs" >
	   			<?php $qri = "SELECT cvePlan AS plan, nombreCurso AS nombre, cveCurso AS clave FROM curso ORDER BY nombre ASC";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;"> Selecciona el Curso </option>
						<option value="<?php echo $row1->clave;?>" <?php 	
																		if ($row1->clave==$row[1]) {
							 												echo "selected";
																		} ?> > <?php echo ($row1->nombre);?> <?php echo "(".($row1->plan).")";?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de inicio</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecini" value=<?php echo $row[6]; ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Numero de alumnos</h4></div>
	   		<div class="div3"><input placeholder="solo numero" type="text" id="alumnos" value=<?php echo $row[7]; ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Duración en semanas</h4></div>
	   		<div class="div3"><input placeholder="solo numero" type="text" id="durar" value=<?php echo $row[8]; ?>></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Horas de asesoria al mes</h4></div>
	   		<div class="div3"><input placeholder="solo numero" type="text" id="mesase" value=<?php echo $row[9]; ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Horas semanales dedicadas al curso</h4></div>
	   		<div class="div3"><input placeholder="solo numero" type="text" id="hracurso" value=<?php echo $row[10]; ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="docenciaModificar(this.form,<?php echo $parametro; ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
