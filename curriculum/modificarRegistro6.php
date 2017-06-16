<?php
$registro = "actual";
include 'up.php';
include 'conex.php';

$con = Conectarse();
$parametro=$_GET['p'];
	echo $sql="SELECT tutoria.* FROM tutoria WHERE cveTutoria=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
?>
<script>
  $( function() {
    $( "#feci" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecf" ).datepicker({
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
			<h2>Alta de tutorías</h2> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"></div><div class="div3"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Nombre del alumno</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="alu" onblur="validar2(this.id)" required value="<?php echo $row[3] ?>"></div>
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Nivel de estudios</h4></div>
	   		<div class="div3"><select id="nil" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona el nivel</option>
	   			<option value="1" <?php if($row[8]==1){echo "selected";} ?>>Licenciatura</option>
	   			<option value="2" <?php if($row[8]==2){echo "selected";} ?>>Maestria</option>
	   			<option value="3" <?php if($row[8]==3){echo "selected";} ?>>Doctorado</option>
	   			<option value="4" <?php if($row[8]==4){echo "selected";} ?>>Posdoctorado</option>
	   			</select></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Programa Educativo</h4></div>
	   		<div class="div3"><select id="prog" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona el programa</option>
	   			<option value="INC11" <?php if ($row[2]=='INC11') {echo "selected";} ?>>INC11</option>
	   			<option value="SOF11" <?php if ($row[2]=='SOF11') {echo "selected";} ?>>SOF11</option>
	   			<option value="TEL11" <?php if ($row[2]=='TEL11') {echo "selected";} ?>>TEL11</option>
	   			<option value="LAT11" <?php if ($row[2]=='LAT11') {echo "selected";} ?>>LAT11</option>
	   			<option value="INF11" <?php if ($row[2]=='INF11') {echo "selected";} ?>>INF11</option>
	   			<option value="ASE">Asesorias</option>
	   			<option value="POS">Posgrado</option>
	   		</select></div>
	   		<div class="div12"></div>
	   		<div class="div2"></div><div class="div3"><h4>Tutoria terminada</h4></div>
	   		<div class="div3"> <select id="term" onblur="validar2(this.id)" style="width: 190px;">
	   			<option style="display:none">Selecciona la opción</option>
	   			<option value="1"<?php if($row[7]==1){echo "selected";} ?>>Sí</option>
	   			<option value="0"<?php if($row[7]==0){echo "selected";} ?>>No</option>
	   		</select></div>
	   		<div class="div12"></div>
	   		
	   		<div class="div2"></div><div class="div3"><h4>Fecha de Inicio</h4></div>
	   		<div class="div3"><input type="text" id="feci" style="width: 190px;" value=<?php echo $row[4] ?>></div>
	   		<div class="div12"></div>

	   		<div class="div2"></div><div class="div3"><h4>Fecha de Fin</h4></div>
	   		<div class="div3"><input type="text" id="fecf" style="width: 190px;" value=<?php echo $row[5] ?>></div>
	   		<div class="div12"></div>

	   		<div class="div2"></div><div class="div3"><h4>Tipo de Tutoria</h4></div>
	   		<div class="div3"> <input type="text" id="tipo" value=<?php echo $row[6] ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="tutoriasModificar(this.form,<?php echo $row[0]; ?>)">Guardar</button>

	   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>