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
		<div class="div12">
			<h1>Datos laborales dentro de la Institución</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Institución</h4></div>
	   		<div class="div3">
	   			<select style="width: 190px;" id="inst" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona la Institución</option>
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select>
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tipo de Contratación</h4></div>
	   		<div class="div3"> <input type="text" id="cont"></div>
	   		<div class="div1"></div><div class="div2"><h4>Tipo de nombramiento</h4></div>
	   		<div class="div3"><input type="text" id="nomb"></div>
	   		<div class="div12"></div>

	   		<div class="div2"><h4>Nombramiento</h4></div>
	   		<div class="div3"> <input type="text" id="nob"></div>
	   		<div class="div1"></div><div class="div2"><h4>Dependencia de Educación Superior de Adscripción</h4></div>
	   		<div class="div3"><input type="text" id="depen"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Unidad académica</h4></div>
	   		<div class="div3"><input type="text" id="uni"></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de inicio del contrato</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecini"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de fin del contrato</h4></div>
	   		<div class="div3"><input style="width: 190px;"  type="date" id="fecfin"></div>
	   		<div class="div1"></div><div class="div2"><h4>Cronología</h4></div>
	   		<div class="div3"><input  type="text" name="crono"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="laboral(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
