<?php
$registro = "actual";
include 'up.php';
include 'conex.php';
$con = Conectarse();
$flag=$_GET['f'];
$parametro=$_GET['p'];
$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais INNER JOIN profesor on produccionacademica.cveProfesor=profesor.cveProfesor WHERE cveProduccionAcademica='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
?>
<script src="js/funciones.js"></script>
<script src="js/produc.js"></script>
<script>
  $( function() {
    $( "#fecpub" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub1" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub2" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub3" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub4" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub5" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub6" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub7" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpub8" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpro" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
    $( "#fecpro1" ).datepicker({
      textFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true
    });
  } );
</script>

	<div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div id="contenido">
		<div class="div7"> <h2>Produccion Academica</h2> </div>
		<div class="div12"></div>
	   	
	   	<div class="div12"></div>
	   	
<?php if ($flag=='Articulo') {
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Articulo", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProduccionAcademica='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
?>
	   	<!--     ARTICULO      -->
	   	<form onsubmit="return false" id="art" style="display: block;">
	   		<div class="div5"></div><div class="div3"><h3>Artículo</h3></div>	   			
	   		<div class="div12"></div>

	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3">
	   		<input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" value=<?php echo $row[3]; ?> ></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"><?php echo $row[6]; ?></textarea></div>	   	
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"><?php echo $row[7]; ?></textarea></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   		<option><?php echo $row[35]; ?></option>
	   		<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>


	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   		<option><?php echo $row[36]; ?></option>
	   		<option style="display: block;">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
			<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required value=<?php echo $row[10];?>></div>


	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"><input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15];?>></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="ed" onblur="validar2(this.id)" required value=<?php echo $row[11];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"> <input type="text" id="vol" value=<?php echo $row[12];?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required value=<?php echo $row[13];?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub" onblur="validar2(this.id)" required value=<?php echo $row[9];?>></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   					<option><?php echo $row[34];?></option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>  			   		

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="articulosModificar(this.form,<?php echo $parametro;?>)">Guardar</button>	   	
	   	</form>
<?php  }elseif ($flag=="ArticuloArbitrario") {
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Articulo arbitrado", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
?>
	   	<!-- ARTICULO ARBITRARIO -->
	   	<form onsubmit="return false" id="arb" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Artículo arbitrario</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" required value=<?php echo $parametro; ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"><?php echo $row[6]?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"><?php echo $row[7]; ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   		
	   		<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>"<?php if ($row1->nombre==$row[35]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"><?php echo $row[16]; ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);?>
						<option style="display: block">Selecciona el Pais</option>
						<?php while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required value=<?php echo $row[10];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14];?> ></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15];?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required value=<?php echo $row[11];?>></div>	

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"> <input type="text" id="vol" value=<?php echo $row[12];?>></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required value=<?php echo $row[13];?>></div>		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub1" onblur="validar2(this.id)" required value=<?php echo $row[9];?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   		<option><?php echo $row[34];?></option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>"<?php if ($row1->nombre==$row[34]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Dirección Eléctronica</h4></div>
	   		<div class="div3"><textarea type="text" id="direlec" onblur="validar2(this.id)"><?php echo $row[17] ?></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="articulosArbitradosModificar(this.form,<?php echo $parametro;?>)">Guardar</button>	   	
	   	</form>
<?php } elseif ($flag=="ArticuloIndexada") {
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Articulos indexados", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProduccionAcademica='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
?>
	   	<!-- ARTICULO REVISTA INDEXADA -->
	   	<form onsubmit="return false" id="inde" style="display: block;">
	   		<div class="div5"></div><div class="div4"> <h3>Artículo en revista indexada</h3></div>
	   		<div class="div5"></div><div class="div4"><h3></h3></div>
	   		<div class="div12"></div>


	   		<div class="div1"></div><div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="true" value=<?php echo $row[3];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del artículo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="tit" onblur="validar2(this.id)"><?php echo $row[7] ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[35]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"><?php echo $row[16]; ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<option style="display: block;">Selecciona el Pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre de la revista</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="revis" onblur="validar2(this.id)" required value=<?php echo $row[10];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14];?>></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"><input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15];?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required value=<?php echo $row[11];?>></div>	

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Volumen</h4></div>
	   		<div class="div3"><input type="text" id="vol" value=<?php echo $row[12];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Índice de registro de la revista</h4></div>
	   		<div class="div3"> <input type="text" id="ind" onblur="validar2(this.id)" required value=<?php echo $row[18];?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>ISSN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="issn" onblur="validar2(this.id)" required value=<?php echo $row[13];?>></div>		
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub2" onblur="validar2(this.id)" required value=<?php echo $row[9];?>></div>	   		

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"<h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<option style="display: block;">Selecciona el proposito</option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[34]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Dirección Eléctronica</h4></div>
	   		<div class="div3"><textarea type="text" id="direlec" onblur="validar2(this.id)"><?php echo $row[17];?></textarea> </div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="articulosIndexadosModificar(this.form,<?php echo $parametro; ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="Asesoria"){
	 $sql="SELECT asesoriaconsultoria.*, pais.nombrePais,estadoactual.Estado FROM asesoriaconsultoria INNER JOIN pais  on asesoriaconsultoria.idPais=pais.idPais INNER JOIN estadoactual on estadoactual.idEstado=asesoriaconsultoria.idEstado WHERE cveAsesoriaConsultoria='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
		/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Asesoria", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	?>
	   	<!-- ASESORIA -->
	   	<form onsubmit="return false" id="ase" style="display: block;">
	   		<div class="div5"></div><div class="div3"><h3>Asesoría</h3></div>
	   		<div class="div12"></div>
			<div class="div12" style="padding-left:115px; padding-right:115px;"><p>En esta sección deberá registrar solo las asesorías asociadas a las líneas de investigación aplicada o de desarrollo tecnológico a empresas o instituciones externas que usted ha realizado.</p></div>
			<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="true" value=<?php echo $row[1];?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre del estudio o proyecto realizado</h4></div>
	   		<div class="div3"><textarea type="text" id="estu" onblur="validar2(this.id)"><?php echo $row[4]; ?></textarea> </div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Alcance/Objetivo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="alc" onblur="validar2(this.id)"><?php echo $row[5]; ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   		<option style="display: block;">Selecciona el pais</option>	
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[12]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

				
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[13]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha inicio de proyecto</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpro" onblur="validar2(this.id)" required value=<?php echo $row[7];?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Empresa o dependencia beficiaria </h4></div>
	   		<div class="div3"><textarea type="text" id="emp" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea> </div> 		
	   		<div class="div1"></div> <div class="div2"><h4>Otros investigadores participantes</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="part" onblur="validar2(this.id)"><?php echo $row[9] ?></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="asesoriaModificar(this.form,<?php echo $parametro;?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="CapituloLibro"){
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Capitulo de libro", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	?>

	   	<form onsubmit="return false" id="capitulolib" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Capítulo de libro</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" value=<?php echo $row[3]; ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es) del libro</h4></div>
	   		<div class="div3"><textarea type="text" id="autlib" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del libro</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titlib" onblur="validar2(this.id)"><?php echo $row[7] ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[35]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required value=<?php echo $row[11]; ?>></div>	
	   		<div class="div1"></div><div class="div2"><h4>Edición </h4></div>
	   		<div class="div3"> <input type="text" id="edic" onblur="validar2(this.id)" required value=<?php echo $row[19] ?>></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub3" onblur="validar2(this.id)" required value=<?php echo $row[9] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<option style="display: block;">Selecciona el Pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Tiraje</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="tirj" onblur="validar2(this.id)" required value=<?php echo $row[20] ?>></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISBN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="isbn" onblur="validar2(this.id)" required value=<?php echo $row[21]; ?>></div>	

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<option style="display: block;">Selecciona el Proposito</option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[34]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			<div class="div12"></div>
			<div class="div5"></div><div class="div5"> <h3>Datos del Capítulo del libro</h3></div>
	   		<div class="div12"></div>

				
				
	   		<div class="div1"></div><div class="div2"><h4>Titulo del Capitulo</h4></div>
	   		<div class="div3"><textarea type="text" id="titcap"><?php echo $row[22] ?></textarea> </div>
			<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14]; ?>></div>	  

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15] ?>></div>	   		

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="CapituloLibroModificar(this.form,<?php echo $parametro ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="Consultoria"){
	$sql="SELECT asesoriaconsultoria.*, pais.nombrePais,estadoactual.Estado FROM asesoriaconsultoria INNER JOIN pais  on asesoriaconsultoria.idPais=pais.idPais INNER JOIN estadoactual on estadoactual.idEstado=asesoriaconsultoria.idEstado WHERE cveAsesoriaConsultoria='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
		/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Estudios", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	?>
	   	<!-- CONSULTORIA -->
	   	<form onsubmit="return false" id="consu" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Consultoría</h3></div>
	   		<div class="div12"></div>

	   		<div class="div12">En esta sección deberá registrar solo las asesorías asociadas a las líneas de investigación aplicada o de desarrollo tecnológico a empresas o instituciones externas que usted ha realizado.</div>
			<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" value=<?php echo $row[1]; ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Nombre del estudio o proyecto realizado</h4></div>
	   		<div class="div3"><textarea type="text" id="estu" onblur="validar2(this.id)"><?php echo $row[4] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Alcance/Objetivo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="alc" onblur="validar2(this.id)"><?php echo $row[5]; ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   					<option style="display: block;">Selecciona el pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>

						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[12]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

				
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[13]) {echo "selected";
							# code...
						}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha inicio de proyecto</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpro1" onblur="validar2(this.id)" required value=<?php echo $row[7]; ?>></div>
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Empresa o dependencia beficiaria </h4></div>
	   		<div class="div3"><textarea type="text" id="emp" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea></div> 		
	   		<div class="div1"></div> <div class="div2"><h4>Otros investigadores participantes</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="part" onblur="validar2(this.id)"><?php echo $row[9] ?></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Beneficio economico para la institución</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="bene" onblur="validar2(this.id)"><?php echo $row[10] ?></textarea></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="consultoriaModificar(this.form, <?php echo $parametro ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="Libro"){
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Libro", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/?>
	   	<!-- LIBRO -->
	   	<form onsubmit="return false" id="book" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Libro</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required value=<?php echo $row[3] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es) del libro</h4></div>
	   		<div class="div3"><textarea type="text" id="autlib" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo del libro</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titlib" onblur="validar2(this.id)"><?php echo $row[7] ?></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Tipo de participación</h4></div>
			<div class="div3"><input placeholder="" type="text" id="parti" onblur="validar2(this.id)" required value=<?php echo $row[23] ?>></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[35]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Editorial</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="edi" onblur="validar2(this.id)" required value=<?php echo $row[11] ?>></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Páginas</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="pag" onblur="validar2(this.id)" required value=<?php echo $row[24] ?>></div>	
	   		<div class="div1"></div><div class="div2"><h4>Edición </h4></div>
	   		<div class="div3"> <input type="text" id="edic" onblur="validar2(this.id)" required value=<?php echo $row[19] ?>></div>

			<div class="div12"></div>
			<div class="div1"></div> <div class="div2"><h4>Tiraje</h4></div>
			<div class="div3"><input placeholder="" type="text" id="tirj" onblur="validar2(this.id)" required value=<?php echo $row[20] ?>></div>
	   		<div class="div1"></div> <div class="div2"><h4>ISBN</h4></div>
	   		<div class="div3"><input placeholder="" type="text" id="isbn" onblur="validar2(this.id)" required value=<?php echo $row[21] ?>></div>	

			
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el pais</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub4" onblur="validar2(this.id)" required value=<?php echo $row[9] ?>></div>

	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM Proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[34]) {echo "selected";}?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="LibroModificar(this.form, <?php echo $parametro; ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="Material"){
	$sql="SELECT produccionacademica.*, proposito.proposito, pais.nombrePais, institucion.nombreInst FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN pais  on produccionacademica.idPais=pais.idPais INNER JOIN institucion on institucion.cveInstitucion=produccionacademica.cveInstitucion WHERE cveProduccionAcademica='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado); 
		/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Material de apoyo", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	?>
	   	<!-- MATERIAL DE APOYO -->
	   	<form onsubmit="return false" id="apoyo" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Material de apoyo</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" required value=<?php echo $row[3] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"><?php echo $row[6]; ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titu" onblur="validar2(this.id)"><?php echo $row[7]; ?></textarea></div>
	   		<div class="div1"></div> <div class="div2"><h4>Descripción</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="descr" onblur="validar2(this.id)"><?php echo $row[16]; ?></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Institución beneficiaria</h4></div>
	   		<div class="div3"><select id="insot" style="width: 190px;" onblur="validar2(this.id)">
	   				<option style="display:block">Instituciones</option>
	   				<?php $qri = "SELECT nombreInst AS nombre, cveInstitucion AS clave FROM institucion";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) { echo "selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
				</select></div>

	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<option style="display: block;">Selecciona tu pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[35]) { echo "selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
				
			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub5" onblur="validar2(this.id)" required value=<?php echo $row[9] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[34]) { echo "selected";} ?> > <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>  

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="MaterialModificar(this.form,<?php echo $parametro ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="Memorias"){
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Memorias", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/?>
	   	<!-- MEMORIAS -->
	   	<form onsubmit="return false" id="mem" style="display: block;">
	   		<div class="div5"></div><div class="div3"><h3>Memorias</h3></div>
	   		<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="true" required value=<?php echo $row[3]?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)" value=""><?php echo $row[6];?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo de presentación</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titpre" onblur="validar2(this.id)"><?php echo $row[7];?></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Nombre del congreso donde se presento</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="niv" onblur="validar2(this.id)"><?php echo $row[25];?></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<option style="display: block;">Selecciona el estado</option>
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->clave==$row[33]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<option style="display: block;">Selecciona tu pais</option>
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->clave==$row[2]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

	   		<div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Estado</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="state" onblur="validar2(this.id)" required value=<?php echo $row[26];?>></div>
			 <div class="div1"></div> <div class="div2"><h4>Ciudad</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="city" onblur="validar2(this.id)" required value=<?php echo $row[27];?>></div>

			 <div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14];?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15];?>></div>

	   		<div class="div12"></div>	
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub6" onblur="validar2(this.id)" required value=<?php echo $row[9];?>></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   		<option style="display: block;">Selecciona el proposito</option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->clave==$row[1]) {
							echo "selected";
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>			 

	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="memoriasModificar(this.form,<?php echo $row[0]; ?>)">Guardar</button>	   	
	   	</form>
<?php } elseif($flag=="MemoriasExtenso"){
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Memorias en extenso", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/?>
	   	<!-- MEMORIAS EN EXTENSO-->
	   	<form onsubmit="return false" id="ext" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Memorias en Extenso</h3></div>
	   		<div class="div12"></div>

	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" required readonly="true" value=<?php echo $row[3] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea type="text" id="aut" onblur="validar2(this.id)"><?php echo $row[6] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo de presentación</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titpre" onblur="validar2(this.id)"><?php echo $row[7] ?></textarea></div>
			<div class="div1"></div> <div class="div2"><h4>Nombre del congreso donde se presento</h4></div>
			<div class="div3"><textarea placeholder="" type="text" id="niv" onblur="validar2(this.id)"><?php echo $row[25] ?></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if($row[33]==$row1->clave){echo "selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>"<?php if($row[2]==$row1->clave){echo "selected";} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			 <div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Estado</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="state" onblur="validar2(this.id)" required value=<?php echo $row[26] ?>></div>
			 <div class="div1"></div> <div class="div2"><h4>Ciudad</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="city" onblur="validar2(this.id)" required value=<?php echo $row[27] ?>></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>De la página</h4></div>
	   		<div class="div3"> <input type="text" id="dela" onblur="validar2(this.id)" required value=<?php echo $row[14] ?>></div>	   		
	   		<div class="div1"></div><div class="div2"><h4>A la página</h4></div>
	   		<div class="div3"> <input type="text" id="ala" onblur="validar2(this.id)" required value=<?php echo $row[15] ?>></div>	

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub7" onblur="validar2(this.id)" required value=<?php echo $row[9] ?>></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<option style="display: block;">Selecciona el proposito</option>
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>

						<option value="<?php echo $row1->clave;?>" <?php if($row[1]==$row1->clave){echo "selected";} ?>> <?php echo ($row1->nombre);?> </option>
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
<?php } elseif($flag=="Patente"){
	/*Este archivo muestra el formulario para modificar el registro seleccionado en la seccion de consulta en el area "Patente", utiliza como parametro(p) de busuqeda el id que envia la solicitud dentro de la URL por GET*/
	$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProduccionAcademica='".$parametro."'";
		$resultado=mysqli_query($con,$sql);
		$row = mysqli_fetch_row($resultado);
	?>
	   	<!-- PATENTE-->

	   	<form onsubmit="return false" id="pate" style="display: block;">
	   		<div class="div5"></div><div class="div3"> <h3>Patente</h3></div>
	   		<div class="div12"></div>
	   		<div class="div1"></div> <div class="div2"><h4>Clave de profesor</h4></div>
	   		<div class="div3"><input placeholder="Obligatorio" type="text" id="clv" onblur="validar2(this.id)" readonly="true" required value=<?php echo $row[3] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Autor(es)</h4></div>
	   		<div class="div3"><textarea autofocus="type="text" id="aut" onblur="validar2(this.id)""><?php echo $row[6] ?></textarea></div>	   		
	   		
	   		<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Titulo</h4></div>
	   		<div class="div3"><textarea placeholder="" type="text" id="titl" onblur="validar2(this.id)"><?php echo $row[7] ?></textarea></div>
	   		<div class="div1"></div><div class="div2"><h4>Descripción </h4></div>
	   		<div class="div3"><textarea type="text" id="descr" onblur="validar2(this.id)"><?php echo $row[16] ?></textarea> </div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Clasificación Internacional de Patentes </h4></div>
	   		<div class="div3"> <input type="text" id="intpate" onblur="validar2(this.id)" required value=<?php echo $row[29] ?>></div>
	   		<div class="div1"></div><div class="div2"><h4>Uso </h4></div>
	   		<div class="div3"><textarea type="text" id="use" onblur="validar2(this.id)"><?php echo $row[30] ?></textarea></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Estado Actual</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="sta" onblur="validar2(this.id)">
	   			<?php $qri = "SELECT Estado AS nombre, idEstado AS clave FROM estadoactual";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el estado</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[35]) {echo "selected";
							# code...
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>
	   		<div class="div1"></div><div class="div2"><h4>Pais</h4></div>
	   		<div class="div3"> <select style="width: 190px;" id="coun">
	   			<?php $qri = "SELECT nombrePais AS nombre, idPais AS clave FROM pais";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona tu pais</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[36]) {echo "selected";
							# code...
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>

			 <div class="div12"></div>
 			 <div class="div1"></div> <div class="div2"><h4>Numero registro</h4></div>
 			 <div class="div3"><input placeholder="" type="text" id="num" onblur="validar2(this.id)" required value=<?php echo $row[31] ?>></div>
			 <div class="div1"></div> <div class="div2"><h4>Usuario</h4></div>
			 <div class="div3"><input placeholder="" type="text" id="user" onblur="validar2(this.id)" required value=<?php echo $row[32] ?>></div>

			<div class="div12"></div>
	   		<div class="div1"></div><div class="div2"><h4>Fecha de publicación</h4></div>
	   		<div class="div3"> <input style="width: 190px;" type="text" id="fecpub8" onblur="validar2(this.id)" required value=<?php echo $row[9] ?>></div>	
	   		<div class="div1"></div><div class="div2"><h4>Propósito</h4></div>
	   		<div class="div3"><select style="width: 190px;" id="propo">
	   			<?php $qri = "SELECT proposito AS nombre, idProposito AS clave FROM proposito";
							  $resul=mysqli_query($con,$qri);
						while($row1 = $resul->fetch_object()){?>
						<option style="display: block;">Selecciona el proposito</option>
						<option value="<?php echo $row1->clave;?>" <?php if ($row1->nombre==$row[34]) {echo "selected";
							# code...
						} ?>> <?php echo ($row1->nombre);?> </option>
					<?php } ?>
	   		</select></div>			 

				
	   		<div class="div12"></div>
	   		<div class="div12"></div>
	   		<div class="div5"></div>
	   	<button class="div1 menta" id="boton" onclick="PatenteModificar(this.form,<?php echo $parametro ?>)">Guardar</button>	   	
	   	</form>


	   	<div class="div12"></div>
	</div>
	<?php } include 'down.php';?>