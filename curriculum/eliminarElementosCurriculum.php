<?php 
		include 'conex.php';
	$con=Conectarse();
	$flag=$_POST['flag'];
	$parametro=$_POST['p'];
	if ($flag=="Completo") {
				echo $flag;
	}
	elseif ($flag=="Profesor") {
		echo $sql="DELETE FROM profesor WHERE cveProfesor='".$parametro."' OR nombre like '%".$parametro."%'";
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		

	}
	elseif ($flag=="Articulos") {
		$sql="DELETE FROM produccionacademica WHERE cveProduccionAcademica='".$parametro."';";
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		 
		
	}
	elseif ($flag=="Asesorias") {
		$sql="DELETE FROM asesoriaconsultoria WHERE cveAsesoriaConsultoria=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Consultoria") {
		$sql="DELETE FROM asesoriaconsultoria WHERE cveAsesoriaConsultoria=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Datos-laborales") {
		$sql="DELETE FROM datoslaborales WHERE cveDatosLaborales=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Direccion-individualizada") {
		$sql="DELETE FROM direccionindividualizada WHERE cveDireccionInd=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Docencia") {
		$sql="DELETE FROM Docencia WHERE cveDocencia=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Estudios") {
		
		$sql="DELETE FROM estudio WHERE cveEstudio=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Gestion-academica") {
		$sql="DELETE FROM gestionacademica WHERE cveGestionAcademica=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="LGAC") {
		$sql="DELETE FROM LGAC WHERE cveGAC=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Libros") {
		echo $sql="DELETE FROM produccionacademica WHERE cveProduccionAcademica=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Material-apoyo") {
		echo $sql="DELETE FROM produccionacademica WHERE cveProduccionAcademica=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Memorias") {
		echo $sql="DELETE FROM produccionacademica WHERE cveProduccionAcademica=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Patente") {
		echo $sql="DELETE FROM produccionacademica WHERE cveProduccionAcademica=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Premio") {
		echo $sql="DELETE FROM premio WHERE cvePremio=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
		
	}
	elseif ($flag=="Proyecto-investigacion") {
		echo $sql="DELETE FROM proyectoinvestigacion WHERE cveProyectoInvestigacion=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}
	elseif ($flag=="Tutoria") {
		echo $sql="DELETE FROM tutoria WHERE cveTutoria=".$parametro;
		if($con->query($sql)===TRUE){
			echo "Eliminado";

		}
		else{
			echo "Error:". $con->error;
		}
	}else{
		echo "error";
	}

 ?>		}
		}
