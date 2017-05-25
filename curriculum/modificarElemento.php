<?php 
	include 'conex.php';
	$con=Conectarse();
	$flag=$_POST['flag'];
	
if ($flag=='Articulos') {
	echo "<form onsubmit='return false' id='art' style='display: none;'>
	   		<div class='div5'></div><div class='div3'><h3>Artículo</h3></div>	   			
	   		<div class='div12'></div>

	   		<div class='div1'></div><div class='div2'><h4>Clave de profesor</h4></div>
	   		<div class='div3'><input placeholder='Obligatorio' type='text' id='clv' onblur='validar2(this.id)' required></div>
	   		<div class='div1'></div><div class='div2'><h4>Autor(es)</h4></div>
	   		<div class='div3'><textarea type='text' id='aut' onblur='validar2(this.id)'></textarea></div>	   	
	   		

	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>Titulo del artículo</h4></div>
	   		<div class='div3'><textarea placeholder=' type='text' id='tit' onblur='validar2(this.id)'></textarea></div>	   		
	   		<div class='div1'></div><div class='div2'><h4>Estado Actual</h4></div>
	   		


	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>Pais</h4></div>
	   		<div class='div3'> <select style='width: 190px;' id='coun'>
	   			".?><?php $qri = 'SELECT nombrePais AS nombre, idPais AS clave FROM pais';
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?><?php
						"<option style='display: none;'>Selecciona el pais</option>
						<option value='".?><?php echo $row1->clave;?>'> <?php echo utf8_encode($row1->nombre);?><?php "</option>".}?>
					<?php 
	   		"</select></div>
			<div class='div1'></div><div class='div2'><h4>Nombre de la revista</h4></div>
	   		<div class='div3'><input placeholder=' type='text' id='revis' onblur='validar2(this.id)' required></div>


	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>De la página</h4></div>
	   		<div class='div3'><input type='text' id='dela' onblur='validar2(this.id)' required></div>
	   		<div class='div1'></div><div class='div2'><h4>A la página</h4></div>
	   		<div class='div3'> <input type='text' id='ala' onblur='validar2(this.id)' required></div>	   		

	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>Editorial</h4></div>
	   		<div class='div3'><input placeholder=' type='text' id='ed' onblur='validar2(this.id)' required></div>
	   		<div class='div1'></div><div class='div2'><h4>Volumen</h4></div>
	   		<div class='div3'> <input type='text' id='vol'></div>
	   		
	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>ISSN</h4></div>
	   		<div class='div3'><input placeholder=' type='text' id='issn' onblur='validar2(this.id)' required></div>		
	   		<div class='div1'></div><div class='div2'><h4>Fecha de publicación</h4></div>
	   		<div class='div3'> <input style='width: 190px;' type='date' id='fecpub' onblur='validar2(this.id)' required></div>	   		

	   		<div class='div12'></div>
	   		<div class='div1'></div><div class='div2'><h4>Propósito</h4></div>
	   		  			   		

	   		<div class='div12'></div>
	   		<div class='div12'></div>
	   		<div class='div5'></div>
	   	<button class='div1 menta' id='boton' onclick='articulos(this.form)'>Guardar</button>	   	
	   	</form>";
}
	else{
		echo 'error';
	}
 ?>