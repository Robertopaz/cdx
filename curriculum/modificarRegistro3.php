<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$parametro=$_GET['p'];
$con = Conectarse();
echo $sql="SELECT premio.* FROM premio  WHERE cvePremio=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Premios y distinciones", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
?>
<script src="js/modificar.js">
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Premios y distinciones</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"></div> <div class="div3"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clave" onblur="validar2(this.id)" required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Nombre del premio</h4></div>
	   		<div class="div3"> <input type="text" id="premio" onblur="validar2(this.id)" required value=<?php echo $row[3] ?>></div>	   		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Motivo</h4></div>
	   		<div class="div3"> <textarea id="motivo" onblur="validar2(this.id)"><?php echo $row[4] ?></textarea></div>	   		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Fecha de Obtención</h4></div>
	   		<div class="div3"> <input  style="width: 190px;" type="date" id="fecob" value=<?php echo $row[5] ?>></div>
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Institución Otorgante</h4></div>
	   		<div class="div3">
	   			<select id="insot" style="width: 190px;" onblur="validar2(this.id)">
	   				<option style="display:none">Instituciones</option>
	   				<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>

						<option value="<?php echo $row1->clave;?>" <?php if($row1->clave==$row[2]) {echo "Selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select> </div>
			<div class="div12"></div>
			<div class="div2"></div><div class="div3"> <h4>Otra Institución</h4> </div>
			<div class="div4"> <input type="text" id="nueva" value="<?php echo $row[6] ?>" > </div>	   		
			<div class="div12"></div>	
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="premioModificar(this.form,<?php echo $row[0]; ?>)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>