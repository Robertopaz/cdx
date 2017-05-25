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
			<h1>Dirección Individualizada</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Título de la tesis o proyecto individual</h4></div>
	   		<div class="div3"><input type="text" id="titulo">
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Nivel de Estudio</h4></div>
	   		<div class="div3"> <select id="nest" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el nivel</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de inicio</h4></div>
	   		<div class="div3"><input type="date" id="fecini"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de termino</h4></div>
	   		<div class="div3"><input type="date" id="fecter"></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>No. alumnos</h4></div>
	   		<div class="div3"><input type="text" id="alumno"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estado</h4></div>
	   		<div class="div3"><select id="state" onblur="validar2(this.id)"><?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
	   		<div class="div1"></div><div class="div2"><h4>IES en la que realiza la direccion individualizada</h4></div>
	   		<div class="div3"><select id="inst" onblur="validar2(this.id)" style="width: 190px;">
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona la Institución</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="direc(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
