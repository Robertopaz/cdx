parametro="";
function Busqueda() {
	valor = document.getElementById('parametroBusqueda').value; //SELECT
	parametro = document.getElementById('cve-nom').value; //INPUT DE NOMBRE O CLAVE

	if (parametro!="") { //IF QUE VALIDAD QUE ESTE MANDANDO CLAVE VACIA CON EL PARAMETRO DEL SELECT
		cuerpoConsulta=document.getElementById('cuerpoConsulta');
		enviar=new XMLHttpRequest;
		enviar.open('POST','consultaCurriculum.php');
		enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		if (valor == "Curriculum completo") {
			enviar.send('flag='+'Completo');
			enviar.onreadystatechange = function(){
				if(enviar.readyState == 4 && enviar.status == 200){
			  		respuesta=enviar.responseText;
			  		alert(respuesta)
			  		cuerpoConsulta.innerHTML=profesorHtml+articulosHtml;
		  		}
		 }
	}

	else if (valor=="Profesor") { //SELECT PROFESOR CON EXPEDIENTE
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
		  	if(enviar.readyState == 4 && enviar.status == 200){
		  		respuesta=enviar.responseText;
		  		cuerpoConsulta.innerHTML=respuesta;

	  		}
	  	}
	}
	else if (valor=="Articulos") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Asesorias") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Consultoria") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta
	  	}
	  }
	}
	else if (valor=="Datos laborales") {
		enviar.send('flag='+'Datos-laborales'+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Direccion individualizada") {
		enviar.send('flag='+'Direccion-individualizada'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Docencia") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Estudios") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Gestion academica") {
		enviar.send('flag='+'Gestion-academica'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="LGAC") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Libros") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Material de apoyo") {
		enviar.send('flag='+'Material-apoyo'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Memorias") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Patente") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Premio") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Proyecto de investigacion") {
		enviar.send('flag='+'Proyecto-investigacion'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}       
	else if (valor=="Tutoria") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta
	  	}
	  }
	}
	else{
		alert("Error");
	}
}
else{
	alert("Ingrese clave del profesor")
}
}
function generarPDF() {
	window.open('pdf/curriculum.php?claveProfesor='+parametro)

}
function modificar(parametro) {
	cuerpoConsulta=document.getElementById('cuerpoConsulta');
	enviar=new XMLHttpRequest;
	enviar.open('POST','modificarElemento.php');
	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	if (valor=="Profesor") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;

	  	}
	  }
	}
	else if (valor=="Articulos") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Asesorias") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Consultoria") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta)
	  	}
	  }
	}
	else if (valor=="Datos laborales") {
		enviar.send('flag='+'Datos-laborales'+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta);
	  	}
	  }
	}
	else if (valor=="Direccion individualizada") {
		enviar.send('flag='+'Direccion-individualizada'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Docencia") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Estudios") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta);
	  	}
	  }
	}
	else if (valor=="Gestion academica") {
		enviar.send('flag='+'Gestion-academica'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="LGAC") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta);
	  	}
	  }
	}
	else if (valor=="Libros") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Material de apoyo") {
		enviar.send('flag='+'Material-apoyo'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta);
	  	}
	  }
	}
	else if (valor=="Memorias") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log( respuesta);
	  	}
	  }
	}
	else if (valor=="Patente") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Premio") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}
	else if (valor=="Proyecto de investigacion") {
		enviar.send('flag='+'Proyecto-investigacion'+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta);
	  	}
	  }
	}       
	else if (valor=="Tutoria") {
		enviar.send('flag='+valor+'&p='+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta)
	  	}
	  }
	}
	else{
		console.log("Error");
	}

}