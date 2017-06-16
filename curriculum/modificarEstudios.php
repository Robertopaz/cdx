<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
 $sql="SELECT estudio.*, pais.nombrePais,institucion.nombreInst,area.area, nivelestudio.estudio FRom estudio INNER JOIN pais ON pais.idPais=estudio.idPais INNER JOIN institucion ON estudio.cveInstitucion=institucion.cveInstitucion INNER JOIN area ON area.idArea=estudio.idArea INNER JOIN nivelestudio ON nivelestudio.idEstudio=nivelestudio.idEstudio WHERE cveEstudio=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Estudios", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
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
<script src="js/modificar.js">

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
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv"  required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Nivel de estudios</h4></div>
	   		<div class="div3"><select id="prog"  >
	   			<option style="display: none;">Selecciona el nivel</option>
	   			<?php $qri = "SELECT estudio AS nombre, idEstudio AS clave FROM nivelestudio";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[15]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estudios en</h4></div>
	   		<div class="div3"> <input type="text" id="en" value= "<?php echo $row[4] ?>" > </div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Área</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="ar" >
	   			<?php $qri = "SELECT area AS nombre, idArea AS clave FROM area";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el area</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[14]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Disciplina</h4></div>
	   		<div class="div3"><input type="text" id="dis"  value= "<?php echo $row[5] ?>" ></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="coun" >
	   			<option style="display:none">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[12]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Institución Otorgante</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="inst" >
	   								<option style="display: none;">Selecciona la institucion</option><?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>

						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[13]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Institución Otorgante no considerada en el catalogo</h4></div>
	   		<div class="div3"><input type="text" id="otra"  value= "<?php echo $row[6] ?>" ></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de inicio de estudios</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" id="fecini"  value=<?php echo $row[7] ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de fin de estudios</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" id="fecfin"  value=<?php echo $row[8] ?>></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de obtención del Título o Grado</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" id="tit"  value=<?php echo $row[9] ?>></div>	

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="estudioModificar(this.form,<?php echo $parametro ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
