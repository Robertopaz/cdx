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
  } );
  </script>

	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div12">
			<h1>Datos laborales dentro de la Institución</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>


	   	<form onsubmit="return false">
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Institución</h4></div>
	   		<div class="div4"><h4>Tipo de contratación</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4">
	   		<select style="width: 200px;" id="clv" >
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor WHERE habilitado=1 ORDER BY nombre";
					  $resul=mysqli_query($con,$qri);
					  while($row1 = $resul->fetch_object()){?>
				<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
				<?php } ?>
	   		</select></div>
	   		<div class="div4">
	   		<select style="width: 200px;" id="inst">
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
					  $resul=mysqli_query($con,$qri);
					  while($row1 = $resul->fetch_object()){?>
				<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
				<?php } ?>
	   		</select></div>
	   		<div class="div4"> <input style="width: 200px;" type="text" id="cont" placeholder="Nombramiento"></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Nombramiento</h4></div>
            <div class="div4"> <h4>Dedicación</h4></div>
            <div class="div4"> <h4>Dependencia de educación superior de adscripción</h4></div>

	   		<div class="div12"></div>

	   		<div class="div4"> <input style="width: 200px;" type="text" id="nob" placeholder="Tipo Nombramiento"></div>
	   		<div class="div4"> <input style="width: 200px;" type="text" id="dedi" placeholder="ej. Medio tiempo"></div>
	   		<div class="div4"> <input style="width: 200px;" type="text" id="depen" placeholder="ej. Técnologias de información"></div>


	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Unidad académica</h4></div>
	   		<div class="div4"> <h4>Fecha de inicio del contrato</h4></div>
	   		<div class="div4"> <h4>Fecha de fin del contrato</h4></div>

	   		<div class="div12"></div>

	   		<div class="div4"> <input style="width: 200px;" type="text" id="uni" placeholder="Facultad"></div>
	   		<div class="div4"><input type="text" id="fecini"></div>
	   		<div class="div4"><input type="text" id="fecfin"></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Cronología</h4></div><div class="div4"></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input style="width: 200px;" placeholder="ej. Actual" type="text" id="crono"></div><div class="div4"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="laboral(this.form)">Guardar</button>
	   	</form>
	   	<div class="div12"></div>
	</div>
<?php include 'down.php';
	}else{
		header('location:index.php');
	}
?>
