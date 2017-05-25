<?php
	include('conex.php');
	$con = Conectarse();
	
	$flag = $_POST['flag'];
	
	//AGREGA ARTICULOS - PRODUCCION ACADEMICA
	if($flag=='art'){

		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$revista = ($_POST['nrevista']!="") ? $_POST['nrevista'] : 'Sin nombre';
		$depag = ($_POST['depagi']!="") ? $_POST['depagi'] : '0';
		$apag = ($_POST['apagi']!="") ? $_POST['apagi'] : '0';
		$editoria = ($_POST['editorial']!="") ? $_POST['editorial'] : 'Sin nombre';
		$volu = ($_POST['volumen']!="") ? $_POST['volumen'] : '0000';
		$issn = $_POST['cissn'];
		$fecpub = $_POST['fechap'];
		$propo = ($_POST['proposito']!="0") ? $_POST['proposito'] : '6';
		$tipoproduccion = 1;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idProposito,idPais,cveProfesor,cveTipoProduccion,autorProduccion,tituloProduccion,paraCurriculum,fechaPublicacion,nombreRevistaArticulo,editorialProduccion,volumenProduccion,ISSN,paginaInicio,paginaFin,idEstado) 
			VALUES ($propo,$pais,$clave,$tipoproduccion,'$auto','$tit',1,'$fecpub','$revista','$editoria',$volu,'$issn',$depag,$apag,$estado)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}
	//AGREGAR ARTICULOS ARBITRADOS - PRODUCCION ACADEMICA
	if($flag=='arb'){

		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$revista = ($_POST['nrevista']!="") ? $_POST['nrevista'] : 'Sin nombre';
		$depag = ($_POST['depagi']!="") ? $_POST['depagi'] : '0';
		$apag = ($_POST['apagi']!="") ? $_POST['apagi'] : '0';
		$editoria = ($_POST['editorial']!="") ? $_POST['editorial'] : 'Sin nombre';
		$volu = ($_POST['volumen']!="") ? $_POST['volumen'] : '0000';
		$issn = $_POST['cissn'];
		$fecpub = $_POST['fechap'];
		$propo = ($_POST['proposito']!="0") ? $_POST['proposito'] : '6';
		$descr = ($_POST['descripcion']!="") ? $_POST['descripcion'] : 'Sin descripción';
		$electronica=$_POST['direlectronica'];
		$tipoproduccion=2;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idProposito,idPais,cveProfesor,cveTipoProduccion,autorProduccion,tituloProduccion,paraCurriculum,fechaPublicacion,nombreRevistaArticulo,editorialProduccion,volumenProduccion,ISSN,paginaInicio,paginaFin,idEstado,descripcionProduccion,urlArticulo) 
			VALUES ($propo,$pais,$clave,$tipoproduccion,'$auto','$tit',1,'$fecpub','$revista','$editoria',$volu,'$issn',$depag,$apag,$estado,'$descr','$electronica')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}		
	}
	//AGREGA ARTICULOS INDEXADOS - PRODUCCION ACADEMICA
	if($flag=='indexa'){
		$clave= $_POST['clavep'];
		$auto= $_POST['autor'];
		$tit= $_POST['titulo'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais= $_POST['lugar'];
		$revista = ($_POST['nrevista']!="") ? $_POST['nrevista'] : 'Sin nombre';
		$depag = ($_POST['depagi']!="") ? $_POST['depagi'] : '0';
		$apag = ($_POST['apagi']!="") ? $_POST['apagi'] : '0';
		$editoria = ($_POST['editorial']!="") ? $_POST['editorial'] : 'Sin nombre';
		$volu = ($_POST['volumen']!="") ? $_POST['volumen'] : '0000';
		$issn= $_POST['cissn'];
		$fecpub= $_POST['fechap'];
		$propo = ($_POST['proposito']!="0") ? $_POST['proposito'] : '6';
		$descr = ($_POST['descripcion']!="") ? $_POST['descripcion'] : 'Sin descripción';
		$electronica=$_POST['direlectronica'];
		$indiceregistro=$_POST['indice'];
		$tipoproduccion=3;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idProposito,idPais,cveProfesor,cveTipoProduccion,autorProduccion,tituloProduccion,paraCurriculum,fechaPublicacion,nombreRevistaArticulo,editorialProduccion,volumenProduccion,ISSN,paginaInicio,paginaFin,idEstado,descripcionProduccion,urlArticulo,indiceRegistroRevista) 
			VALUES ($propo,$pais,$clave,$tipoproduccion,'$auto','$tit',1,'$fecpub','$revista','$editoria',$volu,'$issn',$depag,$apag,$estado,'$descr','$electronica','$tipoproduccion')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}
	//AGREGA ASESORIAS - PRODUCCION ACADEMICA
	if($flag=='ase'){
		$clave = $_POST['clavep'];
		$nomproy =$_POST['proyecto'];
		$bempresa =$_POST['empresa'];
		$fecpub = $_POST['fechaproy'];
		$otros = ($_POST['investigadores']!="") ? $_POST['investigadores'] : 'no agregados';
		$objetivo = ($_POST['objetivop']!="") ? $_POST['objetivop'] : 'no especificado';
		$pais = $_POST['lugar'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$tipoproduccion = 4;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO asesoriaconsultoria (idPais,cveProfesor,cveTipoProduccion,nombreProyecto,empresaBeneficiaria,fechaInicio,considerarCurriculum,otrosInvestigadores,idEstado,objetivoProyecto) 
			VALUES ($pais,$clave,$tipoproduccion,'$nomproy','$bempresa','$fecpub',1,'$otros',$estado,'$objetivo')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}		
	}
	//AGREGA CONSULTORIAS - PRODUCCION ACADEMICA
	if($flag=='consul'){
		
		$clave = $_POST['clavep'];
		$nomproy =$_POST['proyecto'];
		$bempresa =$_POST['empresa'];
		$fecpub = $_POST['fechaproy'];
		$otros = ($_POST['investigadores']!="") ? $_POST['investigadores'] : 'no agregados';
		$objetivo = ($_POST['objetivop']!="") ? $_POST['objetivop'] : 'no especificado';
		$pais = $_POST['lugar'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$beneficio = $_POST['beconomicos'];
		$tipoproduccion = 6;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO asesoriaconsultoria (idPais,cveProfesor,cveTipoProduccion,nombreProyecto,empresaBeneficiaria,fechaInicio,considerarCurriculum,otrosInvestigadores,idEstado,objetivoProyecto,beneficioEconomicoInst) 
			VALUES ($pais,$clave,$tipoproduccion,'$nomproy','$bempresa','$fecpub',1,'$otros',$estado,'$objetivo','$beneficio')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}		
	}
	//AGREGA CAPITULOS DE LIBROS - PRODUCCION ACADEMICA
	if($flag=='capdlibro'){
		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$depag = $_POST['depagi'];
		$apag = $_POST['apagi'];
		$editoria = ($_POST['editorial']!="") ? $_POST['editorial'] : 'No especificado';
		$isbn = $_POST['cisbn'];
		$fecpub = $_POST['fechap'];
		$propo = $_POST['proposito'];
		$edici = ($_POST['edicion']!="") ? $_POST['edicion'] : 'No especificado';
		$ti = ($_POST['tiraje']!="") ? $_POST['tiraje'] : 'No especificado';
		$tituloc = $_POST['tituloc'];
		$tipoproduccion=5;//cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,editorialProduccion,idEstado,edicionProduccion,tiraje,ISBN,paginaInicio,paginaFin,tituloCapitulo,cveTipoProduccion) 
			VALUES ($pais,$clave,'$auto','$tit',$propo,1,'$fecpub','$editoria',$estado,'$edici','$ti','$isbn',$depag,$apag,'$tituloc',5)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}
	//AGREGA LIBROS - PRODUCCION ACADEMICA
	if($flag=='lib'){
		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$editoria = ($_POST['editorial']!="") ? $_POST['editorial'] : 'No especificado';
		$isbn = $_POST['cisbn'];
		$fecpub = $_POST['fechap'];
		$propos = $_POST['proposito'];
		$edici = ($_POST['edicion']!="") ? $_POST['edicion'] : 'No especificado';
		$ti = ($_POST['tiraje']!="") ? $_POST['tiraje'] : 'No especificado';
		$participa = $_POST['participacion'];
		$paginat = ($_POST['paginas']!="") ? $_POST['paginas'] : 'Null';
		$tipoproduccion=7; //cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,editorialProduccion,idEstado,edicionProduccion,tiraje,ISBN,tipoParticipacion,numeroPaginas,cveTipoProduccion) 
			VALUES ($pais,$clave,'$auto','$tit',$propos,1,'$fecpub','$editoria',$estado,'$edici','$ti','$isbn','$participa',$paginat,7)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	if($flag=='matsup'){
		$clave = $_POST['clavep'];
		$autor = $_POST['autor'];
		$tit = $_POST['titulo'];
		$descr = ($_POST['descripcion']!="") ? $_POST['descripcion'] : 'Ninguna';
		$inst = $_POST['institucion'];
		$pais = $_POST['lugar'];
		$fpublic = $_POST['fechap'];
		$propo = $_POST['proposito'];

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,descripcionProduccion,cveInstitucion,cveTipoProduccion) 
			VALUES ($pais,$clave,'$autor','$tit',$propo,1,'$fpublic','$descr',$inst,8)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	if($flag=='mem'){
		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$cong = $_POST['congreso'];
		$state = $_POST['estado'];
		$city = ($_POST['ciudad']!="") ? $_POST['ciudad'] : 'no especificado';
		$fecpub = $_POST['fechap'];
		$propos = $_POST['proposito'];
		$depag = $_POST['depagi'];
		$apag=  $_POST['apagi'];
		$participa = $_POST['fechap'];
		$tipoproduccion = 9; //cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,nombreCongreso,idEstado,estadoProduccion,ciudadProduccion,paginaInicio,paginaFin,cveTipoProduccion) 
			VALUES ($pais,$clave,'$auto','$tit',$propos,1,'$fecpub','$cong',$estado,'$state','$city',$depag,$apag,9)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	if($flag=='memext'){
		$clave = $_POST['clavep'];
		$auto = $_POST['autor'];
		$tit = $_POST['titulo'];
		$estado = ($_POST['respestado']!="") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$cong = $_POST['congreso'];
		$state = $_POST['estado'];
		$city = ($_POST['ciudad']!="") ? $_POST['ciudad'] : 'no especificado';
		$fecpub = $_POST['fechap'];
		$propos = $_POST['proposito'];
		$depag = $_POST['depagi'];
		$apag = $_POST['apagi'];
		$participa = $_POST['fechap'];
		$file = $_POST['archivo'];
		$tipoproduccion = 10; //cambia

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,nombreCongreso,idEstado,estadoProduccion,ciudadProduccion,paginaInicio,paginaFin,archivoPDF,cveTipoProduccion) 
			VALUES ($pais,$clave,'$auto','$tit',$propos,1,'$fecpub','$cong',$estado,'$state','$city',$depag,$apag,'$file',10)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	if($flag=='pate'){
		$clave = $_POST['clavep'];
		$autor = $_POST['autor'];
		$tit = $_POST['titulo'];
		$descr = ($_POST['descripcion']!="") ? $_POST['descripcion'] : 'Sin especificar';
		$claf = $_POST['clasificacion'];
		$use = ($_POST['uso']!="") ? $_POST['uso'] : 'Sin especificar';
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$pais = $_POST['lugar'];
		$reg = $_POST['registro'];
		$user = ($_POST['usuario']!="") ? $_POST['usuario'] : 'sin especificar';
		$fpublic = $_POST['fechap'];
		$propo = $_POST['proposito'];

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO produccionacademica (idPais,cveProfesor,autorProduccion,tituloProduccion,idProposito,paraCurriculum,fechaPublicacion,descripcionProduccion,clasifPatente,usoPatente,idEstado,numeroRegistroPatente,usuarioPatente,cveTipoProduccion) 
			VALUES ($pais,$clave,'$autor','$tit',$propo,1,'$fpublic','$descr','$claf','$use',$estado,'$reg','$user',11)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}



?>