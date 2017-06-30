<?php
session_start();
if(isset($_SESSION['valida'])){

$registro = "actual";
include 'up.php';
include 'conex.php';

$con = Conectarse();

?>
<script>
  $( function() {
    $( "#fecip" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecfp" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div4"></div>
		<div class="div4">
			<h1>Proyectos de investigación</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   		   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div4"><h4>Clave de profesor</h4></div>
	   		<div class="div4"><h4>Título</h4></div>
	   		<div class="div4"><h4>Nombre del patrocinador</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"><select style="width: 200px;" id="clv" >
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<?php $qri = "SELECT nombre AS nombre, cveProfesor AS clave FROM profesor WHERE habilitado=1  ORDER BY nombre";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->clave." ".$row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>	   		
	   		<div class="div4"><textarea id="tit" ></textarea></div>
	   		<div class="div4"><input placeholder="" type="text" id="pat" ></div>
	   		<div class="div12"></div>
	   		
	   			   		
	   		<div class="div4"><h4>Fecha de inicio del proyecto</h4></div>
	   		<div class="div4"><h4>Fecha de fin del proyecto</h4></div>
	   		<div class="div4"><h4>Patrocinador interno</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"> <input type="text" id="fecip"></div>
	   		<div class="div4"> <input type="text" id="fecfp"></div>
	   		<div class="div4"><select style="width: 190px;" id="patroc" >
	   			<option value="2" style="display: none;">Selecciona...</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option></select></div>
	   		<div class="div12"></div>

	   		<div class="div4"><h4>Investigadores</h4></div>
	   		<div class="div4"><h4>Alumnos</h4></div>
	   		<div class="div4"><h4>Actividades</h4></div>
	   		<div class="div12"></div>
	   		<div class="div4"><textarea id="inves" placeholder="Nombres"></textarea></div>
	   		<div class="div4"><textarea id="alum" placeholder="Nombres"></textarea> </div>
	   		<div class="div4"><textarea id="act"></textarea></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div6"><h4>Miembros</h4></div>
	   		<div class="div6"><h4>Lineas de generación o<br>aplicación innovadora del conocimiento</h4></div>
	   		<div class="div12"></div>
	   		<div class="div6"> <input onkeypress="return valida(event)" placeholder="solo número" type="text" id="mien"></div>
	   		<div class="div6"> <input onkeypress="return valida(event)" placeholder="solo número" type="text" id="lgaic"></div>

	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="investigacion(this.form)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';}else{
		header('location:index.php');
		}?>