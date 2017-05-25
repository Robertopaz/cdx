<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
?>
<script src="js/funciones.js"></script>
<script src="js/produc.js"></script>

	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div7"> <h2>Produccion Academica</h2> </div>
		<div class="div12"></div>

	   	<form onsubmit="return false">
	   	<div class="div2"></div> <div class="div3"><h4>Seleccion el tipo de trabajo</h4></div>
	   	<div class="div3">
	   	<select style="width: 190px;" id="selec" onchange="elegir()" onblur="validar2(this.id)">
	   			<option style="display:none">Selecciona el tipo</option>
	   			<option>Artículo</option>
	   			<option>Artículo arbitrario</option>
	   			<option>Artículo en revista indexada</option>
	   			<option>Asesoría</option>
	   			<option>Capítulo de libro</option>
	   			<option>Consultoría</option>
	   			<option>Libro</option>
	   			<option>Material de apoyo</option>
	   			<option>Memorias</option>
	   			<option>Memorias en extenso</option>
	   			<option>Patente</option>
	   	</select> </div></form>
	   	
	   	<div class="div12"></div>
	   	

	   	<!--     ARTICULO      -->
	   	<form onsubmit="return false" id="art" style="display: none;">
	   		<div class="div5"></div><div class="div3"><h3>Artículo</h3></div>	   			
	   		<div class="div12"></div>

	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   	
	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"></textarea></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>


	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
			<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required></div>


	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"><input type="text" id="dela" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="ed" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"> <input type="text" id="vol"></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>  			   		

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="articulos(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- ARTICULO ARBITRARIO -->
	   	<form onsubmit="return false" id="arb" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Artículo arbitrario</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none">Selecciona el Pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required></div>	

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"> <input type="text" id="vol"></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required></div>		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Dirección Eléctronica</h4></div>
	   		<div class="div3"><textarea type="text" id="direlec" onblur="validar2(this.id)"></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="arbitrario(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- ARTICULO REVISTA INDEXADA -->
	   	<form onsubmit="return false" id="inde" style="display: none;">
	   		<div class="div5"></div><div class="div4"> <h3>Artículo en revista indexada</h3></div>
	   		<div class="div12"></div>


	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el Pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"><input type="text" id="ala" onblur="validar2(this.id)" required></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required></div>	

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"><input type="text" id="vol"></div>
	   		<div class="div1"></div><div class="div2"><h4>Índice de registro de la revista</h4></div>
	   		<div class="div3"> <input type="text" id="ind" onblur="validar2(this.id)" required></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required></div>		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"<h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Dirección Eléctronica</h4></div>
	   		<div class="div3"><textarea type="text" id="direlec" onblur="validar2(this.id)"></textarea> </div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="indexada(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- ASESORIA -->
	   	<form onsubmit="return false" id="ase" style="display: none;">
	   		<div class="div5"></div><div class="div3"><h3>Asesoría</h3></div>
	   		<div class="div12"></div>
			<div class="div12" style="padding-left:115px; padding-right:115px;"><p>En esta sección deberá registrar solo las asesorías asociadas a las líneas de investigación aplicada o de desarrollo tecnológico a empresas o instituciones externas que usted ha realizado.</p></div>
			<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre del estudio o proyecto realizado</h4></div>
	   		<div class="div3"><textarea type="text" id="estu" onblur="validar2(this.id)"></textarea> </div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Alcance/Objetivo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="alc" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

				
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha inicio de proyecto</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpro" onblur="validar2(this.id)" required></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Empresa o dependencia beficiaria </h4></div>
	   		<div class="div3"><textarea type="text" id="emp" onblur="validar2(this.id)"></textarea> </div> 		
	   		<div class="div1"></div> <div class="div2"><h4>Otros investigadores participantes</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="part" onblur="validar2(this.id)"></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="asesoria(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- CAPITULO DE LIBRO -->
	   	<form onsubmit="return false" id="capitulolib" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Capítulo de libro</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)"></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es) del libro</h4></div>
	   		<div class="div3"><textarea type="text" id="autlib" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del libro</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titlib" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required></div>	
	   		<div class="div1"></div><div class="div2"><h4>Edición </h4></div>
	   		<div class="div3"> <input type="text" id="edic" onblur="validar2(this.id)" required></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el Pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Tiraje</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="tirj" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISBN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="isbn" onblur="validar2(this.id)" required></div>	

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el Proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			<div class="div12"></div>
			<div class="div5"></div><div class="div5"> <h3>Datos del Capítulo del libro</h3></div>
	   		<div class="div12"></div>

				
				
	   		<div class="div1"></div><div class="div2"><h4>Titulo del Capitulo</h4></div>
	   		<div class="div3"><textarea type="text" id="titcap"></textarea> </div>
			<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required></div>	   		

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="caplibro(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- CONSULTORIA -->
	   	<form onsubmit="return false" id="consu" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Consultoría</h3></div>
	   		<div class="div12"></div>

	   		<div class="div12">En esta sección deberá registrar solo las asesorías asociadas a las líneas de investigación aplicada o de desarrollo tecnológico a empresas o instituciones externas que usted ha realizado.</div>
			<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre del estudio o proyecto realizado</h4></div>
	   		<div class="div3"><textarea type="text" id="estu" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Alcance/Objetivo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="alc" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

				
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha inicio de proyecto</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpro" onblur="validar2(this.id)" required></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Empresa o dependencia beficiaria </h4></div>
	   		<div class="div3"><textarea type="text" id="emp" onblur="validar2(this.id)"></textarea></div> 		
	   		<div class="div1"></div> <div class="div2"><h4>Otros investigadores participantes</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="part" onblur="validar2(this.id)"></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Beneficio economico para la institución</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="bene" onblur="validar2(this.id)"></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="consultoria(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- LIBRO -->
	   	<form onsubmit="return false" id="book" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Libro</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es) del libro</h4></div>
	   		<div class="div3"><textarea type="text" id="autlib" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del libro</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titlib" onblur="validar2(this.id)"></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Tipo de participación</h4></div>
			<div class="div3"><input placeholder="" type="text" id="parti" onblur="validar2(this.id)" required></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Páginas</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="pag" onblur="validar2(this.id)" required></div>	
	   		<div class="div1"></div><div class="div2"><h4>Edición </h4></div>
	   		<div class="div3"> <input type="text" id="edic" onblur="validar2(this.id)" required></div>

			<div class="div12"></div>
			<div class="div1"></div> <div class="div2"><h4>Tiraje</h4></div>
			<div class="div3"><input placeholder="" type="text" id="tirj" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISBN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="isbn" onblur="validar2(this.id)" required></div>	

			
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM Proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="libro(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- MATERIAL DE APOYO -->
	   	<form onsubmit="return false" id="apoyo" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Material de apoyo</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titu" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div> <div class="div2"><h4>Descripción</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="descr" onblur="validar2(this.id)"></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Institución beneficiaria</h4></div>
	   		<div class="div3"><select id="insot" style="width: 190px;" onblur="validar2(this.id)">
	   				<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display:none">Instituciones</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
				</select></div>

	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
				
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>  

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="matap(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- MEMORIAS -->
	   	<form onsubmit="return false" id="mem" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Memorias</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo de presentación</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titpre" onblur="validar2(this.id)"></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Nombre del congreso donde se presento</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="niv" onblur="validar2(this.id)"></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Estado</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="state" onblur="validar2(this.id)" required></div>
			 <div class="div1"></div> <div class="div2"><h4>Ciudad</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="city" onblur="validar2(this.id)" required></div>

			 <div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required></div>

	   		<div class="div12"></div>	
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>			 

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="memos(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- MEMORIAS EN EXTENSO-->
	   	<form onsubmit="return false" id="ext" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Memorias en extenso</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo de presentación</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titpre" onblur="validar2(this.id)"></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Nombre del congreso donde se presento</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="niv" onblur="validar2(this.id)"></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			 <div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Estado</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="state" onblur="validar2(this.id)" required></div>
			 <div class="div1"></div> <div class="div2"><h4>Ciudad</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="city" onblur="validar2(this.id)" required></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required></div>	

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub" onblur="validar2(this.id)" required></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>			 

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Archvio PDF</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="file" id="fil" onblur="validar2(this.id)" required></div>	
				

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="extenso(this.form)">Guardar</button>	   	
	   	</form>

	   	<!-- PATENTE-->
	   	<form onsubmit="return false" id="pate" style="display: none;">
	   		<div class="div5"></div><div class="div3"> <h3>Patente</h3></div>
	   		<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea autofocus="type="text" id="aut" onblur="validar2(this.id)""></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titl" onblur="validar2(this.id)"></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"></textarea> </div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Clasificación Internacional de Patentes </h4></div>
	   		<div class="div3"> <input type="text" id="intpate" onblur="validar2(this.id)" required></div>
	   		<div class="div1"></div><div class="div2"><h4>Uso </h4></div>
	   		<div class="div3"><textarea type="text" id="use" onblur="validar2(this.id)"></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			 <div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Numero registro</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="num" onblur="validar2(this.id)" required></div>
			 <div class="div1"></div> <div class="div2"><h4>Usuario</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="user" onblur="validar2(this.id)" required></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="date" id="fecpub" onblur="validar2(this.id)" required></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: none;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo utf8_encode($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>			 

				
	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="patente(this.form)">Guardar</button>	   	
	   	</form>


	   	<div class="div12"></div>
	</div>
	<?php include 'down.php';?>