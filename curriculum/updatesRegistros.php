<?php  
include 'conex.php';
	$con=Conectarse();
	$flag=$_POST['flag'];
	$parametro=$_POST['p'];

	if ($flag=="Art") {
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

		$sql="UPDATE produccionacademica SET autorProduccion='".$auto."', tituloProduccion='".$tit."', nombreRevistaArticulo='".$revista."', paginaInicio=".$depag.", paginaFin=".$apag.", ISSN='".$issn."', fechaPublicacion='".$fecpub."' WHERE cveProduccionAcademica=".$parametro;
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
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
		$sql="UPDATE produccionacademica SET autorProduccion='".$auto."', tituloProduccion='".$tit."', nombreRevistaArticulo='".$revista."', paginaInicio=".$depag.", paginaFin=".$apag.", idPais=".$pais.", idEstado=".$estado.",editorialProduccion='".$editoria."', volumenProduccion='".$volu."',issn='".$issn."', idProposito=".$propo.", descripcionProduccion='".$descr."', fechaPublicacion='$fecpub', idProposito=$propo, urlArticulo='$descr' WHERE cveProduccionAcademica=".$parametro;
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
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
		$sql="UPDATE produccionacademica SET idProposito=".$propo.",idPais=".$pais.",autorProduccion='$auto',tituloProduccion='$tit',fechaPublicacion='$fecpub', idEstado=$estado, idPais=$pais, descripcionProduccion='$descr', nombreRevistaArticulo='$revista', paginaInicio=$depag, paginaFin=$apag, editorialProduccion='$editoria', volumenProduccion=$volu,indiceRegistroRevista='$indiceregistro', ISSN='$issn', urlArticulo='$electronica'  WHERE cveProduccionAcademica=$parametro";
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}

	}
	if($flag=='ase'){
		$clave = $_POST['clavep'];
		$nomproy =$_POST['proyecto'];
		$bempresa =$_POST['empresa'];
		$fecpub = $_POST['fechaproy'];
		$otros = ($_POST['investigadores']!="") ? $_POST['investigadores'] : 'no agregados';
		$objetivo = ($_POST['objetivop']!="") ? $_POST['objetivop'] : 'no especificado';
		$pais = $_POST['lugar'];
		$estado = ($_POST['respestado']!="0") ? $_POST['respestado'] : '4';
		$sql="UPDATE asesoriaconsultoria SET idPais=$pais,nombreProyecto='$nomproy',empresaBeneficiaria='$bempresa',fechaInicio='$fecpub',otrosInvestigadores='$otros',idEstado=$estado,objetivoProyecto='$objetivo' WHERE cveAsesoriaConsultoria=$parametro";
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
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
		 $sql="UPDATE asesoriaconsultoria SET idPais=$pais,nombreProyecto='$nomproy',empresaBeneficiaria='$bempresa',fechaInicio='$fecpub',otrosInvestigadores='$otros',idEstado=$estado,objetivoProyecto='$objetivo', beneficioEconomicoInst='$beneficio' WHERE cveAsesoriaConsultoria=$parametro ";
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
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
		$sql = "UPDATE produccionacademica SET idPais=$pais,autorProduccion='$auto',tituloProduccion='$tit',idProposito=$propo,fechaPublicacion='$fecpub',editorialProduccion='$editoria',idEstado=$estado,edicionProduccion='$edici',tiraje='$ti',ISBN='$isbn',paginaInicio=$depag,paginaFin=$apag,tituloCapitulo='$tituloc' WHERE cveProduccionAcademica=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
	if ($flag=='lib') {
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

		$sql = "UPDATE produccionacademica SET idPais=$pais,autorProduccion='$auto',tituloProduccion='$tit',idProposito=$propos,paraCurriculum=1,fechaPublicacion='$fecpub',editorialProduccion='$editoria',idEstado=$estado,edicionProduccion='$edici',tiraje='$ti',ISBN='$isbn',tipoParticipacion='$participa',numeroPaginas=$paginat WHERE cveProduccionAcademica=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
	if ($flag=='matsup') {
		$clave = $_POST['clavep'];
		$autor = $_POST['autor'];
		$tit = $_POST['titulo'];
		$descr = ($_POST['descripcion']!="") ? $_POST['descripcion'] : 'Ninguna';
		$inst = $_POST['institucion'];
		$pais = $_POST['lugar'];
		$fpublic = $_POST['fechap'];
		$propo = $_POST['proposito'];
		
		$sql = "UPDATE produccionacademica SET idPais=$pais,autorProduccion='$autor',tituloProduccion='$tit',idProposito=$propo,paraCurriculum=1,fechaPublicacion='$fpublic',descripcionProduccion='$descr',cveInstitucion=$inst WHERE cveProduccionAcademica=$parametro";
		if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
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
		$sql = "UPDATE produccionacademica SET idPais=$pais,autorProduccion='$autor',tituloProduccion='$tit',idProposito=$propo,paraCurriculum=1,fechaPublicacion='$fpublic',descripcionProduccion='$descr',clasifPatente='$claf',usoPatente='$use',idEstado=$estado,numeroRegistroPatente='$reg',usuarioPatente='$user' WHERE cveProduccionAcademica=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
	if($flag=="altap"){
		$clave = $_POST['clave'];
		$nombre = $_POST['name'];
		$gene = $_POST['genero'];
		$curp = $_POST['curps'];
		$civil = ($_POST['esci']!="0") ? $_POST['esci'] : 'NA';
		$pais = ($_POST['count']!="0") ? $_POST['count'] : 'NA';
		$enti = $_POST['ent'];
		$fecbi = $_POST['fecnac'];
		$phone = $_POST['tel1'];
		$telo = ($_POST['telof']!="") ? $_POST['telof'] : 'NA';
		$correo = $_POST['mail'];
		$correo2 = ($_POST['mail2']!="") ? $_POST['mail2'] : 'NA';
		$promep = ($_POST['respro']!="") ? $_POST['respro'] : '0';
		$fecpro = ($_POST['fecp']!="") ? $_POST['fecp'] : null;
		$sni = ($_POST['ress']!="") ? $_POST['ress'] : '0';
		$fecsni = ($_POST['fecs']!="") ? $_POST['fecs'] : null;
		$extension = ($_POST['extn']!="") ?	$_POST['extn'] : 'NA';
		

		$sql = "UPDATE profesor SET nombre='$nombre',genero=$gene,curp='$curp',idEdoCivil=$civil,idPais='$pais',entidadNacimiento='$enti',fechaNac='$fecbi',telefonoProfesor='$phone',telefonoTrabajo='$telo',email='$correo',emailAdicional='$correo2',tienePromep=$promep,fechaPromep='$fecpro',tieneSNI=$sni,fechaSNI='$fecsni',ext=$extension WHERE cveProfesor=$clave";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error."/n".$sql;
			}
		

		
	}
	if($flag=="labo"){
		$clave = $_POST['clave'];
		$institucion = $_POST['ins'];
		$contrato = $_POST['contra'];
		$tipo = ($_POST['tnombra']!="") ? $_POST['tnombra'] : 'NA';
		$nombram = $_POST['nomt'];
		$dependencia = ($_POST['dep']!="") ? $_POST['dep'] : 'NA';
		$academia = ($_POST['uniac']!="") ? $_POST['uniac'] : 'NA';
		$fechai = $_POST['fecinic'];
		$fechaf = ($_POST['fecfinc']!="") ? $_POST['fecfinc'] : 'NA';
		$cronologia = ($_POST['cronos']!="") ? $_POST['cronos'] : 'NA';

		$sql = "UPDATE datoslaborales SET cveInstitucion=$institucion,dedicacion='$contrato',tipoNombramiento='$tipo',dependencia='$dependencia',unidadAcademica='$academia',inicioContrato='$fechai',finContrato='$fechaf',cronologia='$cronologia',nombramiento='$nombram' WHERE cveDatosLaborales=".$parametro;		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		
	}

	if($flag=="direcc"){
		$clave = $_POST['clave'];
		$titulo = $_POST['tit'];
		$nivel = ($_POST['niv']!="") ? $_POST['niv'] : 'NA';
		$fechai = $_POST['fecinic'];
		$fechaf = ($_POST['fecfin']!="") ? $_POST['fecfin'] : 'NA';
		$alumno = ($_POST['nalum']!="") ? $_POST['nalum'] : 'NA';
		$estado = $_POST['resestado'];
		$institu = $_POST['ies'];
		$otrai = ($_POST['oies']!= "") ? $_POST['oies'] : 'NA';
		if (is_null($otraInst) || $otraInst=="") {
			$otraInst=" ";
		}

		
			$sql = "UPDATE direccionindividualizada SET titulo='$titulo',idEstudio=$nivel,fechaInicio='$fechai',fechaFin='$fechaf',numAlumnos=$alumno,idEstado=$estado,cveInstitucion=$institu,nombInstitucion='$otraInst',paraCurriculum=0 WHERE cveDireccionInd=".$parametro;		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		
	}
	if ($flag=='estud') {
		$clave = $_POST['clave'];
		$programa = $_POST['nivel'];
		$en = $_POST['estudio'];
		$zona = $_POST['area'];
		$dis = ($_POST['disciplina']!="") ? $_POST['disciplina'] : 'NA';
		$coun = $_POST['pais'];
		$instituto = $_POST['otorgante'];
		$otra = ($_POST['otras']!="") ? $_POST['otras'] : 'NA';
		$fecini = $_POST['fechai'];
		$fecfin = $_POST['fechaf'];
		$titulo = ($_POST['obtener']!="") ? $_POST['obtener'] : 'NA';;
		$sql = "UPDATE estudio SET idEstudio=$programa,estudioEn='$en',idArea=$zona,disciplinaEstudio='$dis',idPais=$coun,cveInstitucion=$instituto,institucionNoCatalogo='$otra',fechaInicio='$fecini',fechaFin='$fecfin',fechaObtencion='$titulo' WHERE cveEstudio=".$parametro;
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
	if($flag == "gestion"){
		$clave = $_POST['clave'];
		$typ = $_POST['tipo'];
		$carg = $_POST['cargo'];
		$func = ($_POST['funcion']!="") ? $_POST['funcion'] : 'No especifico';
		$orgcole = ($_POST['organo']!="") ? $_POST['organo'] : 'NA';
		$apro = $_POST['respuesta'];
		$resul = ($_POST['resultado']!="") ? $_POST['resultado'] : 'NA';
		$term = $_POST['termi'];
		$feciges = $_POST['iniciog'];
		$fectges = ($_POST['fing']!="") ? $_POST['fing'] : 'NA';
		$fecuinfo = $_POST['ultimoin'];
		$hrs = ($_POST['horas']!="") ? $_POST['horas'] : '0';
		
		$sql = "UPDATE gestionacademica SET tipoIndividual=$typ,cargo='$carg',funcion='$func',organoColegiado='$orgcole',aprobado=$apro,resultados='$resul',terminada=$term,fechaInicioGestion='$feciges',fechaTerminoGestion='$fectges',fechaUltimoInforme='$fecuinfo',horasSemana=$hrs WHERE cveGestionAcademica=".$parametro;		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
	}
	if ($flag=="docencia") {
		$clave = $_POST['clave'];
		$plan = $_POST['programa'];
		$nivel = $_POST['nestudio'];
		$institu = $_POST['dependencia'];
		$curso = $_POST['nombrec'];
		$fechai = $_POST['finicio'];
		$nalumnos = ($_POST['numalum']!="") ? $_POST['numalum'] : 'NA';
		$semana = ($_POST['duracion']!="") ? $_POST['duracion'] : 'NA';
		$asesoria = ($_POST['horas']!="") ? $_POST['horas'] : 'NA';
		$curs = ($_POST['curso']!="") ? $_POST['curso'] : 'NA';
		$sql = "UPDATE docencia SET idEstudio=$nivel,cveInstitucion=$institu,cveCurso=$curso,fechaInicio='$fechai',numAlumnos=$nalumnos,duracionSemanas=$semana,horasAsesoriaMes=$asesoria,horasSemana=$curs WHERE cvedocencia=$parametro";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		# code...
	}
	if ($flag=='app') {
		$clav = $_POST['clave'];
		$campo = $_POST['cam'];
		$acti = ($_POST['actividad']!="") ? $_POST['actividad'] : 'NA';
		$horas = ($_POST['hor']!="") ? $_POST['hor'] : '0';

		
			$sql = "UPDATE lgac SET campo='$campo',actividades='$acti',horas=$horas WHERE cveGAC=$parametro";
			if(mysqli_query($con, $sql)){	
				echo "OK";
			}else{
				echo $con->error;
			}	
		}
	if($flag == 'premi'){
		$clave = $_POST['clave'];
		$premio = $_POST['premio'];
		$motivo = ($_POST['moti']!= "") ? $_POST['moti'] : 'sin especificar';
		$obtencion = $_POST['feob'];
		$institucion = $_POST['insti'];
		$otrai = ($_POST['ot']!= "") ? $_POST['ot'] : 'NA';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "UPDATE premio SET cveInstitucion='$institucion',nombrePremio='$premio',motivo='$motivo',fechaObtencion='$obtencion',otraInstitucionOtorgante='$otrai' WHERE cvePremio=$parametro";
			if(mysqli_query($con, $sql)){	
				echo "OK";
			}else{
				echo $con->error;
			}	
		}
	}
	if($flag == 'proyectos'){
		$clave = $_POST['clave'];
		$titulo = $_POST['titl'];
		$patrocina = $_POST['nompatro'];
		$fechainicio = $_POST['fecinpr'];
		$fechafin = $_POST['fecfipr'];
		$patrocinte = ($_POST['patroint']!="2") ? $_POST['patroint'] : '222';
		$investigador = $_POST['inve'];
		$alumno = $_POST['alumno'];
		$actividad = ($_POST['activ']!="") ? $_POST['activ'] : 'NA';
		$miembro = ($_POST['nomiem']!="") ? $_POST['nomiem'] : '111';
		$lgaic = ($_POST['lgac']!="") ? $_POST['lgac'] : '111';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "UPDATE proyectoinvestigacion SET titulo='$titulo',nombrePatrocinador='$patrocina',fechaInicioProyecto='$fechainicio',fechaFinProyecto='$fechafin',patrocinadorInterno='$patrocinte',investigadores='$investigador',alumnos='$alumno',actividades='$actividad',miembros='$miembro',LGACs='$lgaic' WHERE cveProyectoInvestigacion=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $sql;
			}	
		}
	}
	if($flag == 'tutoria'){
		$clave = $_POST['clave'];
		$alum = $_POST['alumno'];
		$niv = $_POST['nivel'];
		$carre = $_POST['carrera'];
		$fecinicio = $_POST['fechai'];
		$fecfin = ($_POST['fechat']!= "") ? $_POST['fechat'] : 'NA';
		$terminar = $_POST['respuesta'];
		$tip = ($_POST['tipo']!="") ? $_POST['tipo'] : 'no especifico';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "UPDATE tutoria SET cvePlan='$carre',nombreEstudiante='$alum',fechaInicio='$fecinicio',fechaFin='$fecfin',tipo='$tip',terminado='$terminar',idEstudio='$niv' WHERE cveTutoria=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}	
		}
	}
	if ($flag=='mem') {
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
			$sql = "UPDATE produccionacademica SET idPais=$pais,autorProduccion='$auto',tituloProduccion='$tit',idProposito=$propos,paraCurriculum=1,fechaPublicacion='$fecpub',nombreCongreso='$cong',idEstado=$estado,estadoProduccion='$state',ciudadProduccion='$city',paginaInicio=$depag,paginaFin=$apag,cveTipoProduccion=7 WHERE cveProduccionAcademica=$parametro";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	
?>