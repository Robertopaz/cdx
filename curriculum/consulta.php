<?php
session_start();
if(isset($_SESSION['valida'])){
	include 'up.php'; 
	include 'conex.php';
	$con=Conectarse();
?>

<div id="bg-negro" onclick="cerrar()"></div>
<div id="modal"></div>

<div id="contenido">
	<div class="div12">
		<div class="div4">
			<div class="div3"> <label>Buscar</label> </div>
			<div class="div2"> <select id="parametroBusqueda">
				<option>Profesor</option>
				<option>Articulos</option>
				<option>Asesorias</option>
				<option>Consultoria</option>
				<option>Datos laborales</option>
				<option>Direccion individualizada</option>
				<option>Docencia</option>
				<option>Estudios</option>
				<option>Gestion academica</option>
				<option>LGAC</option>
				<option>Libros</option>
				<option>Material de apoyo</option>
				<option>Memorias</option>
				<option>Patente</option>
				<option>Premio</option>
				<option>Proyecto de investigacion</option>
				<option value="Tutoria">Tutoría</option>
			</select></div>
		</div>

		<div class="div4">
			<div class="div4"><label>Nombre del profesor</label></div> <!-- QUE TENGA CLAVE --> <!-- <div class="div6"><input type="text" name="" class="div12" id="cve-nom"></div></div> -->

			<div class="div1">
				<select id="cve-nom" style="width: 230px">
					<option>Seleccionar Profesor</option>
					<?php 
						$sql="SELECT cveProfesor, nombre FROM profesor";
						$resultado=mysqli_query($con,$sql);
						while ($profe = mysqli_fetch_array($resultado)) {
					?>
					<option value="<?php echo $profe[0]; ?>"><?php echo $profe[0]." - ".$profe[1]; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="div4">
			<div class="div1"></div>
			<div class="div3"> <button id="btnBuscar" class="div11 oscuro" onclick="Busqueda()">Aceptar</button> </div>
		</div>
		
		<div class="div12"></div>
		<div class="div12" id="cuerpoConsulta">
		<hr>
		<div id="bg-negro" onclick="cerrar()"></div>
		<div id="modal"></div>
		
</div>
	<?php include 'down.php'; }else{
		header('location:index.php');
		}?>

<style type="text/css">
	#btnBuscar{
		width: 100px;
	}
</style>