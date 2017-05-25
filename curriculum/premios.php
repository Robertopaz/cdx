<?php
session_start();
if(isset($_SESSION['valida'])){

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
			<h1>Premios y distinciones</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Nombre del premio</h4></div>
	   		<div class="div4"><h4>Motivo</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv">
	   			<option value="0" style="display: none;">Seleeciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>		
	   		<div class="div4"> <input type="text" id="premio"></div>	   	
	   		<div class="div4"> <textarea id="motivo"></textarea></div>	   		
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Fecha de Obtención</h4></div>
	   		<div class="div4"><h4>Institución Otorgante</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="date" id="fecob"></div>
	   		<div class="div4">
	   			<select id="insot" style="width: 190px;" onchange="habilitar()">
	   				<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="0" style="display:none">Selecciona...</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select></div>
			<div class="div4"> <input type="text" id="nueva" placeholder="Escribe el nombre la institución" style="display: none"></div>	   		

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="premios(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';}else{
		header('location:index.php');
		}?>

	<script>
		function habilitar(){
			if (document.getElementById('insot').value == 134) {
				// document.getElementById('nueva').disabled = false;
				document.getElementById('nueva').style.display = 'block';
			}else{
				// document.getElementById('nueva').disabled = true;
				document.getElementById('nueva').style.display = 'none';
			}
		}
	</script>