<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$parametro=$_GET['p'];
	$sql="SELECT *, nombre AS nombre, cveProfesor AS clave  FROM profesor WHERE cveProfesor=".$parametro;
	$resultado=mysqli_query($con,$sql);
	$row = mysqli_fetch_row($resultado);
?>
<script src="js/modificar.js"></script>
<script>
  $( function() {
    $( "#birth" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpromep" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecsni" ).datepicker({
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
  } );
 </script>


	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div3"></div>
		<div class="div7">
			<h1>Alta de Profesores</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input disabled="true" placeholder="<?php echo $row[0]. " ". $row[1] ?>" type="text" id="clv"  value="<?php echo $row[0] ?>"></div>		
	   		<div class="div1"></div><div class="div2"><h4>Nombre Completo</h4></div>
	   		<div class="div3">
	   			<input type="text" placeholder="Paterno Materno Nombre" id="namec" value="<?php echo $row[1] ?>">
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Genero</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sex" >
	   			<option style="display: none;">Selecciona el Genero</option>
	   			<option value="1"<?php if ($row[2]==1) {
	   				echo "Selected";
	   			} ?>>Masculino</option>
	   			<option value="0" <?php if ($row[2]==0) {
	   				echo "Selected";
	   			} ?>>Femenino</option>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>CURP</h4></div>
	   		<div class="div3"><input placeholder="18 digitos" type="text" id="curp" value="<?php echo $row[3] ?>"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estado Civil</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="estado">
	   			<option style="display: none;">Estado Civil</option>
	   			<option value="1" <?php if($row[15]==1){echo "Selected";} ?>>Soltero</option>
	   			<option value="2" <?php if($row[15]==2){echo "Selected";} ?>>Casado</option>
	   			<option value="3" <?php if($row[15]==3){echo "Selected";} ?>>Divorciado</option>
	   			<option value="4" <?php if($row[15]==4){echo "Selected";} ?>>Viudo</option>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="coun" >
	   		<option style="display:none">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"<?php if($row1->clave==$row[14]){echo "Selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   			</select>
	   		</div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Entidad de nacimiento</h4></div>
	   		<div class="div3"><input type="text" id="entidad" value="<?php echo $row[4] ?>"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de nacimiento</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" name="birth" value="<?php echo $row[5] ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Teléfono</h4></div>
	   		<div class="div3"><input type="text" id="tel" placeholder="(111-111-1111)"  required value="<?php echo $row[6] ?>"></div>
	   		<div class="div1"></div><div class="div2"><h4>Teléfono de oficina</h4></div>
	   		<div class="div3"> <input class="div7" type="text" id="tel2" placeholder="(111-111-1111)"  required="" value="<?php echo $row[7]; ?>"> <input class="div3" type="text" id="exten" placeholder="ext." value="<?php echo $row[16]; ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Email</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="mail" id="correo"  value="<?php echo $row[8] ?>"></div>
	   		<div class="div1"></div><div class="div2"><h4>Email adicional</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="mail" id="correo2"  value="<?php echo $row[9] ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tiene PROMEP</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="respromep">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1"<?php if($row[10]==1){echo "Selected";} ?>>Si</option>
	   			<option value="0" <?php if($row[10]==0){echo "Selected";} ?>>No</option>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de obtención de PROMEP</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" id="fecpromep"  value="<?php echo $row[11] ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tiene SNI</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="resni">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1"<?php if($row[12]==1){echo "Selected";} ?>>Si</option>
	   			<option value="0" <?php if($row[12]==0){echo "Selected";} ?>>No</option>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de ontención de SNI</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="text" id="fecsni"  value="<?php echo $row[12] ?>"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="ProfesorModificar(this.form,<?php echo $parametro; ?>)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
