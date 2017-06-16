<?php
session_start();
if(isset($_GET['s'])&&($_GET['s']==1)){
	session_unset();
	session_destroy();
}
if(isset($_SESSION['valida'])){
	$registro = "actual";
	include 'up.php';
	include 'conex.php';
	$con = Conectarse();
?>
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
	<div class="div4"></div>
	<div class="div4">
		<h1>Alta de Profesores</h1>
	</div>
	<div class="div12"></div>
    <div class="div12"></div>


   	<form onsubmit="return false">
   		<div class="div4"> <h4>Clave de profesor</h4></div>
   		<div class="div4"> <h4>Nombre completo</h4></div>
   		<div class="div4"> <h4>Género</h4></div>
   		<div class="div12"></div>

   		<div class="div4"> <input onkeypress="return valida(event)" placeholder="Obligatorio" type="text" id="clv" ></div>
	   	<div class="div4"> <input  type="text" placeholder="Paterno Materno Nombre" id="namec" >
	   		</div>
	   		<div class="div4"> <select style="width: 190px;" id="sex" >
	   			<option style="display: none;">Selecciona...</option>
	   			<option value="1">Masculino</option>
	   			<option value="0">Femenino</option>
	   		</select></div>
	   		<div class="div12"></div>


	   		<div class="div4"><h4>CURP</h4></div>
	   		<div class="div4"><h4>Estado civil</h4></div>
	   		<div class="div2"><h4>País</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input  placeholder="18 digitos" type="text" id="curp" maxlength="18" ></div>
	   		<div class="div4"> <select style="width: 190px;" id="estado" >
	   			<option value="0" style="display: none;">Selecciona...</option>
	   			<option value="1">Soltero</option>
	   			<option value="2">Casado</option>
	   			<option value="3">Divorciado</option>
	   			<option value="4">Viudo</option>
	   		</select></div>
	   		<div class="div4"> <select style="width: 190px;" id="coun"  >
	   			<option value="0" style="display:none">Selecciona...</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM Pais";
					  $resul=mysqli_query($con,$qri);
					  while($row1 = $resul->fetch_object()){?>
					<option value="<?php echo $row1->clave;?>"
						    <?php if($row1->clave==146){
						    	echo "selected='selected'";
						    	}?>> <?php echo($row1->nombre);?> </option>
				<?php } ?>
	   			</select> </div>
	   		<div class="div12"></div>


	   		<div class="div4"> <h4>Fecha de nacimiento</h4></div>
	   		<div class="div4"> <h4>Estado de nacimiento</h4></div>
	   		<div class="div4"> <h4>Teléfono</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input style="width: 190px;" type="text" id="birth" name="birth" ></div>
	   		<div class="div4"> <input  id="entidad" type="text" placeholder="Estado de tu país"></div>
	   		<div class="div4"> <input  type="text" id="tel" placeholder="10 Digitos" maxlength="20"  ></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <h4>Teléfono de oficina</h4></div>
	   		<div class="div4"> <h4>Email</h4></div>
	   		<div class="div4"> <h4>Email adicional</h4></div>
	   		<div class="div12"></div>

	   		<div class="div4"> <input class="div7" type="text" id="tel2" maxlength="20" placeholder="10 Digitos" > <input onkeypress="return valida(event)" class="div3" type="text" id="exten" placeholder="ext."></div>
	   		<div class="div4"> <input  style="width: 190px; height: 25px;" placeholder="ejemplo@servidor.com" type="mail" id="correo" ></div>
	   		<div class="div4"> <input style="width: 190px; height: 25px;" placeholder="ejemplo@servidor.com" type="mail" id="correo2" ></div>
	   		<div class="div12"></div>


	   		<div class="div6"> <h4>Tiene PROMEP</h4></div>
	   		<div class="div6"> <h4 id="tiFechaPROMEP" style="display: none">Fecha de obtención de PROMEP</h4></div>
	   		<div class="div12"></div>

	   		<div class="div6"> <select style="width: 350px;" id="respromep" onchange="habilitarPROMEP()">
	   			<option value="3" style="display: none;">Selecciona...</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div6"> <input style="width: 350px; display: none;" type="text" id="fecpromep" ></div>
	   		<div class="div12"></div>

	   		<div class="div6"> <h4>Tiene SNI</h4></div>
	   		<div class="div6"> <h4 id="tiFechaSNI" style="display: none;">Fecha de obtención de SNI</h4></div>
	   		<div class="div12"></div>
	   		<div class="div6"> <select style="width: 350px;" id="resni" onchange="habilitarSNI()">
	   			<option value="3" style="display: none;">Selecciona...</option>
	   			<option value="1">Si</option>
	   			<option value="0">No</option>
	   		</select></div>
	   		<div class="div6"> <input style="width: 350px; display: none;" type="text" id="fecsni" ></div>

	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="alta(this.form)">Guardar</button>
	   	</form>
	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>


	<script>
		function habilitarPROMEP(){
			if (document.getElementById('respromep').value == 1) {
				document.getElementById('tiFechaPROMEP').style.display = 'block';
				document.getElementById('fecpromep').style.display = 'block';
			}else{
				document.getElementById('tiFechaPROMEP').style.display = 'none';
				document.getElementById('fecpromep').style.display = 'none';
			}
		}

		function habilitarSNI(){
			if (document.getElementById('resni').value == 1) {
				document.getElementById('tiFechaSNI').style.display = 'block';
				document.getElementById('fecsni').style.display = 'block';
			}else{
				document.getElementById('tiFechaSNI').style.display = 'none';
				document.getElementById('fecsni').style.display = 'none';
			}
		}
	</script>
<?php }else{
	header('location:index.php');
	} ?>
