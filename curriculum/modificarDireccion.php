<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
 	$sql= "SELECT direccionindividualizada.*, estadoactual.Estado, nivelestudio.estudio, institucion.nombreInst FROM `direccionindividualizada` INNER JOIN estadoactual on estadoactual.idEstado=direccionindividualizada.idEstado INNER JOIN institucion on institucion.cveInstitucion=direccionindividualizada.cveInstitucion INNER JOIN nivelestudio on nivelestudio.idEstudio=direccionindividualizada.idEstudio WHERE cveDireccionInd=".$parametro;
 	/*la variable sql realiza un query para obtener los datos de la direccion actual del maestro, utilizando su clave de registro como parametro de busqueda*/
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
			<h1>Dirección Individualizada</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv"  readonly="true" value=<?php echo $row[3]; ?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Título de la tesis o proyecto individual</h4></div>
	   		<div class="div3"><input type="text" id="titulo" value="<?php echo $row[6]; ?>">
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Nivel de Estudio</h4></div>
	   		<div class="div3"> <select id="nest" >
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el nivel</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[12]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de inicio</h4></div>
	   		<div class="div3"><input type="date" id="fecini" value=<?php echo $row[7] ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de termino</h4></div>
	   		<div class="div3"><input type="date" id="fecter" value=<?php echo $row[8]; ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>No. alumnos</h4></div>
	   		<div class="div3"><input type="text" id="alumno" value=<?php echo $row[9] ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estado</h4></div>
	   		<div class="div3"><select id="state" ><?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[11]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
	   		<div class="div1"></div><div class="div2"><h4>IES en la que realiza la direccion individualizada</h4></div>
	   		<div class="div3"><select id="inst" onchange="mostrar()"  style="width: 190px;" value=<?php echo $row[4]; ?>>
	   			<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona la Institución</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[13]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div2" id="otraInst" style="display: none;">
	   			<h4>Nombre de la otra institución</h4>
	   		</div>
	   		<div class="div3"><input type="text" id="inpOtrInst" style="display: none;" value="<?php echo $row[5]; ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="DireccionIndividualizadaModificar(this.form, <?php echo $parametro ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>


<script>

	window.onload=mostrar();

	function mostrar(){
		id = document.getElementById('inst').value;
		if (id == 134) {
			document.getElementById('otraInst').style.display = 'block';
			document.getElementById('inpOtrInst').style.display = 'block';
		}else{
			document.getElementById('otraInst').style.display = 'none';
			document.getElementById('inpOtrInst').style.display = 'none';
		}
		
	}
</script>