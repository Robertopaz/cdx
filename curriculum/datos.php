<?php 
	// textos y fecha con comillas, las comillas simples se pueden o no poner
// YA LO PUEDE MODIFICAR JAJA
	session_start();
	include('conex.php');
	$con = Conectarse();	
	$flag = $_POST['flag'];

	//VALIDACION DE LOGIN
	if($flag=="valida"){
		$user=$_POST['u'];
		$pass=$_POST['p'];

		$sql="(SELECT COUNT(*) as TOTAL FROM usuario WHERE usuario = '".$user."' && password = '".$pass."')";
		$resultado = mysqli_query($con,$sql);	
		$res = $resultado->fetch_object();
		if($res->TOTAL==1){
			$_SESSION['valida'] = true;
			echo"OK";
		}else{
			echo $con->error;
		}		
	}

	//ALTA PROFE
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
		$promep = ($_POST['respro']!="3") ? $_POST['respro'] : 0;
		$fecpro = ($_POST['fecp']!="") ? $_POST['fecp'] : 'null';
		$sni = ($_POST['ress']!="3") ? $_POST['ress'] : 0;
		$fecsni = ($_POST['fecs']!="") ? $_POST['fecs'] : 'null';
		$extension = ($_POST['extn']!="") ?	$_POST['extn'] : 'NA';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL==0){
			$sql = "INSERT INTO profesor (cveProfesor,nombre,genero,curp,idEdoCivil,idPais,entidadNacimiento,fechaNac,telefonoProfesor,telefonoTrabajo,email,emailAdicional,tienePromep,fechaPromep,tieneSNI,fechaSNI,ext,habilitado) 
			VALUES ($clave,'$nombre',$gene,'$curp',$civil,'$pais','$enti','$fecbi','$phone','$telo','$correo','$correo2',$promep,'$fecpro',$sni,'$fecsni','$extension', 1)";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error."/n".$sql;
			}
		}
	}

	//ALTA LABORAL
	if($flag == "labo"){
		$clave = $_POST['clave'];
		$institucion = $_POST['ins'];
		$contrato = $_POST['contra'];
		$depende = ($_POST['depenc']!="") ? $_POST['depenc'] : 'NA';
		$nombram = $_POST['nomt'];
		$dedicacion = ($_POST['deca']!="") ? $_POST['deca'] : 'NA';
		$academia = ($_POST['uniac']!="") ? $_POST['uniac'] : 'NA';
		$fechai = $_POST['fecinic'];
		$fechaf = ($_POST['fecfinc']!="") ? $_POST['fecfinc'] : 'NA';
		$cronologia = ($_POST['cronos']!="") ? $_POST['cronos'] : 'NA';
		//$cronologia = $_POST['cronos'];

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO datoslaborales (cveProfesor,cveInstitucion,dedicacion,dependencia,tipoNombramiento,unidadAcademica,inicioContrato,finContrato,cronologia,nombramiento) 
			VALUES ($clave,$institucion,'$dedicacion','$depende','$contrato','$academia','$fechai','$fechaf','$cronologia','$nombram')";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	//Direccion
	if($flag == "direcc"){
		$clave = $_POST['clave'];
		$titulo = $_POST['tit'];
		$nivel = ($_POST['niv']!="") ? $_POST['niv'] : 'NA';
		$fechai = $_POST['fecinic'];
		$fechaf = ($_POST['fecfin']!="") ? $_POST['fecfin'] : 'NA';
		$alumno = ($_POST['nalum']!="") ? $_POST['nalum'] : 'NA';
		$estado = $_POST['resestado'];
		$institu = $_POST['ies'];
		$otrai = ($_POST['ot']!= "") ? $_POST['ot'] : 'NA';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO direccionindividualizada (cveProfesor,titulo,idEstudio,fechaInicio,fechaFin,numAlumnos,idEstado,cveInstitucion) 
			VALUES ($clave,'$titulo',$nivel,'$fechai','$fechaf',$alumno,$estado,$institu)";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	//DOCENCIA
	if($flag == "docencia"){
		$clave = $_POST['clave'];
		/*$plan = $_POST['programa'];*/
		$nivel = $_POST['nestudio'];
		$institu = $_POST['dependencia'];
		$curso = $_POST['nombrec'];
		$fechai = $_POST['finicio'];
		$nalumnos = ($_POST['numalum']!="") ? $_POST['numalum'] : 'NA';
		$semana = ($_POST['duracion']!="") ? $_POST['duracion'] : 'NA';
		$asesoria = ($_POST['horas']!="") ? $_POST['horas'] : 'NA';
		$curs = ($_POST['curso']!="") ? $_POST['curso'] : 'NA';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO docencia (cveProfesor,idEstudio,cveInstitucion,cveCurso,fechaInicio,numAlumnos,duracionSemanas,horasAsesoriaMes,horasSemana,dependencia) 
			VALUES ($clave,$nivel,$institu,$curso,'$fechai',$nalumnos,$semana,$asesoria,$curs,'$institu')";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	//Estudios
	if($flag == "estud"){
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
		$titulo = ($_POST['obtener']!="") ? $_POST['obtener'] : 'NA';
		
		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO estudio (cveProfesor,idEstudio,estudioEn,idArea,disciplinaEstudio,idPais,cveInstitucion,institucionNoCatalogo,fechaInicio,fechaFin,fechaObtencion) 
			VALUES ($clave,$programa,'$en',$zona,'$dis',$coun,$instituto,'$otra','$fecini','$fecfin','$titulo')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}//PUEDE PONERSE UN IF ACERCA DE SI HAY OTRA INSTITUCION
	}
	
	//GESTION
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
		
		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clave."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO gestionacademica (cveProfesor,tipoIndividual,cargo,funcion,organoColegiado,aprobado,resultados,terminada,fechaInicioGestion,fechaTerminoGestion,fechaUltimoInforme,horasSemana) 
			VALUES ($clave,$typ,'$carg','$func','$orgcole',$apro,'$resul',$term,'$feciges','$fectges','$fecuinfo',$hrs)";		
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}
		}
	}

	//LGAC
	if($flag == 'app'){
		$clav = $_POST['clave'];
		$campo = $_POST['cam'];
		$acti = ($_POST['actividad']!="") ? $_POST['actividad'] : 'NA';
		$horas = ($_POST['hor']!="") ? $_POST['hor'] : '0';

		$find="(SELECT COUNT(*) as TOTAL FROM profesor WHERE cveProfesor LIKE '".$clav."')";
		$resultado=mysqli_query($con,$find);
		$res=$resultado->fetch_object();
		if($res->TOTAL>=1){
			$sql = "INSERT INTO lgac (cveProfesor,campo,actividades,horas) 
			VALUES ($clav,'$campo','$acti',$horas)";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}	
		}
	}
	
	//Premios
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
			$sql = "INSERT INTO premio (cveProfesor,cveInstitucion,nombrePremio,motivo,fechaObtencion,otraInstitucionOtorgante) VALUES ($clave,'$institucion','$premio','$motivo','$obtencion','$otrai')";
			if(mysqli_query($con, $sql)){	
				echo "OK";
			}else{
				echo $con->error;
			}	
		}
	}

	//proyectoinvestigacion	
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
			$sql = "INSERT INTO proyectoinvestigacion (cveProfesor,titulo,nombrePatrocinador,fechaInicioProyecto,fechaFinProyecto,patrocinadorInterno,investigadores,alumnos,actividades,miembros,LGACs) 
			VALUES ($clave,'$titulo','$patrocina','$fechainicio','$fechafin','$patrocinte','$investigador','$alumno','$actividad','$miembro','$lgaic')";

			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}	
		}
	}
	//tutoria
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
			$sql = "INSERT INTO tutoria (cveProfesor,cvePlan,nombreEstudiante,fechaInicio,fechaFin,tipo,terminado,idEstudio) 
			VALUES ($clave,'$carre','$alum','$fecinicio','$fecfin','$tip','$terminar','$niv')";
			if(mysqli_query($con, $sql)){	
				echo"OK";
			}else{
				echo $con->error;
			}	
		}
	}
?>
