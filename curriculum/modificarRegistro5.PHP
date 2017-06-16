<?php
$registro = "actual";
include 'up.php';
include 'conex.php';

$con = Conectarse();
$parametro=$_GET['p'];
	echo $sql="SELECT proyectoinvestigacion.* FROM proyectoinvestigacion WHERE cveProyectoInvestigacion=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
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
<script src="js/modifica.js">
</script>
	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h2>Proyectos de investigación</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div3"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div3"><h4>Titulo</h4></div>
	   		<div class="div3"><textarea id="tit" onblur="validar2(this.id)"> <?php echo $row[2] ?></textarea></div>	   		
	   		<div class="div12"></div>
	   		
	   		<div class="div3"><h4>Nombre del patrocinador</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="pat" onblur="validar2(this.id)" required value=<?php echo $row[3] ?>></div>	   		
	   		<div class="div3"><h4>Fecha de inicio del proyecto</h4></div>
	   		<div class="div3"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="text" id="fecip" value=<?php echo $row[4] ?>></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div3"><h4>Fecha de fin del proyecto</h4></div>
	   		<div class="div3"> <input placeholder="aaaa/mm/dd" style="width: 190px;" type="text" id="fecfp" value=<?php echo $row[5] ?>></div>
	   		<div class="div3"><h4>Patrocinador interno</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="patroc" onblur="validar2(this.id)">
	   			<option value="1"<?php if($row[6]==1){echo "selected";} ?>>Si</option>
	   			<option value="0"<?php if($row[6]==0){echo "selected";} ?>>No</option></select></div>
	   		<div class="div12"></div>

	   		<div class="div3"><h4>Investigadores</h4></div>
	   		<div class="div3"><textarea id="inves"><?php echo $row[7] ?></textarea></div>
	   		<div class="div3"><h4>Alumnos</h4></div>
	   		<div class="div3"><textarea id="alum"><?php echo $row[8] ?></textarea> </div>
	   		<div class="div12"></div>
	   		
	   		<div class="div3"><h4>Actividades</h4></div>
	   		<div class="div3"><textarea id="act"><?php echo $row[9] ?></textarea></div>
	   		<div class="div3"><h4>Miembros</h4></div>
	   		<div class="div3"> <input type="number" id="mien" value=<?php echo $row[11] ?>></div>
	   		<div class="div12"></div>

	   		<div class="div6"><h4>Lineas de Generación o Aplicación innovadora del Conocimiento</h4></div>
	   		<div class="div3"> <input type="number" id="lgaic" value=<?php echo $row[12] ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="investigacionModificar(this.form,<?php echo $row[0]; ?>)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>