<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
	$sql="SELECT datoslaborales.*, institucion.nombreInst FROM datoslaborales INNER JOIN institucion on institucion.cveInstitucion=datoslaborales.cveInstitucion WHERE cveDatosLaborales=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Laboral", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
?>
<script src="js/funciones.js"></script>
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
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" value=<?php echo $row[2] ?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Institución</h4></div>
	   		<div class="div3">
	   			<select style="width: 190px;" id="inst" onblur="validar2(this.id)">
	   			<option style="display: none;">Seleeciona la Institución</option>
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;" >Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[11]) {echo "selected";
							# code...
						}?>> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select>
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tipo de Contratación</h4></div>
	   		<div class="div3"> <input type="text" id="cont" value=<?php echo $row[5] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Tipo de nombramiento</h4></div>
	   		<div class="div3"><input type="text" id="nomb" value=<?php echo $row[4] ?>></div>
	   		<div class="div12"></div>

	   		<div class="div2"><h4>Nombramiento</h4></div>
	   		<div class="div3"> <input type="text" id="nob" value=<?php echo $row[3] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Dependencia de Educación Superior de Adscripción</h4></div>
	   		<div class="div3"><textarea id="depen"><?php echo $row[6]; ?></textarea></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Unidad académica</h4></div>
	   		<div class="div3"><input type="text" id="uni" value=<?php echo $row[7] ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de inicio del contrato</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecini" value=<?php echo $row[8] ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de fin del contrato</h4></div>
	   		<div class="div3"><input style="width: 190px;"  type="date" id="fecfin" value=<?php echo $row[9] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Cronología</h4></div>
	   		<div class="div3"><input  type="text" name="crono" value=<?php echo $row[10] ?>></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="DatosLaboralesModificar(this.form,<?php echo $parametro ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
