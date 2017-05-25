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
			<h1>Estudios realizados</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Nivel de estudios</h4></div>
	   		<div class="div3"><select id="prog" onblur="validar2(this.id)" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el nivel</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estudios en</h4></div>
	   		<div class="div3"> <input type="text" id="en"></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Área</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="ar" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT area AS nombre, idArea AS clave FROM area";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el area</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Disciplina</h4></div>
	   		<div class="div3"><input type="text" id="dis" onblur="validar2(this.id)"></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="coun" onblur="validar2(this.id)">
	   			<option style="display:none">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Institución Otorgante</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="inst" onblur="validar2(this.id)"><?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona la institucion</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Institución Otorgante no considerada en el catalogo</h4></div>
	   		<div class="div3"><input type="text" id="otra" onblur="validar2(this.id)"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de inicio de estudios</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecini" onblur="validar2(this.id)"></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de fin de estudios</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecfin" onblur="validar2(this.id)"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de obtención del Título o Grado</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="tit" onblur="validar2(this.id)"></div>	

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="study(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
