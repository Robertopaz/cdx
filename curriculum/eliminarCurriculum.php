<?php 
	include 'conex.php';
	$con=Conectarse();
	$flag=$_POST['flag'];
	$parametro=$_POST['p'];
	if ($flag=="Completo") {
				echo $flag;
	}
	elseif ($flag=="Profesor") {
		$sql="SELECT profesor.*,pais.nombrepais, edocivil.estado FROM profesor INNER JOIN pais  on profesor.idPais=pais.idPais INNER JOIN edocivil ON edocivil.idEdoCivil=profesor.idEdoCivil WHERE cveProfesor='".$parametro."' OR nombre like '%".$parametro."%'";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<div class='ficha div12'>".
			"<div class='ficha-nombre div3'>".
				"<h1>".$row['nombre']."</h1>".
				"<img src='img/perfil.jpg' class='imagenficha'>".
			"</div>".
			"<div class='ficha-info div9'>".
			"<h1>Informacion</h1>".
				"<table class='div12'>".
					"<tbody>".
						"<tr>".
							"<th>Clave</th>".
							"<th>Sexo</th>".
							"<th>Curp</th>".
						"</tr>".
						"<tr>".
							"<td id='clave'>".$row['cveProfesor']."</td>".
							"<td id='Sexo'>".$row['genero']."</td>".
							"<td id='Curp'>".$row['curp']."</td>".
						"</tr>".
						"<tr>".
							"<th>Estado civil</th>".
							"<th>Pais de nacimiento</th>".
							"<th>Entidad de nacimiento</th>".
						"</tr>".
						"<tr>".
							"<td id='estado-civil'>".$row['estado']."</td>".
							"<td id='pais-nacimiento'>".$row['nombrepais']."</td>".
							"<td id='pais-nacimiento'>".$row['entidadNacimiento']."</td>".
						"</tr>".
						"<tr>".
							"<th>Fecha de nacimiento</th>".
							"<th>Telefono</th>".
							"<th>Telefono de oficina</th>".
						"</tr>".
						"<tr>".
							"<td id='fecha-nacimiento'>".$row['fechaNac']."</td>".
							"<td id='telefono'>".$row['telefonoProfesor']."</td>".
							"<td id='telefono-oficina'>".$row['telefonoTrabajo']."</td>".
						"</tr>".
						"<tr>".
							"<th>Email</th>".
							"<th>Email adicional</th>".
							"<th>Tiene PROMEP</th>".
						"</tr>".
						"<tr>".
							"<td id='email'>".$row['email']."</td><td id='email-ad'>".$row['emailAdicional']."</td><td id='tiene-promep'>".$row['tienePromep']."</td>".
						"</tr>".
						"<tr>".
							"<th>Fecha de obtencion de PROMEP</th><th>Tiene SNI</th><th>Fecha de obtencion de SNI</th>".
						"</tr>".
						"<tr>".
							"<td id='fecha-promep'>".$row['fechaPromep']."</td><td id='tiene-sni'>".$row['tieneSNI']."</td><td id='fecha-sni'>".$row['fechaSNI']."</td>".
						"</tr>".
					"</tbody>".
				"</table>".
			"</div>".
		"</div>";
}
	}
	elseif ($flag=="Articulos") {
		$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 1;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Articulos</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<h2>Articulo</h2><div class='div12'>
			<table class='div12'>
			<tbody>
				<tr>
					<th>Autor(es)</th>
					<th>Titulo del articulo</th>
					<th>Estado</th>
				</tr>
				<tr>
					<td>".$row['autorProduccion']."</td>
					<td>".$row['tituloProduccion']."</td>
					<td>".$row['Estado']."</td>
				</tr>
				<tr>
					<th>Pais</th>
					<th>Nombre de la revista</th>
					<th>Páginas</th>
				</tr>
				<tr>
					<td>".$row['nombrePais']."</td>
					<td>".$row['nombreRevistaArticulo']."</td>
					<td>".$row['paginaInicio']."-".$row['paginaFin']."</td>
				</tr>
				<tr>
					<th>Editorial</th>
					<th>Volumen</th>
					<th>ISSN</th>
				</tr>
				<tr>
					<td>".$row['editorialProduccion']."</td>
					<td>".$row['volumenProduccion']."</td>
					<td>".$row['ISSN']."</td>
				</tr>
				<tr>
					<th>Fecha de publicacion</th>
					<th>Proposito</th>
					<th></th>
				</tr>
				<tr>
					<td>".$row['fechaPublicacion']."</td>
					<td>".$row['proposito']."</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		</div><hr>
		<div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
		$sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 2;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Articulos Arbitrados</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<h2>Articulo</h2><div class='div12'>
			<table class='div12'>
			<tbody>
				<tr>
					<th>Autor(es)</th>
					<th>Titulo del articulo</th>
					<th>Estado</th>
				</tr>
				<tr>
					<td>".$row['autorProduccion']."</td>
					<td>".$row['tituloProduccion']."</td>
					<td>".$row['Estado']."</td>
				</tr>
				<tr>
					<th>Pais</th>
					<th>Nombre de la revista</th>
					<th>Páginas</th>
				</tr>
				<tr>
					<td>".$row['nombrePais']."</td>
					<td>".$row['nombreRevistaArticulo']."</td>
					<td>".$row['paginaInicio']."-".$row['paginaFin']."</td>
				</tr>
				<tr>
					<th>Editorial</th>
					<th>Volumen</th>
					<th>ISSN</th>
				</tr>
				<tr>
					<td>".$row['editorialProduccion']."</td>
					<td>".$row['volumenProduccion']."</td>
					<td>".$row['ISSN']."</td>
				</tr>
				<tr>
					<th>Fecha de publicacion</th>
					<th colspan='2'>Proposito</th>
				</tr>
				<tr>
					<td>".$row['fechaPublicacion']."</td>
					<td colspan='2'>".$row['proposito']."</td>
				</tr>
			</tbody>
		</table>
		</div><hr> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
		 $sql="SELECT produccionacademica.*, proposito.proposito, estadoactual.Estado, pais.nombrePais  FROM produccionacademica INNER JOIN proposito ON proposito.idProposito=produccionacademica.idProposito INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN pais  on produccionacademica.idPais=pais.idPais WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 3;";
		$resultado=mysqli_query($con,$sql);
		echo "<h2>Articulos en Revista Indexada</h2>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
			<table class='div12'>
			<tbody>
				<tr>
					<th>Autor(es)</th>
					<th>Titulo del articulo</th>
					<th>Estado</th>
				</tr>
				<tr>
					<td>".$row['autorProduccion']."</td>
					<td>".$row['tituloProduccion']."</td>
					<td>".$row['Estado']."</td>
				</tr>
				<tr>
					<th>Pais</th>
					<th>Nombre de la revista</th>
					<th>Páginas</th>
				</tr>
				<tr>
					<td>".$row['nombrePais']."</td>
					<td>".$row['nombreRevistaArticulo']."</td>
					<td>".$row['paginaInicio']."-".$row['paginaFin']."</td>
				</tr>
				<tr>
					<th>Editorial</th>
					<th>Volumen</th>
					<th>ISSN</th>
				</tr>
				<tr>
					<td>".$row['editorialProduccion']."</td>
					<td>".$row['volumenProduccion']."</td>
					<td>".$row['ISSN']."</td>
				</tr>
				<tr>
					<th>Fecha de publicacion</th>
					<th>Proposito</th>
					<th></th>
				</tr>
				<tr>
					<td>".$row['fechaPublicacion']."</td>
					<td>".$row['proposito']."</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		</div><hr> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Asesorias") {
		$sql="SELECT asesoriaconsultoria.*, pais.nombrePais,estadoactual.Estado FROM asesoriaconsultoria INNER JOIN pais  on asesoriaconsultoria.idPais=pais.idPais INNER JOIN estadoactual on estadoactual.idEstado=asesoriaconsultoria.idEstado WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 4;";
		$resultado=mysqli_query($con,$sql);
		echo "<h2>Asesorias</h2>";
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Nombre del estudio o proyecto realizado</th>
							<th>Otros investigadores participantes</th>
							<th>Empresa</th>
						</tr>
						<tr>
							<td>".$row['nombreProyecto']."</td>
							<td>".$row['otrosInvestigadores']."</td>
							<td>".$row['empresaBeneficiaria']."</td>
						</tr>
						<tr>
							<th>Pais</th>
							<th>Fecha de inicio del proyecto</th>
							<th>Estado actual</th>
						</tr>
						<tr>
							<td>".$row['nombrePais']."</td>
							<td>".$row['fechaInicio']."</td>
							<td>".$row['Estado']."</td>
						</tr>
						<tr>
							<th colspan='3'>Alance/objetivo</th>
						</tr>
						<tr>
							<td colspan='3'>".$row['objetivoProyecto']."</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveAsesoriaConsultoria'].")'>Eliminar</button></div>";
		}

	}
	elseif ($flag=="Consultoria") {
		$sql="SELECT asesoriaconsultoria.*,pais.nombrePais, estadoactual.Estado FROM asesoriaconsultoria INNER JOIN pais  on asesoriaconsultoria.idPais=pais.idPais INNER JOIN estadoactual on estadoactual.idEstado=asesoriaconsultoria.idEstado WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 6;";
		$resultado=mysqli_query($con,$sql);
		echo "<h2>Consultorias</h2>";
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Nombre del estudio o proyecto realizado</th>
							<th>Otros investigadores participantes</th>
							<th>Empresa</th>
						</tr>
						<tr>
							<td>".$row['nombreProyecto']."</td>
							<td>".$row['otrosInvestigadores']."</td>
							<td>".$row['empresaBeneficiaria']."</td>
						</tr>
						<tr>
							<th>Pais</th>
							<th>Fecha de inicio del proyecto</th>
							<th>Estado actual</th>
						</tr>
						<tr>
							<td>".$row['nombrePais']."</td>
							<td>".$row['fechaInicio']."</td>
							<td>".$row['Estado']."</td>
						</tr>
						<tr>
							<th colspan='2'>Alance/objetivo</th>
							<th>Beneficio ecónomico para la Institución</th>
						</tr>
						<tr>
							<td colspan='2'>".$row['objetivoProyecto']."</td>
							<td>".$row['beneficioEconomicoInst']."</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveAsesoriaConsultoria'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Datos-laborales") {
		$sql="SELECT datoslaborales.*,institucion.nombreInst FROM datoslaborales INNER JOIN institucion on institucion.cveInstitucion=datoslaborales.cveInstitucion WHERE cveProfesor='".$parametro."' ;";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
		<table class='div12'>
			<tbody>
				<tr>
					<th>Institución</th>
					<th>Nombramiento</th>
					<th>Tipo de contratación</th>
				</tr>
				<tr>
					<td>".$row['nombreInst']."</td>
					<td>".$row['nombramiento']."</td>
					<td>".$row['tipoNombramiento']."</td>
				</tr>
				<tr>
					<th>Dedicacion</th>
					<th>Dependencia de educación</th>
					<th>Unidad academica</th>
				</tr>
				<tr>
					<td>".$row['dedicacion']."</td>
					<td>".$row['dependencia']."</td>
					<td>".$row['unidadAcademica']."</td>
				</tr>
				<tr>
					<th>Fecha de inicio del contrato</th>
					<th>Fecha de fin</th>
					<th>Cronologia</th>
				</tr>
				<tr>
					<td>".$row['inicioContrato']."</td>
					<td>".$row['finContrato']."</td>
					<td>".$row['cronologia']."</td>
				</tr>
			</tbody>
		</table>
			
		</div>
		 <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveDatosLaborales'].")'>Eliminar</button></div>
		";
		}
		
	}
	elseif ($flag=="Direccion-individualizada") {
		$sql="SELECT direccionindividualizada.*, institucion.nombreInst, nivelestudio.estudio, estadoactual.Estado FROM direccionindividualizada INNER JOIN institucion on institucion.cveInstitucion=direccionindividualizada.cveInstitucion INNER JOIN nivelestudio on nivelestudio.idEstudio=direccionindividualizada.idEstudio INNER JOIN estadoactual on estadoactual.idEstado=direccionindividualizada.idEstado WHERE cveProfesor='".$parametro."' ;";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Titulo</th>
							<th>Grado</th>
							<th>Institución</th>
						</tr>
						<tr>
							<td>".$row['titulo']."</td>
							<td>".$row['estudio']."</td>
							<td>".$row['nombreInst']."</td>
						</tr>
						<tr>
							<th>Fecha de inicio</th>
							<th>Fecha de Fin</th>
							<th>Numero de alumnos</th>
						</tr>
						<tr>
							<td>".$row['fechaInicio']."</td>
							<td>".$row['fechaFin']."</td>
							<td>".$row['numAlumnos']."</td>
						</tr>
						<tr>
							<th colspan='3'>Estado</th>
						</tr>
						<tr>
							<td colspan='3'>".$row['Estado']."</td>
						</tr>
					</tbody>
				</table>
			</div>  <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveDireccionInd'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Docencia") {
		$sql="SELECT Docencia.*, curso.cvePlan, curso.nombreCurso, nivelestudio.estudio, institucion.nombreInst FROM Docencia INNER JOIN curso on Docencia.cveCurso=curso.cveCurso INNER JOIN nivelestudio on Docencia.idEstudio=nivelestudio.idEstudio INNER JOIN
		institucion on Docencia.cveInstitucion=institucion.cveInstitucion WHERE cveProfesor='".$parametro."' ;";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Plan</th>
							<th>Nombre del curso</th>
							<th>Nivel Educativo</th>
						</tr>
						<tr>
							<td>".$row['cvePlan']."</td>
							<td>".$row['nombreCurso']."</td>
							<td>".$row['estudio']."</td>
						</tr>
						<tr>
							<th>Horas semanales dedicadas al curso</th>
							<th>Dependencia</th>
							<th>Fecha de inicio</th>
						</tr>
						<tr>
							<td>".$row['horasSemana']."</td>
							<td>".$row['dependencia']."</td>
							<td>".$row['fechaInicio']."</td>
						</tr>
						<tr>
							<th>Numero de alumnos</th>
							<th>Duración de semanas</th>
							<th>Horas de asesoria al mes</th>
						</tr>
						<tr>
							<td>".$row['numAlumnos']."</td>
							<td>".$row['duracionSemanas']."</td>
							<td>".$row['horasAsesoriaMes']."</td>
						</tr>
						<tr>
							<th colspan='3'>Dependencia de educacion superior donde esta registrado el programa educativo</th>
						</tr>
						<tr>
							<td>".$row['nombreInst']."</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveDocencia'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Estudios") {
		$sql="SELECT estudio.*, nivelestudio.estudio,area.area, institucion.nombreInst, pais.nombrePais from estudio INNER JOIN nivelestudio on nivelestudio.idEstudio=estudio.idEstudio INNER JOIN area on estudio.idArea=area.idArea INNER JOIN institucion on institucion.cveInstitucion=estudio.cveInstitucion INNER JOIN pais on pais.idPais=estudio.idPais WHERE cveProfesor=".$parametro.";";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<hr>".
		"<h1>Estudios</h1>".
		"<div class='div12'>".
			"<table class='div12'>".
					"<tbody>".
						"<tr>".
							"<th>Nivel</th>".
							"<th>Estudios</th>".
							"<th>Area</th>".
						"</tr>".
						"<tr>".
							"<td id='Nivel-estudios'>".$row['estudio']."</td>".
							"<td id='Estudios-estudios'>".$row['estudioEn']."</td>".
							"<td id='Area-estudios'>".$row['area']."</td>".
						"</tr>".
						"<tr>".
							"<th>Diciplina</th>".
							"<th>Pais</th>".
							"<th>Institución Otorgante</th>".
						"</tr>".
						"<tr>".
							"<td id='Diciplina-estudios'>".$row['disciplinaEstudio']."</td>".
							"<td id='Pais-estudios'>".$row['nombrePais']."</td>".
							"<td id='Institucion-estudios'>".$row['nombreInst']."</td>".
						"</tr>".
						"<tr>".
							"<th>Fecha de inicio</th>".
							"<th>Fecha de Fin</th>".
							"<th>Fecha de obtencion del Titulo o Grado</th>".
						"</tr>".
						"<tr>".
							"<td id='Fecha-inicio-estudios'>".$row['fechaInicio']."</td>".
							"<td id='Fecha-fin-estudios'>".$row['fechaFin']."</td>".
							"<td id='Fecha-obtencion-estudios'>".$row['fechaObtencion']."</td>".
						"</tr>".
					"</tbody>".
			"</table>".	
		"</div>
		<div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveEstudio'].")'>Eliminar</button></div>";		
		}
	}
	elseif ($flag=="Gestion-academica") {
		$sql="SELECT * FROM gestionacademica WHERE cveProfesor='".$parametro."';";
		$resultado=mysqli_query($con,$sql);
		echo "<h2>Articulos Arbitrados</h2>";
		while ($row = mysqli_fetch_array($resultado)) {
			if ($row['terminada']==1) {
				$terminada="Si";
			}
			else{
				$terminada="No";
			}
			if ($row['aprobado']==1) {
				$aprobado="Si";
			}
			else{
				$aprobado="No";
			}
			if ($row['aprobado']==1) {
				$aprobado="Si";
			}
			else{
				$aprobado="No";
			}
			if ($row['tipoIndividual']==1) {
				$individual="Individual";
			}
			else{
				$individual="Grupal";
			}
		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Tipo</th>
							<th>Cargo</th>
							<th>Función</th>
						</tr>
						<tr>
							<td>".$individual."</td>
							<td>".$row['cargo']."</td>
							<td>".$row['funcion']."</td>
						</tr>
						<tr>
							<th>Órgano colegiado</th>
							<th>Aprobado</th>
							<th>Resultados</th>
						</tr>
						<tr>
							<td>".$row['organoColegiado']."</td>
							<td>".$aprobado."</td>
							<td></td>
						</tr>
						<tr>
							<th>Terminada</th>
							<th>Fecha inicio de Gestion</th>
							<th>Fecha termino de Gestion</th>
						</tr>
						<tr>
							<td>".$terminada."</td>
							<td>".$row['fechaInicioGestion']."</td>
							<td>".$row['fechaTerminoGestion']."</td>
						</tr>
						<tr>
							<th colspan='2'>Fecha ultimo informe</th>
							<th>Horas a la semana</th>
						</tr>
						<tr>
							<td colspan='2'>".$row['fechaUltimoInforme']."</td>
							<td>".$row['horasSemana']."</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveGestionAcademica'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="LGAC") {
		$sql="SELECT * FROM lgac WHERE cveProfesor='".$parametro."';";
		$resultado=mysqli_query($con,$sql);
		echo "<h2>Lineas de Generacion o Aplicacion Inovadora de Conocimiento</h2>";
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<h3>LGAC</h3>
		<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Campo</th>
							<th>Actividades</th>
							<th>Horas</th>
						</tr>
						<tr>
							<td>".$row['campo']."</td>
							<td>".$row['actividades']."</td>
							<td>".$row['horas']."</td>
						</tr>
					</tbody>
				</table>
			</div><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveGAC'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Libros") {
		$sql="SELECT produccionacademica.*, pais.nombrePais,estadoactual.Estado FROM produccionacademica INNER JOIN pais on pais.idPais=produccionacademica.idPais INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 5;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Capitulos de Libros</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
			<h3>Capitulo de Libro</h3>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Autor(es) del libro</th>
							<th>Titulo del Libro</th>
							<th>Estado del Libro</th>
						</tr>
						<tr>
							<td>".$row['autorProduccion']."</td>
							<td>".$row['tituloProduccion']."</td>
							<td>".$row['Estado']."</td>
						</tr>
						<tr>							
							<th>Editorial</th>
							<th>Edicion</th>
							<th>Fecha de publicación</th>
						</tr>
						<tr>
							<td>".$row['editorialProduccion']."</td>
							<td>".$row['edicionProduccion']."</td>
							<td>".$row['fechaPublicacion']."</td>
						</tr>
						<tr>							
							<th>Pais</th>
							<th>Tiraje</th>
							<th>ISBN</th>
						</tr>
						<tr>
							<td>".$row['nombrePais']."</td>
							<td>".$row['tiraje']."</td>
							<td>".$row['ISBN']."</td>
						</tr>
						<tr>							
							<th colspan='3'>Propósito</th>
						</tr>
						<tr>
							<td colspan='3'>".$row['descripcionProduccion']."</td>
						</tr>
					</tbody>
				</table>
				<h3>datos de capitulo</h3>
				<table class='div12'>
					<tbody>
						<tr>
							<th colspan='2'>Titulo del capitulo</th>
							<th>Paginas</th>
						</tr>
						<tr>
							<td colspan='2'>".$row['tituloCapitulo']."</td>
							<td>".$row['paginaInicio']."-".$row['paginaFin']."</td>
						</tr>
					</tbody>
				</table>
			</div><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveTipoProduccion'].")'>Eliminar</button></div>";
		}
		$sql="SELECT produccionacademica.*, pais.nombrePais,estadoactual.Estado, proposito.proposito FROM produccionacademica INNER JOIN pais on pais.idPais=produccionacademica.idPais INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN proposito on proposito.idProposito=produccionacademica.idProposito WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 7;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Libros</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
			<h3>Capitulo de Libro</h3>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Autor(es) del libro</th>
							<th>Titulo del Libro</th>
							<th>Tipo de participacion</th>
						</tr>
						<tr>
							<td>".$row['autorProduccion']."</td>
							<td>".$row['tituloProduccion']."</td>
							<td>".$row['tipoParticipacion']."</td>
						</tr>
						<tr>							
							<th>Estado</th>
							<th>Editorial</th>
							<th>Edicion</th>
						</tr>
						<tr>
							<td>".$row['Estado']."</td>
							<td>".$row['editorialProduccion']."</td>
							<td>".$row['edicionProduccion']."</td>
						</tr>
						<tr>							
							<th>Paginas</th>
							<th>Tiraje</th>
							<th>ISBN</th>
						</tr>
						<tr>
							<td>".$row['numeroPaginas']."</td>
							<td>".$row['tiraje']."</td>
							<td>".$row['ISBN']."</td>
						</tr>
						<tr>							
							<th>Pais</th>
							<th>Fecha de publicación</th>
							<th>Proposito</th>
						</tr>
						<tr>
							<td>".$row['nombrePais']."</td>
							<td>".$row['fechaPublicacion']."</td>
							<td>".$row['proposito']."</td>
						</tr>
					</tbody>
				</table><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveTipoProduccion'].")'>Eliminar</button></div>";

		}
		
	}
	elseif ($flag=="Material-apoyo") {
		$sql="SELECT produccionacademica.*,pais.nombrePais,institucion.nombreInst,proposito.proposito FROM produccionacademica INNER JOIN pais on pais.idPais=produccionacademica.idPais INNER JOIN institucion on produccionacademica.cveInstitucion=institucion.cveInstitucion inner JOIN proposito on produccionacademica.idProposito=proposito.idProposito WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 8;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Materiales de apoyo</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<h3>Material de apoyo</h3>
			<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th colspan='3'>Titulo</th>
						</tr>
						<tr>
							<td>".$row['tituloProduccion']."</td>
						</tr>
						<tr>
							<th>Autor(es)</th>
							<th>Institución</th>
							<th>Pais</th>
						</tr>
						<tr>
							<td>".$row['autorProduccion']."</td>
							<td>".$row['nombreInst']."</td>
							<td>".$row['nombrePais']."</td>
						</tr>
						<tr>
							<th>Fecha publicacion</th>
							<th>Proposito</th>
							<th>Descripcion</th>
						</tr>
						<tr>
							<td>".$row['fechaPublicacion']."</td>
							<td>".$row['proposito']."</td>
							<td>".$row['descripcionProduccion']."</td>
						</tr>
					</tbody>
				</table>
			</div><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Memorias") {
		$sql="SELECT produccionacademica.*,pais.nombrePais, estadoactual.Estado, proposito.proposito FROM produccionacademica INNER JOIN pais on pais.idPais=produccionacademica.idPais INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN proposito on proposito.idProposito=produccionacademica.idProposito WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 9;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Memorias</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
					<h2>Memoria</h2>
					<table class='div12'>
						<tbody>
							<tr>
								<th>Autor(es)</th>
								<th>Titulo de la presentacion</th>
								<th>Nombre del congreso donde se presentó</th>
							</tr>
							<tr>
								<td>".$row['autorProduccion']."</td>
								<td>".$row['tituloProduccion']."</td>
								<td>".$row['nombreCongreso']."</td>
							</tr>
							<tr>
								<th>Estado de la producción</th>
								<th>Pais</th>
								<th>Estado</th>
							</tr>
							<tr>
								<td>".$row['Estado']."</td>
								<td>".$row['nombrePais']."</td>
								<td>".$row['estadoProduccion']."</td>
							</tr>
							<tr>
								<th>Ciudad</th>
								<th>Paginas</th>
								<th>Fecha de publicación</th>
							</tr>
							<tr>
								<td>".$row['ciudadProduccion']."</td>
								<td>".$row['numeroPaginas']."</td>
								<td>".$row['fechaPublicacion']."</td>
							</tr>
							<tr>
								<th colspan='3'>Proposito</th>
							</tr>
							<tr>
								<td colspan='3'>".$row['proposito']."</td>
							</tr>

						</tbody>
					</table>
				</div> <hr> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
		$sql="SELECT * FROM produccionacademica WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 10;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Memorias en extenso</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
					<h2>Memoria</h2>
					<table class='div12'>
						<tbody>
							<tr>
								<th>Autor(es)</th>
								<th>Titulo de la presentacion</th>
								<th>Nombre del congreso donde se presentó</th>
							</tr>
							<tr>
								<td>".$row['autorProduccion']."</td>
								<td>".$row['tituloProduccion']."</td>
								<td>".$row['nombreCongreso']."</td>
							</tr>
							<tr>
								<th>Estado de la producción</th>
								<th>Pais</th>
								<th>Estado</th>
							</tr>
							<tr>
								<td>".$row['estadoProduccion']."</td>
								<td>".$row['idPais']."</td>
								<td>".$row['idEstado']."</td>
							</tr>
							<tr>
								<th>Ciudad</th>
								<th>Paginas</th>
								<th>Fecha de publicación</th>
							</tr>
							<tr>
								<td>".$row['ciudadProduccion']."</td>
								<td>".$row['numeroPaginas']."</td>
								<td>".$row['fechaPublicacion']."</td>
							</tr>
							<tr>
								<th colspan='3'>Proposito</th>
							</tr>
							<tr>
								<td colspan='3'>".$row['idProposito']."</td>
							</tr>

						</tbody>
					</table>
				</div> <hr><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
		
	}
	elseif ($flag=="Patente") {
		$sql="SELECT produccionacademica.*,estadoactual.Estado FROM produccionacademica INNER JOIN estadoactual on estadoactual.idEstado=produccionacademica.idEstado INNER JOIN  proposito on produccionacademica.idProposito=proposito.idProposito WHERE cveProfesor='".$parametro."' And cveTipoProduccion = 11;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Patentes</h1>";
		while ($row = mysqli_fetch_array($resultado)) {

		echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Autor</th>
							<th>Titulo</th>
							<th>Proposito</th>
						</tr>
						<tr>
							<td>".$row['autorProduccion']."</td>
							<td>".$row['tituloProduccion']."</td>
							<td>".$row['idProposito']."</td>
						</tr>
						<tr>
							<th>Clasificacion Internacional de patentes</th>
							<th>Uso</th>
							<th>Estado</th>
						</tr>
						<tr>
							<td>".$row['clasifPatente']."</td>
							<td>".$row['usoPatente']."</td>
							<td>".$row['Estado']."</td>
						</tr>
						<tr>
							<th>Pais</th>
							<th>Numero de registro</th>
							<th>Usuario</th>
						</tr>
						<tr>
							<td>".$row['idPais']."</td>
							<td>".$row['numeroRegistroPatente']."</td>
							<td>".$row['usuarioPatente']."</td>
						</tr>
						<tr>
							<th>Fecha de publicacion</th>
							<th colspan='2'>Descripcion</th>
						</tr>
						<tr>
							<td>".$row['fechaPublicacion']."</td>
							<td>".$row['descripcionProduccion']."</td>
						</tr>
					</tbody>
				</table>
			</div><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProduccionAcademica'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Premio") {
		$sql="SELECT * FROM premio WHERE cveProfesor='".$parametro."' ;";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
			echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Institución Otorgante</th>
							<th>Nombre</th>
							<th>Motivo</th>
						</tr>
						<tr>
							<td>".$row['cveInstitucion']."</td>
							<td>".$row['nombrePremio']."</td>
							<td>".$row['motivo']."</td>
						</tr>
						<tr class>
							<th colspan='3'>Fecha de obtencion</th>
						</tr>
						<tr>
							<td>".$row['fechaObtencion']."</td>
						</tr>
					</tbody>
				</table>
			</div><hr><div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cvePremio'].")'>Eliminar</button></div>";
		}
		
	}
	elseif ($flag=="Proyecto-investigacion") {
		$sql="SELECT * FROM proyectoinvestigacion WHERE cveProfesor='".$parametro."' ;";
		$resultado=mysqli_query($con,$sql);
		echo "<h1>Investigaciones</h1>";
		while ($row = mysqli_fetch_array($resultado)) {
		echo "<h3>Investigacion</h3>
			<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th colspan='2'>Titulo</th>
							<th colspan='2'>Nombre del patocinador</th>
						</tr>
						<tr>
							<td colspan='2'>".$row['titulo']."</td>
							<td colspan='2'>".$row['nombrePatrocinador']."</td>
						</tr>
						<tr>
							<th>Fecha de inicio del proyecto</th>
							<th>Fecha de fin del proyecto</th>
							<th>Patrocinador</th>
							<th>Investigadores</th>
						</tr>
						<tr>
							<td>".$row['fechaInicioProyecto']."</td>
							<td>".$row['fechaFinProyecto']."</td>
							<td>".$row['patrocinadorInterno']."</td>
							<td>".$row['investigadores']."</td>
						</tr>
							<th>Actividades</th>
							<th>Alumnos</th>
							<th>Miembros</th>
							<th>Lineas de generacion o aplicacion del conocimiento</th>
						</tr>
						<tr>
							<td>".$row['actividades']."</td>
							<td>".$row['alumnos']."</td>
							<td>".$row['miembros']."</td>
							<td>".$row['LGACs']."</td>
						</tr>
						
						<tr></tr>
					</tbody>
				</table>
			</div> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveProyectoInvestigacion'].")'>Eliminar</button></div>";
		}
	}
	elseif ($flag=="Tutoria") {
		$sql="SELECT tutoria.*, nivelestudio.estudio FROM tutoria INNER JOIN nivelestudio on nivelestudio.idEstudio=tutoria.idEstudio WHERE cveProfesor='".$parametro."';";
		$resultado=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($resultado)) {
			if ($row['terminado']==1) {
				$terminado="Si";
			}
			else{
				$terminado="No";
			}
		
			echo "<div class='div12'>
				<table class='div12'>
					<tbody>
						<tr>
							<th>Nombre del Estudiante</th>
							<th>Nivel del Estudia</th>
							<th>Plan</th>
						</tr>
						<tr>
							<td>".$row['nombreEstudiante']."</td>
							<td>".$row['estudio']."</td>
							<td>".$row['cvePlan']."</td>
						</tr>
							<th>Fecha de inicio</th>
							<th>Fecha de Fin</th>
							<th>Tipo</th>
						</tr>
						<tr>
							<td>".$row['fechaInicio']."</td>
							<td>".$row['fechaFin']."</td>
							<td>".$row['tipo']."</td>
						</tr>
							<th colspan='3'>Terminada</th>
						</tr>
						<tr>
							<td colspan='3'>".$terminado."</td>
						</tr>
						
					</tbody>
				</table>
			</div> <div class='div12'><div class='div9'></div><button class='div3 menta' onclick='eliminar(".$row['cveTutoria'].")'>Eliminar</button></div>";
		}
	}else{
		echo "error";
	}

 ?>