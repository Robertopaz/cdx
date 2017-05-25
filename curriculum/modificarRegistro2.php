<?php
$registro = "actual";
include 'up.php';
include 'conex.php';

$con = Conectarse();
$parametro=$_GET['p'];
	$sql="SELECT lgac.* FROM lgac WHERE cveGAc=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "LGACS (lineas de generacion o aplicacion inovadra del conocimiento)", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
?>
<script src="js/funciones.js">
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Lineas de generación o Aplicación innovadora del conocimiento</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"></div> <div class="div3"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Campo</h4></div>
	   		<div class="div3"> <textarea id="campo" onblur="validar2(this.id)"><?php echo $row[2] ?> </textarea></div>	   		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Actividades</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="act" onblur="validar2(this.id)" required value=<?php echo $row[3] ?>></div>	   		
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Horas</h4></div>
	   		<div class="div3"> <input type="text" id="hrs" onblur="validar2(this.id)" value=<?php echo $row[4] ?>></div>
	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="aplicacionModificar(this.form, <?php echo $parametro ?>)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>