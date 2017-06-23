function verModal(tipo, texto, textoBtn, parrafo) {
	bgNegro = document.getElementById('bg-negro');
	modal = document.getElementById('modal');

	bgNegro.classList.add('verModal');
	modal.classList.add('verModal');

	if (tipo == 'chico') {
		parrafo = ""
	}else{
		parrafo = parrafo;
	}

	modal.innerHTML="<h1>"+texto+"</h1>"+
		"<p>"+parrafo+"</p>"+
		"<div class='div4'></div>"+
		"<button onclick='cerrar()' class='div4 menta'>"+textoBtn+"</button>";

	modal.classList.add(tipo);

	tipo = tipo;
}

function cerrar () {
	bgNegro.classList.remove('verModal');
	modal.classList.remove('verModal');

	if (modal.classList.contains('chico')) {
		modal.classList.remove('chico');
	}else{
		modal.classList.remove('grande');
	}
}


valor="";
function busquedaEliminar() {
	valor=document.getElementById('parametroBusqueda').value;
	parametro=document.getElementById('cve-nom').value;
	cuerpoConsulta=document.getElementById('cuerpoConsulta');
		enviar=new XMLHttpRequest;
	enviar.open('POST','eliminarCurriculum.php');
	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	if (valor=="Curriculum completo") {
		enviar.send('flag='+'Completo');
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		alert(respuesta)
	  		cuerpoConsulta.innerHTML=profesorHtml+articulosHtml;
	  	}
	  }
	}
	else if (valor=="Profesor") {
		enviar.send('flag='+valor+"&p="+parametro);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		alert(respuesta);

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
	  		console.log(respuesta);

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
/*Este archivo contiene las funciones de eliminar, la funcion utiliza AJAX el cual envia como parametro el tipo de elemento
que se va a elimimar y la cve con la que esta registrada*/

function eliminar(idEliminar) {
	parametro=document.getElementById('cve-nom').value;
	cuerpoConsulta=document.getElementById('cuerpoConsulta');

	if(confirm("Seguro que desea continuar?")){

	enviar=new XMLHttpRequest;
	enviar.open('POST','eliminarElementosCurriculum.php');
	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	if(valor=="Profesor"){
		enviar.send('flag=Profesor'+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		if (respuesta=="Ok") {
	  			alert("Entro")

	  			cargarProfesores()
	  		}
	  		else{
	  			cargarProfesores()
	  			alert(respuesta)
	  		}
	  }
	}

}

	else if (valor=="Articulos") {
		
		enviar.send('flag='+valor+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		console.log(respuesta)
	  	}
	  }
	}
	else if (valor=="Asesorias") {
		enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Consultoria") {
		enviar.send('flag='+valor+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta
	  	}
	  }
	}
	else if (valor=="Datos laborales") {
		enviar.send('flag='+'Datos-laborales'+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Direccion individualizada") {
		enviar.send('flag='+'Direccion-individualizada'+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Docencia") {
		enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Estudios") {
		enviar.send('flag='+valor+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Gestion academica") {
		enviar.send('flag='+'Gestion-academica'+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="LGAC") {
		enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Libros") {
		enviar.send('flag='+valor+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		if(respuesta=='Eliminado'){
	  			verModal('grande','','Ok', 'Seguro que deseas borrar');
	  		}
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Material de apoyo") {
		enviar.send('flag='+'Material-apoyo'+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Memorias") {
		enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML= respuesta;
	  	}
	  }
	}
	else if (valor=="Patente") {
		enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Premio") {
		enviar.send('flag='+valor+"&p="+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}
	else if (valor=="Proyecto de investigacion") {
		enviar.send('flag='+'Proyecto-investigacion'+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		cuerpoConsulta.innerHTML=respuesta;
	  	}
	  }
	}       
	else if (valor=="Tutoria") {
		enviar.send('flag='+valor+'&p='+idEliminar);
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

}
function cargarProfesores(){
	listaProfesores= document.getElementById('cve-nom');
	listaProfesores.innerHTML=""
	enviar=new XMLHttpRequest;
	valor="lista"
	idEliminar="0"
	enviar.open('POST','consultaCurriculum.php');
	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	enviar.send('flag='+valor+'&p='+idEliminar);
		enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	  		listaProfesores.innerHTML=respuesta
	  	}
	  }
	location.reload()
}