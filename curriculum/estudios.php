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
    $( "#fecfin" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#tit" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
  } );
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h1>Estudios realizados</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>


	   	<form onsubmit="return false">

	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Nivel de estudios</h4></div>
	   		<div class="div4"><h4>Estudios en</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" onblur="validar2(this.id)">
	   			<option style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor WHERE habilitado=1  ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><select style="width: 200px;" id="prog" onblur="validar2(this.id)" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><input type="text" id="en"></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Área</h4></div>
	   		<div class="div4"><h4>Disciplina</h4></div>
	   		<div class="div4"><h4>País</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><select style="width: 200px;" id="ar" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT area AS nombre, idArea AS clave FROM area";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><input type="text" id="dis" onblur="validar2(this.id)"></div>
	   		<div class="div4"><select style="width: 200px;" id="coun" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
					  $resul=mysqli_query($con,$qri);
					  while($row1 = $resul->fetch_object()){?>
					<option value="<?php echo $row1->clave;?>"
						    <?php if($row1->clave==146){
						    	echo "selected='selected'";
						    	}?>> <?php echo($row1->nombre);?> </option>
				<?php } ?>
	   		</select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Institución otorgante</h4></div>
	   		<div class="div4"><h4 id="nomInst" style="display: none">Institución Otorgante no<br>considerada en el catálogo</h4></div>
	   		<div class="div4"><h4>Fecha de inicio de estudios</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><select style="width: 190px;" id="inst" onblur="validar2(this.id)" onchange="habilitar()"><?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
	   		<div class="div4"><input type="text" id="otra" onblur="validar2(this.id)" style="display: none"></div>
	   		<div class="div4"><input style="width: 190px;" type="text" id="fecini" onblur="validar2(this.id)"></div><div class="div12"></div>

	   		<div class="div6"><h4>Fecha de fin de estudios</h4></div>
	   		<div class="div6"><h4>Fecha de obtención del título o grado</h4></div>
	   		<div class="div12"></div>
	   		<div class="div6"><input style="width: 300px;" type="text" id="fecfin" onblur="validar2(this.id)"></div>
	   		<div class="div6"><input style="width: 300px;" type="text" id="tit" onblur="validar2(this.id)"></div>
	   		<div class="div12"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="study(this.form)">Guardar</button>
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';}else{
		header('location:index.php');
		}?>

<script>
		function habilitar(){
			if (document.getElementById('inst').value == 134) {
				// document.getElementById('nueva').disabled = false;
				document.getElementById('otra').style.display = 'block';
				document.getElementById('nomInst').style.display = 'block';
			}else{
				// document.getElementById('nueva').disabled = true;
				document.getElementById('otra').style.display = 'none';
				document.getElementById('nomInst').style.display = 'none';
			}
		}
	</script>
