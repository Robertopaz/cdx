<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
	echo $sql="SELECT gestionacademica.* FROM gestionacademica WHERE cveGestionAcademica=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Gestion academica", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
?>
<script>
    $( function() {
    $( "#feciges" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fectges" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecuinfo" ).datepicker({
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
			<h1>Gestion Academica</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv"  required readonly="True" value=<?php echo $row[1] ?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Tipo</h4></div>
	   		<div class="div3">
	   			<select id="tipo" style="width: 190px;" > 
	   			<option style="display:none">Selecciona el tipo</option>
	   			<option value="1" <?php if ($row[2]==1) {
	   				echo "selected";
	   			} ?>>Individual</option>
	   			<option value="0"<?php if ($row[2]==0) {
	   				echo "selected";
	   			} ?>>Colectivo</option>
	   			</select>
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Cargo</h4></div>
	   		<div class="div3"> <input type="text" id="cargo"  value=<?php echo $row[3] ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Función</h4></div>
	   		<div class="div3"><textarea id="fun" ><?php echo $row[4] ?></textarea></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Órgano colegiado</h4></div>
	   		<div class="div3"><textarea id="cole" ><?php echo $row[5] ?></textarea></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Aprobado</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="apro" >
	   		<option style="display:none">Opciones</option>
	   				<option value="1" <?php if ($row[6]==1) {
	   					echo "selected";
	   				} ?>>Si</option>
	   				<option value="0" <?php if ($row[6]==0) {
	   					echo "selected";
	   				} ?>>No</option>
	   			</select>
	   		</div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Resultados</h4></div>
	   		<div class="div3"><textarea id="resul"><?php echo $row[7] ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Terminada</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="term" >
	   		<option style="display:none">Opciones</option>
	   			<option value="1" <?php if ($row[8]==1) {
	   					echo "selected";
	   				} ?>>Si</option>
	   			<option value="0"<?php if ($row[8]==0) {
	   					echo "selected";
	   				} ?>>No</option>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de inicio<br>de gestión</h4></div>
	   		<div class="div3"><input style="width: 190px;" placeholder="aaaa/mm/dd" type="text" id="feciges"  required value=<?php echo $row[9] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de termino<br>de gestión</h4></div>
	   		<div class="div3"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="text" id="fectges"  required="" value=<?php echo $row[10] ?>></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Fecha de ultimo informe</h4></div>
	   		<div class="div3"> <input style="width: 190px;" placeholder="aaaa/mm/dd" type="text" id="fecuinfo"  value=<?php echo $row[11] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Horas a la semana</h4></div>
	   		<div class="div3"><input placeholder="numero" type="text" id="hra"  required value=<?php echo $row[12] ?>></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="gestionacademicaModificar(this.form, <?php echo $parametro ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
