<?php
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
			<h1>Alta de Profesores</h1> </div>
		<div class="div12"></div>
	    <div class="div12"></div>
	   	
	   	
	   	<form onsubmit="return false">
	   		
	   		<div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Nombre Completo</h4></div>
	   		<div class="div3">
	   			<input type="text" placeholder="Paterno Materno Nombre" id="namec">
	   		</div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Genero</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sex" onblur="validar2(this.id)">
	   			<option style="display: none;">Selecciona el Genero</option>
	   			<option value="1">Masculino</option>
	   			<option value="0">Femenino</option>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>CURP</h4></div>
	   		<div class="div3"><input placeholder="18 digitos" type="text" id="curp"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Estado Civil</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="estado">
	   			<option style="display: none;">Estado Civil</option>
	   			<option value="1">Soltero</option>
	   			<option value="2">Casado</option>
	   			<option value="3">Divorciado</option>
	   			<option value="4">Viudo</option>
	   		</select></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="coun" onblur="validar2(this.id)">
	   		<option style="display:none">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   			</select>
	   		</div>
	   		
	   		<div class="div12"></div>
	   		<div class="div2"><h4>Entidad de nacimiento</h4></div>
	   		<div class="div3"><input type="text" id="entidad"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de nacimiento</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" name="birth"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Teléfono</h4></div>
	   		<div class="div3"><input type="text" id="tel" placeholder="(111-111-1111)" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Teléfono de oficina</h4></div>
	   		<div class="div3"> <input class="div7" type="text" id="tel2" placeholder="(111-111-1111)" onblur="validar2(this.id)" required=""> <input class="div3" type="text" id="exten" placeholder="ext."></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Email</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="mail" id="correo" onblur="validar2(this.id)"></div>
	   		<div class="div1"></div><div class="div2"><h4>Email adicional</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="mail" id="correo2" onblur="validar2(this.id)"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tiene PROMEP</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="respromep">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de obtención de PROMEP</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecpromep" onblur="validar2(this.id)"></div>

	   		<div class="div12"></div>
	   		<div class="div2"><h4>Tiene SNI</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="resni">
	   			<option style="display: none;">Selecciona la opción</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de ontención de SNI</h4></div>
	   		<div class="div3"><input style="width: 190px;" type="date" id="fecsni" onblur="validar2(this.id)"></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="alta(this.form)">Guardar</button>   	
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>
