<?php
 
require ('../conex.php');
$link = Conectarse();

/*$link=mysql_connect("localhost","root","");
mysql_select_db("curriculum",$link);
$dbname = "curriculum";*/

date_default_timezone_set('UTC');
    
    $mes = date("F");
    $dia = date("j");
    $anio = date("Y");
    
    if($mes == 'January') $mes = 'Enero';
    else if($mes == 'February') $mes = 'Febrero';
    else if($mes == 'March') $mes = 'Marzo';
    else if($mes == 'April') $mes = 'Abril';
    else if($mes == 'May') $mes = 'Mayo';
    else if($mes == 'June') $mes = 'Junio';
    else if($mes == 'July') $mes = 'Julio';
    else if($mes == 'August') $mes = 'Agosto';
    else if($mes == 'September') $mes = 'Septiembre';
    else if($mes == 'October') $mes = 'Octubre';
    else if($mes == 'November') $mes = 'Noviembre';
    else if($mes == 'December') $mes = 'Diciembre';
    
 $genero = "Femenino";
 //$cveProfesor = 1;
 $cveProfesor = $_GET['claveProfesor'];
 
 //Inician queries
 
 //Profesor<-
    //$selectProfesor = "SELECT * FROM profesor WHERE cveProfesor = $cveProfesor LIMIT 1";
    $selectProfesor = "SELECT * FROM profesor p, edoCivil e, pais c WHERE cveProfesor = $cveProfesor AND p.idEdoCivil = e.idEdoCivil AND ".
    "p.idPais = c.idPais LIMIT 1";
    $resProf = mysqli_query($link, $selectProfesor);
    
  //Datos laborales<-
    $selectLaboral = "SELECT * FROM datoslaborales a, institucion i WHERE cveProfesor = $cveProfesor AND a.cveInstitucion = i.cveInstitucion";
    $resLaboral = mysqli_query($link, $selectLaboral);
    $numLaboral = mysqli_num_rows($resLaboral);

  //Dirección individualizada**
    $selectDireccion = "SELECT * FROM direccionIndividualizada d, institucion i, EstadoActual e, nivelEstudio n WHERE cveProfesor = $cveProfesor AND ".
    "d.cveInstitucion = i.cveInstitucion AND e.idEstado = d.idEstado AND n.idEstudio = d.idEstudio;";
    /*$selectDireccion = "SELECT d.titulo, d.grado, i.nombreInst, d.fechaInicio, d.fechaFin, d.numAlumnos, d.estado, d.paraCurriculum FROM ".
    "direccionindividualizada d, institucion i WHERE cveProfesor = $cveProfesor AND d.cveInstitucion = i.cveInstitucion";*/
    $resDireccion = mysqli_query($link,$selectDireccion);
    $numDireccion = mysqli_num_rows($resDireccion);

  //Docencia<-
    $selectDocencia = "SELECT a.dependencia, a.fechaInicio, a.numAlumnos, a.duracionSemanas, a.horasAsesoriaMes, a.horasSemana, i.nombreInst,
    e.estudio, c.nombreCurso FROM docencia a, institucion i, curso c, nivelEstudio e WHERE cveProfesor = $cveProfesor AND a.cveInstitucion = i.cveInstitucion
    AND a.cveCurso = c.cveCurso AND a.idEstudio = e.idEstudio";
    $resDocencia = mysqli_query($link, $selectDocencia);
    $numDocencia = mysqli_num_rows($resDocencia);

  //Estudios<-
    $selectEstudios = "SELECT e.estudioEn, e.institucionNoCatalogo, e.disciplinaEstudio, e.fechaInicio, 
    e.fechaFin, e.fechaObtencion, n.estudio, a.area, i.nombreInst, i.cveInstitucion, p.nombrePais FROM 
    estudio e, pais p, institucion i, Area a, nivelEstudio n  WHERE cveProfesor = $cveProfesor 
    AND e.idPais = p.idPais AND e.cveInstitucion = i.cveInstitucion 
    AND e.idEstudio = n.idEstudio AND a.idArea = e.idArea";
    $resEstudios = mysqli_query($link, $selectEstudios);
    $numEstudios = mysqli_num_rows($resEstudios);
    
  //Gestión Académica<-
    $selectGestion = "SELECT * FROM gestionacademica WHERE cveProfesor = $cveProfesor";
    $resGestion = mysqli_query($link, $selectGestion);
    $numGestion = mysqli_num_rows($resGestion);
    
  //LGAC<-
    $selectLGAC = "SELECT * FROM LGAC WHERE cveProfesor = $cveProfesor";
    $resLGAC = mysqli_query($link, $selectLGAC);
    $numLGAC = mysqli_num_rows($resLGAC);
    
  //Premios<-
    $selectPremios = "SELECT * FROM premio p, institucion i WHERE cveProfesor = $cveProfesor AND p.cveInstitucion = i.cveInstitucion";
    $resPremios = mysqli_query($link, $selectPremios);
    $numPremios = mysqli_num_rows($resPremios);
    
  //Producción Académica**
  
    //$selectAsCon = "SELECT * FROM asesoriaConsultoria WHERE cveProfesor = $cveProfesor";
    $selectAsCon = "SELECT * FROM asesoriaConsultoria a, pais p, EstadoActual e WHERE cveProfesor = $cveProfesor AND a.idPais = p.idPais ".
    "AND e.idEstado = a.idEstado";
    $resAsCon = mysqli_query($link, $selectAsCon);
    $numAsCon = mysqli_num_rows($resAsCon);

    $selectProduccion = "SELECT * FROM produccionAcademica a, pais c, proposito p, EstadoActual e WHERE cveProfesor = $cveProfesor AND ".
    "a.idPais = c.idPais AND p.idProposito = a.idProposito AND a.idEstado = e.idEstado";
    $resProduccion = mysqli_query($link, $selectProduccion);
    $numProduccion = mysqli_num_rows($resProduccion);
    
    $selectMaterial = "SELECT * FROM produccionAcademica a, pais c, proposito p, EstadoActual e, institucion i WHERE cveProfesor = $cveProfesor AND ".
    "a.idPais = c.idPais AND p.idProposito = a.idProposito AND a.idEstado = e.idEstado AND a.cveInstitucion = i.cveInstitucion";
    $resMaterial = mysqli_query($link, $selectMaterial);
    $numMaterial = mysqli_num_rows($resMaterial);
  
  //Proyectos de investigación
    $selectProyecto = "SELECT * FROM proyectoInvestigacion WHERE cveProfesor = $cveProfesor";
    $resProyecto = mysqli_query($link, $selectProyecto);
    $numProyecto = mysqli_num_rows($resProyecto);
  
  //Tutorías<-
    $selectTutoria = "SELECT t.nombreEstudiante, t.fechaInicio, t.fechaFin, t.tipo, t.terminado, p.nombrePlan, e.estudio  FROM 
    tutoria t, plan p, nivelEstudio e WHERE cveProfesor = $cveProfesor AND t.cvePlan = p.cvePlan AND e.idEstudio = t.idEstudio";
    $resTutoria = mysqli_query($link, $selectTutoria);
    $numTutoria = mysqli_num_rows($resTutoria);
    
  require('fpdf.php');
  require('PDF_MC_Table.php');
  class PDF extends PDF_MC_Table
  {
    function Footer()
    {
        $this->SetY(-20);
        $this->SetFont('Helvetica', 'I', 12);
        $this->Write(5,"\n\n");
        $this->Cell(170,5, $this->PageNo(), 0, 1, 'R');
    }
  }

 
   $pdf = new PDF();
   $pdf->AddPage();
   $pdf->setMargins(30,30,30,30);

    $pdf->Image ('../css/images/escudouaq1.jpg',10,8,30);
    $pdf->Image ('../css/images/escudoinfo1.jpg',165,8,30);
    $pdf->SetFont('Helvetica','',11);
    $pdf->Ln(10);
    $pdf->Cell(95,5, $dia." de ".$mes." de ".$anio,'0',1,'R');
    $pdf->SetFont('Helvetica','B',16);
    $pdf->SetX(70);
    $pdf->Cell(60,10,utf8_decode("Currículum Profesor"),0,1,'R');

   $pdf->Ln(20);
   $pdf->SetFont('Helvetica', 'B', 12);
   $pdf->SetWidths(array(75, 75));
   $pdf->SetAligns(array('L', 'C'));
   $pdf->Row(array("Sección", "Número de registros"));
   $pdf->SetFont('Helvetica','',11);
   if($numLaboral>0)$pdf->Row(array("Datos Laborales", $numLaboral));
   if($numDireccion>0)$pdf->Row(array("Dirección individualizada", $numDireccion));
   if($numDocencia>0)$pdf->Row(array("Docencia", $numDocencia));
   if($numEstudios>0)$pdf->Row(array("Estudios realizados", $numEstudios));
   if($numGestion>0)$pdf->Row(array("Gestión académica", $numGestion));
   if($numLGAC>0)$pdf->Row(array("Líneas de generación o aplicación innovadora del conocimientos (LGACs)", $numLGAC));
   if($numPremios>0) $pdf->Row(array("Premios o Distinciones", $numPremios));
   if($numProduccion>0)$pdf->Row(array("Producción Académica", ($numProduccion+$numAsCon)));
   if($numProyecto>0)$pdf->Row(array("Proyectos de investigación", $numProyecto));
   if($numTutoria>0)$pdf->Row(array("Tutorías", $numTutoria));
   
   //Datos profesor 
   $pdf->Ln(16);
   $pdf->SetFont('Helvetica', 'B', 12);
   $pdf->SetFillColor(55,88,115);
   $pdf->SetTextColor(255,255,255);
   $pdf->Cell(150,5,utf8_decode("Identificación del Profesor"),0,1,'C',1);
   $pdf->Ln(5);
   $pdf->SetFont('Helvetica','',11);
   $pdf->SetWidths(array(80, 80));
   $pdf->SetAligns(array('L', 'L'));
   $pdf->SetVisible(1,1); 

    $array = mysqli_fetch_array($resProf);
    $pdf->SetTextColor(0,0,0);
    $pdf->Row(array("Nombre", utf8_encode($array['nombre'])));
    if($array['genero']==1)$genero="Masculino";
    $pdf->Row(array("Género", $genero));
    $pdf->Row(array("CURP", $array['curp']));
    $pdf->Row(array("Estado Civil", $array['estado']));
    $pdf->Row(array("País de nacimiento", utf8_encode($array['nombrePais'])));
    $pdf->Row(array("Fecha de Nacimiento", $array['fechaNac']));
    $pdf->Row(array("Teléfono", $array['telefonoProfesor']));
    $pdf->Row(array("E-mail", $array['email']));
    $pdf->Write(5,"\n\n\n");
   
     
    //Datos laborales
    
    if($numLaboral>0){
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->SetFillColor(55,88,115);
        $pdf->SetTextColor(255,255,255);
        $pdf->Cell(150,5,utf8_decode("Datos Laborales"),0,1,'C',1);
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica','',11);
        $pdf->SetWidths(array(80, 80));
     
         $pdf->SetTextColor(0,0,0);
         while($array = mysqli_fetch_array($resLaboral)){
             $pdf->Row(array("Nombramiento", utf8_encode($array['nombramiento'])));
             $pdf->Row(array("Tipo de nombramiento", utf8_encode($array['tipoNombramiento'])));
             $pdf->Row(array("Dedicación", utf8_encode($array['dedicacion'])));
             $pdf->Row(array("Institución de Educación Superior", utf8_encode($array['nombreInst'])));
             $pdf->Row(array("Dependencia de Educación Superior", utf8_encode($array['dependencia'])));
             $pdf->Row(array("Unidad Académica", utf8_encode($array['unidadAcademica'])));
             $pdf->Row(array("Inicio del contrato", $array['inicioContrato']));
             $pdf->Row(array("Fin del contrato", $array['finContrato']));
             $pdf->Row(array("Cronologia", utf8_encode($array['cronologia'])));
             $pdf->Write(5,"\n\n\n");
         }
    }
    
    //Dirección individualizada
    
    if($numDireccion>0){
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->SetFillColor(55,88,115);
        $pdf->Cell(150,5,utf8_decode("Direccion Individualizada"),0,1,'C',1);
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica','',11);
        $pdf->SetWidths(array(80, 80));
     
         
         while($array = mysqli_fetch_array($resDireccion)){
             $paraCurriculum = "No";
             $pdf->Row(array("Título de la tesis o proyecto individual", utf8_encode($array['titulo'])));
             $pdf->Row(array("Grado", utf8_encode($array['estudio'])));
             $pdf->Row(array("Fecha de inicio", $array['fechaInicio']));
             $pdf->Row(array("Fecha de término", $array['fechaFin']));
             $pdf->Row(array("Número de alumnos", $array['numAlumnos']));
             $pdf->Row(array("Estado de la dirección individualizada", utf8_encode(ucwords($array['Estado']))));
             $pdf->Row(array("IES en la que se realiza la dirección individualizada", utf8_encode($array['nombreInst'])));
             
             if($array['paraCurriculum'] == 1) $paraCurriculum = "Sí";
             $pdf->Row(array("Para considerar en el currículum de cuerpo académico", $paraCurriculum));
             $pdf->Write(5,"\n\n\n");
             
         }
    }
    
    //Docencia
   
    if($numDocencia>0){
      
      $pdf->Ln(10);
      $pdf->SetFont('Helvetica', 'B', 12);
      $pdf->SetFillColor(55,88,115);
      $pdf->SetTextColor(255,255,255);
      $pdf->Cell(150,5,utf8_decode("Docencia"),0,1,'C',1);
      $pdf->Ln(5);
      $pdf->SetFont('Helvetica','',11);
      $pdf->SetWidths(array(80, 80));
      $pdf->SetTextColor(0,0,0);
   
       
       while($array = mysqli_fetch_array($resDocencia)){
           $pdf->Row(array("Nombre del Curso", utf8_encode($array['nombreCurso'])));
           $pdf->Row(array("Institución de Educación Superior (IES)", utf8_encode($array['nombreInst'])));
           $pdf->Row(array("Dependencia de Educación Superios (IES)", utf8_encode($array['dependencia'])));
           $pdf->Row(array("Nivel Educativo", utf8_encode($array['estudio'])));
           $pdf->Row(array("Fecha de inicio", $array['fechaInicio']));
           $pdf->Row(array("Número de alumnos", $array['numAlumnos']));
           $pdf->Row(array("Duración en semanas", $array['duracionSemanas']));
           $pdf->Row(array("Horas de asesoría al mes", $array['horasAsesoriaMes']));
           $pdf->Row(array("Horas semanales dedicadas al curso", $array['horasSemana']));
           
   
           $pdf->Write(5,"\n\n\n");
           
       }
    }
        
    //Estudios realizados
    
    if($numEstudios>0){
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->SetFillColor(55,88,115);
        $pdf->SetTextColor(255,255,255);
        $pdf->Cell(150,5,utf8_decode("Estudios Realizados"),0,1,'C',1);
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica','',11);
        $pdf->SetWidths(array(80, 80));
        $pdf->SetTextColor(0,0,0);
         while($array = mysqli_fetch_array($resEstudios)){
             $pdf->Row(array("Nivel de estudios", utf8_encode($array['estudio'])));
             $pdf->Row(array("Estudios en", utf8_encode($array['estudioEn'])));
             $pdf->Row(array("Área ---> disciplina", utf8_encode($array['area']) . " ---> " . utf8_encode($array['disciplinaEstudio'])));
             
             if($array['cveInstitucion']==134) $pdf->Row(array("Institución Otorgante", utf8_encode($array['nombreInst'])));
             else $pdf->Row(array("Institución Otorgante", utf8_encode($array['institucionNoCatalogo'])));
             
             $pdf->Row(array("País", utf8_encode($array['nombrePais'])));
             
            /* $pdf->Ln(10);
             $pdf->SetFont('Helvetica','',11);
             $pdf->SetWidths(array(50, 50, 50));
             $pdf->Row(array("Fecha de inicio de estudios", "Fecha de fin de estudios", "Fecha de obtención de título o grado"));
             $pdf->Row(array($array['fechaInicio'], $array['fechaFin'], $array['fechaObtencion']));*/
             $pdf->Row(array("Fecha de inicio de estudios", $array['fechaInicio']));
             $pdf->Row(array("Fecha de fin de estudios", $array['fechaFin']));
             $pdf->Row(array("Fecha de obtención de título o grado", $array['fechaObtencion']));
             $pdf->Write(5,"\n\n\n");
             
         }
    }
    
   //Gestión Académica
   
   if($numGestion>0){
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFillColor(55,88,115);
        $pdf->Cell(150,5,utf8_decode("Gestión Académica"),0,1,'C',1);
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica','',11);
        $pdf->SetWidths(array(80, 80));
     $pdf->SetTextColor(0,0,0);
         
         while($array = mysqli_fetch_array($resGestion)){
             $aprobado = "No";
             $terminada ="No";
             $tipoGestion = "Colectiva";
             
             if($array['tipoIndividual']== 1) $tipoGestion = "Individual";
             $pdf->Row(array("Tipo de gestión", $tipoGestion));
             $pdf->Row(array("Cargo dentro de la comisión o cuerpo colegiado", utf8_encode($array['cargo'])));
             $pdf->Row(array("Función encomendada", $array['funcion']));
             $pdf->Row(array("Órgano colegiado al que fue presentado", $array['organoColegiado']));
             if($array['aprobado']==1) $aprobado = "Sí";
             $pdf->Row(array("Aprobado", $aprobado));
             $pdf->Row(array("Resultados obtenidos", utf8_encode($array['resultados'])));
             if($array['terminada']==1) $terminada = "Sí";
             $pdf->Row(array("Terminada", $terminada));
             $pdf->Row(array("Fecha de inicio", $array['fechaInicioGestion']));
             $pdf->Row(array("Fecha de término", $array['fechaTerminoGestion']));
             $pdf->Row(array("Fecha del último informe presentado", $array['fechaUltimoInforme']));
             $pdf->Row(array("Horas semanales dedicadas a la gestión", $array['horasSemana']));
             $pdf->Write(5,"\n\n\n");
             
         }
    }
   
   //LGACs
   
  if($numLGAC>0){ 
      $pdf->Ln(10);
      $pdf->SetFont('Helvetica', 'B', 12);
      $pdf->SetTextColor(255,255,255);
      $pdf->SetFillColor(55,88,115);
      $pdf->Cell(150,5,utf8_decode("Línea de generación y aplicación del conocimiento (LGAC)"),0,1,'C',1);
      $pdf->Ln(5);
      $pdf->SetFont('Helvetica','',11);
      $pdf->SetWidths(array(80, 80));
      $pdf->SetTextColor(0,0,0);
       
       while($array = mysqli_fetch_array($resLGAC)){        
           $pdf->Row(array("Línea", utf8_encode($array['campo'])));
           $pdf->Row(array("Actividades que realiza", utf8_encode($array['actividades'])));
           $pdf->Row(array("Horas a la semana dedicadas a esta LGAC", $array['horas']));
           $pdf->Write(5,"\n\n\n");
           
       }
  }
    
    //Premios y distinciones
    if($numPremios>0){
        $pdf->Ln(10);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFillColor(55,88,115);
        $pdf->Cell(150,5,utf8_decode("Premios y distinciones"),0,1,'C',1);
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica','',11);
        $pdf->SetWidths(array(80, 80));
        $pdf->SetTextColor(0,0,0);
         while($array = mysqli_fetch_array($resPremios)){
             $pdf->Row(array("Nombre del premio", $array['nombrePremio']));
             $pdf->Row(array("Motivo", $array['motivo']));
             
             if($array['cveInstitucion']!=134)$pdf->Row(array("Institución Otorgante", utf8_encode($array['nombreInst'])));
             else $pdf->Row(array("Institución Otorgante", utf8_encode($array['otraInstitucionOtorgante'])));
             
             $pdf->Row(array("Fecha de obtención", $array['fechaObtencion']));
             $pdf->Write(5,"\n\n\n");
         }
    }
    
    
    //Producción Académica
    
  if($numProduccion>0 || $numAsCon>0 || $numMaterial>0){  
   $pdf->Ln(10);
   $pdf->SetFont('Helvetica', 'B', 12);
   $pdf->SetFillColor(55,88,115);
   $pdf->SetTextColor(255,255,255);
   $pdf->Cell(150,5,utf8_decode("Producción Académica"),0,1,'C',1);
   $pdf->Ln(5);
   $pdf->SetFont('Helvetica','',11);
   $pdf->SetWidths(array(80, 80));
    $pdf->SetTextColor(0,0,0);
    while($array = mysqli_fetch_array($resProduccion))
    {
        $paraCurriculum = "No";
        
        switch($array['cveTipoProduccion'])
        {
            case 1:
                $tipoProduccion = "Artículo";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("Nombre de la revista",utf8_encode($array['nombreRevistaArticulo'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Editorial",utf8_encode($array['editorialProduccion'])));
                $pdf->Row(array("Volumen",$array['volumenProduccion']));
                $pdf->Row(array("ISSN",$array['ISSN']));   
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                
                break;
            case 2:
                $tipoProduccion = "Artículo Arbitrado";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Descripción", utf8_encode($array['descripcionProduccion'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("Nombre de la revista",utf8_encode($array['nombreRevistaArticulo'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Editorial",utf8_encode($array['editorialProduccion'])));
                $pdf->Row(array("Volumen",$array['volumenProduccion']));
                $pdf->Row(array("ISSN",$array['ISSN']));   
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", $array['proposito']));
                $pdf->Row(array("Dirección electrónica del artículo", $array['urlArticulo'])); 
                break;
            case 3:
                $tipoProduccion = "Artículo en Revista Indexada";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Descripción", utf8_encode($array['descripcionProduccion'])));
                $pdf->Row(array("Estado Actual", utf8_encode(ucwords($array['Estado']))));
                $pdf->Row(array("Nombre de la revista",utf8_encode($array['nombreRevistaArticulo'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Editorial",utf8_encode($array['editorialProduccion'])));
                $pdf->Row(array("Volumen",$array['volumenProduccion']));
                $pdf->Row(array("Índice de registro de revista",$array['indiceRegistroRevista']));
                $pdf->Row(array("ISSN",$array['ISSN']));   
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                $pdf->Row(array("Dirección electrónica del artículo", $array['urlArticulo']));
                
                break;
            case 5:
                $tipoProduccion = "Capítulo de libro";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título del libro", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Estado Actual", utf8_encode(ucwords($array['Estado']))));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Editorial",utf8_encode($array['editorialProduccion'])));
                $pdf->Row(array("Edición",utf8_encode($array['edicionProduccion'])));
                $pdf->Row(array("Tiraje",utf8_encode($array['tiraje'])));
                $pdf->Row(array("ISBN",$array['ISBN']));
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                
                $pdf->Row(array("Título del capítulo",utf8_encode($array['tituloCapitulo'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
               
            case 7:
                $tipoProduccion = "Libro";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título del libro", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Tipo de participación", utf8_encode($array['tipoParticipacion'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Editorial",utf8_encode($array['editorialProduccion'])));
                $pdf->Row(array("Edición",utf8_encode($array['edicionProduccion'])));
                $pdf->Row(array("Número de páginas",$array['numeroPaginas']));
                $pdf->Row(array("Tiraje",$array['tiraje']));
                $pdf->Row(array("ISBN",$array['ISBN']));
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                break;
            case 9:
                $tipoProduccion = "Memorias";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título de la presentación", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Nombre del congreso donde se presentó", utf8_encode($array['nombreCongreso'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Estado",utf8_encode($array['estadoProduccion'])));
                $pdf->Row(array("Ciudad",utf8_encode($array['ciudadProduccion'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                break;
            case 10:
                $tipoProduccion = "Memorias en extenso";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título de la presentación", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Nombre del congreso donde se presentó", utf8_encode($array['nombreCongreso'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Estado",utf8_encode($array['estadoProduccion'])));
                $pdf->Row(array("Ciudad",utf8_encode($array['ciudadProduccion'])));
                $pdf->Row(array("De la página",$array['paginaInicio']));
                $pdf->Row(array("A la página",$array['paginaFin']));
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                $pdf->Row(array("Archivo PDF", $array['archivoPDF']));
                break;
            case 11:
                $tipoProduccion = "Patente";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
                $pdf->Row(array("Título", utf8_encode($array['tituloProduccion'])));
                $pdf->Row(array("Descripción", utf8_encode($array['descripcionProduccion'])));
                $pdf->Row(array("Clasificación Internacional de patentes", utf8_encode($array['clasifPatente'])));
                $pdf->Row(array("Uso", utf8_encode($array['usoPatente'])));
                $pdf->Row(array("Estado Actual", utf8_encode($array['Estado'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Número de registro",$array['numeroRegistroPatente']));
                $pdf->Row(array("Usuario",utf8_encode($array['usuarioPatente'])));
                $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
                $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
                break;
        }
        
        $pdf->Write(5,"\n\n\n");
    }
    
    while($array = mysqli_fetch_array($resMaterial)){
        $tipoProduccion = "Material de apoyo";
        $pdf->Row(array("Tipo", $tipoProduccion));
        $pdf->Row(array("Autor(es)", utf8_encode($array['autorProduccion'])));
        $pdf->Row(array("Título", utf8_encode($array['tituloProduccion'])));
        $pdf->Row(array("Descripción", utf8_encode($array['descripcionProduccion'])));
        $pdf->Row(array("Institución beneficiaria", utf8_encode($array['nombreInst'])));
        $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
        $pdf->Row(array("Fecha de publicación", $array['fechaPublicacion']));
        $pdf->Row(array("Propósito", utf8_encode($array['proposito'])));
        
        
         $pdf->Write(5,"\n\n\n");
    }
    
    while($array = mysqli_fetch_array($resAsCon)){

        $paraCurriculumn = "No";
        
        switch($array['cveTipoProduccion'])
        {
            case 4:
                $tipoProduccion = "Asesoría";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Nombre de estudio o proyecto realizado", utf8_encode($array['nombreProyecto'])));
                $pdf->Row(array("Alcance y objetivos", utf8_encode($array['objetivoProyecto'])));
                $pdf->Row(array("Empresa o dependencia beneficiaria", utf8_encode($array['empresaBeneficiaria'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Fecha de inicio del proyecto", $array['fechaInicio']));
                $pdf->Row(array("Estado Actual", utf8_encode(ucwords($array['Estado']))));
                $pdf->Row(array("Otros investigadores participantes", utf8_encode($array['otrosInvestigadores'])));
                
                break;
            case 6:
                $tipoProduccion = "Consultoría";
                $pdf->Row(array("Tipo", $tipoProduccion));
                $pdf->Row(array("Nombre de estudio o proyecto realizado", utf8_encode($array['nombreProyecto'])));
                $pdf->Row(array("Alcance y objetivos", utf8_encode($array['objetivoProyecto'])));
                $pdf->Row(array("Empresa o dependencia beneficiaria", utf8_encode($array['empresaBeneficiaria'])));
                $pdf->Row(array("País",utf8_encode($array['nombrePais'])));
                $pdf->Row(array("Fecha de inicio del proyecto", $array['fechaInicio']));
                $pdf->Row(array("Estado Actual", utf8_encode(ucwords($array['Estado']))));
                $pdf->Row(array("Otros investigadores participantes", utf8_encode($array['otrosInvestigadores'])));
                $pdf->Row(array("Beneficio económico para la institución", utf8_encode($array['beneficioEconomicoInst'])));
                
                break;
        }
        
        $pdf->Write(5,"\n\n\n");
    }
  }  
    
    //Proyectos de Investigación
    if($numProyecto>0){
      $pdf->Ln(10);
      $pdf->SetFont('Helvetica', 'B', 12);
      $pdf->SetFillColor(55,88,115);
      $pdf->SetTextColor(255,255,255);
      $pdf->Cell(150,5,utf8_decode("Proyectos de investigación"),0,1,'C',1);
      $pdf->Ln(5);
      $pdf->SetFont('Helvetica','',11);
      $pdf->SetWidths(array(80, 80));
       $pdf->SetTextColor(0,0,0);
       while($array = mysqli_fetch_array($resProyecto)){
           $tipoPatrocinador = "Externo";
           $paraCurriculum = "No";
       
           $pdf->Row(array("Título del proyecto", $array['titulo']));
           $pdf->Row(array("Nombre del patrocinador", utf8_encode($array['nombrePatrocinador'])));
           $pdf->Row(array("Fecha de inicio", $array['fechaInicioProyecto']));
           $pdf->Row(array("Fecha de fin del proyecto", $array['fechaFinProyecto']));
           if($array['patrocinadorInterno']==1) $tipoPatrocinador="Interno";
           $pdf->Row(array("Tipo de patrocinador", $tipoPatrocinador));
           $pdf->Row(array("Investigadores participantes", utf8_encode($array['investigadores'])));
           $pdf->Row(array("Alumnos participantes", utf8_encode($array['alumnos'])));
           $pdf->Row(array("Actividades realizadas", utf8_encode($array['actividades'])));
           $pdf->Row(array("Miembros", $array['miembros']));
           $pdf->Row(array("LGACs", $array['LGACs']));
           $pdf->Write(5,"\n\n\n");
           
       }
    }

    //Tutorías
  if($numTutoria>0){
    
      $pdf->Ln(10);
      $pdf->SetFont('Helvetica', 'B', 12);
      $pdf->SetFillColor(55,88,115);
      $pdf->SetTextColor(255,255,255);
      $pdf->Cell(150,5,utf8_decode("Tutorías"),0,1,'C',1);
      $pdf->Ln(5);
      $pdf->SetFont('Helvetica','',11);
      $pdf->SetWidths(array(80, 80));
       $pdf->SetTextColor(0,0,0);
       while($array = mysqli_fetch_array($resTutoria)){
           $terminada = "En proceso";
           $pdf->Row(array("Nombre del estudiante", utf8_encode($array['nombreEstudiante'])));
           $pdf->Row(array("Nivel", utf8_encode($array['estudio'])));
           $pdf->Row(array("Programa Educativo en el que participa", utf8_encode($array['nombrePlan'])));
           $pdf->Row(array("Fecha de inicio", $array['fechaInicio']));
           $pdf->Row(array("Fecha de término", $array['fechaFin']));
           $pdf->Row(array("Tipo de tutelaje", utf8_encode($array['tipo'])));
           if($array['terminado']==1) $terminada = "Concluida";
           $pdf->Row(array("Estado del tutelaje", $terminada));
           $pdf->Write(5,"\n\n\n");
           
       }
  }
    
    
    mysqli_close($link);
    $pdf->Output('doc.pdf','I');
    exit;
  
?>