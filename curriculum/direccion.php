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
    $( "#fecter" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecsni" ).datepicker({
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
			<h1>Dirección Individualizada</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>


	   	<form onsubmit="return false">

	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Título de la tesis o proyecto individual</h4></div>
	   		<div class="div4"><h4>Nivel de Estudio</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" >
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor WHERE habilitado=1 ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"><input type="text" id="titulo"></div>
	   		<div class="div4"> <select style="width: 200px;" id="nest" ">
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="0" style="display: none;">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Fecha de inicio</h4></div>
	   		<div class="div4"><h4>Fecha de término</h4></div>
	   		<div class="div4"><h4>No. alumnos</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><input type="text" id="fecini" ></div>
	   		<div class="div4"><input type="text" id="fecter" ></div>
	   		<div class="div4"><input onkeypress="return valida(event)" type="text" id="alumno"></div>
	   		<div class="div12"></div>


	   		<div class="div4"> <h4>Status</h4> </div>
	   		<div class="div4"> <h4>IES en la que realiza la dirección individualizada</h4> </div>
	   		<div class="div4"> <h4 id="nomInst" style="display: none">Nombre de la Intitución</h4> </div>
	   		<div class="div12"></div>

	   		<div class="div4">
	   			<select style="width: 200px" id="state" >
	   				<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
						  $resul=mysqli_query($con,$qri);
					 	  while($row1 = $resul->fetch_object()){?>
					 	  	<option value="0" style="display: none;">Selecciona...</option>
							<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select> </div>
	   		<div class="div4">
	   			<select id="inst"  style="width: 200px;" onchange="habilitar()" >
	   				<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
						  $resul=mysqli_query($con,$qri);
					 	  while($row1 = $resul->fetch_object()){?>
					 	  	<option value="0" style="display: none;">Selecciona...</option>
							<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div4"> <input type="text" id="nueva" placeholder="Escribe el nombre la institución" style="display: none"> </div>
	   		<div class="div12"></div>

	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="direc(this.form)">Guardar</button>
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';}else{
		header('location:index.php');
	}
	?>

	<script>
		function habilitar(){
			if (document.getElementById('inst').value == 134) {
				// document.getElementById('nueva').disabled = false;
				document.getElementById('nueva').style.display = 'block';
				document.getElementById('nomInst').style.display = 'block';
			}else{
				// document.getElementById('nueva').disabled = true;
				document.getElementById('nueva').style.display = 'none';
				document.getElementById('nomInst').style.display = 'none';
			}
		}
	</script>

	<style>
		.div6{
			width: 25% !important;
			margin-right: 10px !important;
		}
	</style>
