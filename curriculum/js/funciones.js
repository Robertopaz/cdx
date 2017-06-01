function recargar(){
	location.reload();
}

function valida(e){
	tecla = (document.all) ? e.keyCode : e.which;
	patron = /[0-9]/;
	tecla_final=String.fromCharCode(tecla);
	return patron.test(tecla_final);
}

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

function Validacion() {
	user= document.getElementById('usuario').value;
	pass= document.getElementById('password').value;
	flag= "valida";
	enviar=new XMLHttpRequest;
	enviar.open('POST','datos.php');
	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	enviar.send('u='+user+'&p='+pass+'&flag='+flag);
	enviar.onreadystatechange = function(){
	  	if(enviar.readyState == 4 && enviar.status == 200){
	  		respuesta=enviar.responseText;
	 		if(enviar.responseText=="OK"){
	  			window.location.assign("curriculum.php")
	  		}
	  		else{
	  			verModal('grande','','Ok', 'VERFICA TUS DATOS' );
	  		}
	  	}	  
	}
}


//ESTA FUNCION SE UTILIZA PARA QUE EN LA PRODUCCION ACADEMICA PUEDA MOSTRARSE EL FORM CORRECTO
function elegir(){
	elemento = document.getElementById('selec').value;
	if(elemento=='Artículo'){
		//alert(elemento);
		document.getElementById('art').style.display="block"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Artículo arbitrado'){
		document.getElementById('arb').style.display="block"
		document.getElementById('art').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Artículo en revista indexada'){
		document.getElementById('inde').style.display="block"
		document.getElementById('art').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Asesoría'){
		document.getElementById('ase').style.display="block"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Capítulo de libro'){	
		document.getElementById('capitulolib').style.display="block"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Consultoría'){
		//alert(elemento);
		document.getElementById('consu').style.display="block"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Libro'){
		//alert(elemento);
		document.getElementById('book').style.display="block"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Material de apoyo'){
		//alert(elemento);
		document.getElementById('apoyo').style.display="block"
		document.getElementById('book').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Memorias'){
		//alert(elemento);
		document.getElementById('mem').style.display="block" 
		document.getElementById('apoyo').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('ext').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Memorias en extenso'){
		//alert(elemento);
		document.getElementById('ext').style.display="block"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('pate').style.display="none"
	}if(elemento=='Patente'){
		//alert(elemento);		
		document.getElementById('pate').style.display="block"
		document.getElementById('apoyo').style.display="none"
		document.getElementById('book').style.display="none"
		document.getElementById('ase').style.display="none"
		document.getElementById('arb').style.display="none"
		document.getElementById('inde').style.display="none"
		document.getElementById('art').style.display="none"
		document.getElementById('consu').style.display="none"
		document.getElementById('capitulolib').style.display="none"
		document.getElementById('mem').style.display="none"
		document.getElementById('ext').style.display="none"
	}
}
//FUNCION AJAX PARA ALTA.php
function alta(form){
	// creacion de las variables que se usaran para hacer la funcion de ajax.
	profesor = form.clv.value;
	nombre = form.namec.value;
	gene=form.sex.value;
	clav=form.curp.value;
	civil=form.estado.value;
	pais=form.coun.value;
	enti=form.entidad.value;
	fecbi=form.birth.value;
	phone=form.tel.value;
	telo=form.tel2.value;
	mai=form.correo.value;
	maiadi=form.correo2.value;
	promed=form.respromep.value;
	fecpro=form.fecpromep.value;
	sni=form.resni.value;
	fecsni=form.fecsni.value;
	ext=form.exten.value;

	var flag = "altap"; //bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta

	//creacion de formato de telefono

	//inicio de if anidados, los cuales validan los datos del formulario que son requeridos
	if (profesor!=""){ //clave de profesor
		if (nombre!=""){ //nombre del profesor
			if (clav!=""){ //curp del profesor
				if (fecbi!=""){ //fecha de nacimiento
					if (enti!="") { //entidad de nacimiento
						if (phone!="") { //telefono principal
							if (gene!="2"){ //genero del profesor
								if (mai!="") { //correo del profesor
									expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // caracteres que se van a evaluar al input
									if (expr.test(mai)){//validacion del campo con el formato ejemplo@servicio.com
										enviar=new XMLHttpRequest;
			  							enviar.open('POST','datos.php');
			  							enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			  							enviar.send('clave='+profesor+'&name='+nombre+'&genero='+gene+'&curps='+clav+'&esci='+civil+'&count='+pais+
		  										'&ent='+enti+'&fecnac='+fecbi+'&tel1='+phone+'&telof='+telo+'&mail='+mai+'&mail2='+maiadi+
		  										'&respro='+promed+'&fecp='+fecpro+'&ress='+sni+'&fecs='+fecsni+'&extn='+ext+'&flag='+flag);
		  								enviar.onreadystatechange = function(){
			  								if(enviar.readyState == 4 && enviar.status == 200){
			  									respuesta=enviar.responseText;
		  										if (respuesta =="OK") {
			  										verModal('grande','','Ok', 'Registro Exitoso');
										  			document.getElementById("clv").value = "";
										  			document.getElementById("sex").value = "Selecciona...";
										  			document.getElementById("namec").value = "";
										  			document.getElementById("curp").value = "";
										  			document.getElementById("estado").value = "0";
										  			document.getElementById("coun").value = "146";
										  			document.getElementById("entidad").value = "";
										  			document.getElementById("birth").value = "";
										  			document.getElementById("tel").value = "";
										  			document.getElementById("tel2").value = "";
										  			document.getElementById("correo").value = "";
										  			document.getElementById("correo2").value = "";
										  			document.getElementById("respromep").value = "Selecciona...";
										  			document.getElementById("fecpromep").value = "";
										  			document.getElementById("resni").value = "Selecciona...";
										  			document.getElementById("fecsni").value = "";
										  			document.getElementById("exten").value = "";
												}else{
													verModal('grande','','Ok', respuesta );
												}
											}
										}
									}else{
										verModal('grande','','Ok', 'Verifica tu correo, es incorrecto' );
									}
						  		}else{
						  			verModal('grande','','Ok', 'Verifica tu correo, es incorrecto' );
						  		}
							}else{
								verModal('grande','','Ok', 'Verifica el genero que seleccionaste' );
							}							
						}else{
							verModal('grande','','Ok', 'Verifica tu telefono principal' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica tu entidad de nacimiento' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica tu fecha de nacimiento' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica tu CURP' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica tu nombre' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave del maestro' );
	}
}

//FUNCION AJAX PARA LABORAL.PHP
function laboral(form){
	//declaracion de variables que proceden del form, por medio de su id
	profesor = form.clv.value;
	institu = form.inst.value;
	contrato = form.cont.value;
	nombramiento  =form.nob.value;
	dedica = form.dedi.value;
	depend = form.depen.value;
	academica = form.uni.value;
	fechai = form.fecini.value;
	fechaf = form.fecfin.value;
	cronolog = form.crono.value;
	var flag = "labo"; //bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta

	//validacion de que las fechas sean una antes que la otra. Puede englobar todas los demas if que existen

	if(profesor!="0"){//valida que profesor tenga alguna clave
		if(institu!="0"){//valida que se selecciono alguna clave de institucion
			if(contrato!=""){//se valida el tipo de contrato
				if(nombramiento!=""){//se valida que tenga el nombramiento
					if(fechai!=""){//valida que se tenga una fecha de contrato
						enviar=new XMLHttpRequest;
					  	enviar.open('POST','datos.php');
					  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					  	enviar.send('clave='+profesor+'&ins='+institu+'&contra='+contrato+'&deca='+dedica+'&depenc='+depend+
					  				'&nomt='+nombramiento+'&uniac='+academica+'&fecinic='+fechai+'&fecfinc='+fechaf+
					  				'&cronos='+cronolog+'&flag='+flag);
					  	enviar.onreadystatechange = function(){
					  		if(enviar.readyState == 4 && enviar.status == 200){
					  			respuesta=enviar.responseText;

					  			if (respuesta =="OK") {
						  			verModal('grande','','Ok', 'Registro Exitoso');
						  			document.getElementById("clv").value = "Selecciona el profesor";
						  			document.getElementById("inst").value = "Selecciona la institución";
						  			document.getElementById("cont").value = " ";
						  			document.getElementById("nob").value=" ";
						  			document.getElementById("dedi").value = " ";
						  			document.getElementById("depen").value = " ";
						  			document.getElementById("uni").value = " ";
						  			document.getElementById("fecini").value = " ";
						  			document.getElementById("fecfin").value = " ";
						  			document.getElementById("crono").value = " ";
								}else{
									verModal('grande','','Ok', respuesta );
								}
							}
						}
					}else{
						verModal('grande', '' , 'Ok', 'Verifica la fecha de inicio de contrato');
					}
				}else{
					verModal('grande', '' , 'Ok', 'Verifica el nombramiento');
				}
			}else{
				verModal('grande', '' , 'Ok', 'Verifica el tipo de contración');
			}
		}else{
			verModal('grande', '' , 'Ok', 'Verifica la institución');
		}
	}else{
		verModal('grande', '' , 'Ok', 'Verifica la clave del profesor');
	}
}
//FUNCION AJAX PARA DIRECCION.PHP
function direc(form){
	//declaracion de variables que proceden del form
	profesor = form.clv.value;
	tesis = form.titulo.value;
	nivel= form.nest.value;
	fechai=form.fecini.value;
	fechat= form.fecter.value;
	numa= form.alumno.value;
	esta= form.state.value;
	institucion= form.inst.value;
	nombreOtraInst = form.nueva.value;
	var flag = "direcc";//bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta
	
	//validacion de fecha

	if(profesor!="0"){//validacion de clave de profesor
		if(tesis!=""){//validacion de nombre de tesis
			if(fechai!=""){//validacion de fecha inicio
				if(esta!="0"){//validacion de estado
					if(institucion!="0"){//validacion de institucion
						enviar=new XMLHttpRequest;
	  					enviar.open('POST','datos.php');
	  					enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  					enviar.send('clave='+profesor+'&tit='+tesis+'&niv='+nivel+'&fecinic='+fechai+'&fecfin='+fechat+
	  								'&nalum='+numa+'&resestado='+esta+'&ies='+institucion+'&ot='+nombreOtraInst+'&flag='+flag);
	  					enviar.onreadystatechange = function(){
		  					if(enviar.readyState == 4 && enviar.status == 200){
		  						respuesta=enviar.responseText;
		  						if (respuesta =="OK") {
						  			verModal('grande','','Ok', 'Registro Exitoso');
						  			document.getElementById("clv").value = "Selecciona...";
						  			document.getElementById("titulo").value = "";
						  			document.getElementById("nest").value = "Selecciona...";
						  			document.getElementById("fecini").value="";
						  			document.getElementById("fecter").value="";
						  			document.getElementById("alumno").value = "";
						  			document.getElementById("state").value = "Selecciona...";
						  			document.getElementById("inst").value = "Selecciona...";		  			
								}else{
									verModal('grande','','Ok', respuesta );
								}
							}
						}
					}else{
						verModal('grande','','Ok', 'Verifica la IES' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica el estado' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica la fecha de inicio' );
			}
		}else{
			verModal('grande','','Ok','Verifica el nombre de la tesis')
		}	
	}else{
		verModal('grande','','Ok', 'Verifica la clave del profesor' );
	}
}
//FUNCION AJAX DE DOCENCIA.PHP
function doce(form){
	//declaracion de variables que proceden del form
	profesor = form.clv.value;
	/*peduc=form.pln.value;*/
	nivel=form.nives.value;
	depen=form.inst.value;
	ncurso=form.curs.value;
	fechai=form.fecini.value;
	noal=form.alumnos.value;
	dsemana=form.durar.value;
	haseso=form.mesase.value;
	hcurso=form.hracurso.value;
	var flag = "docencia";//bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta

	if(profesor!="0"){//validacion de clave de profesor		
			if(nivel!="0"){//validacion de nivel de estudio
				if(depen!="0"){//validacion de dependencia
					if(ncurso!="0"){//validacion de nombre de curso
						if(fechai!=""){//validacion de fecha de curso
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','datos.php');
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clave='+profesor+'&nestudio='+nivel+'&dependencia='+depen+'&nombrec='+ncurso+
						  	'&finicio='+fechai+'&numalum='+noal+'&duracion='+dsemana+'&horas='+haseso+'&curso='+hcurso+'&flag='+flag);
						  	enviar.onreadystatechange = function(){
						  		if(enviar.readyState == 4 && enviar.status == 200){
						  			respuesta=enviar.responseText;

						  			if (respuesta =="OK") {
										verModal('grande','','Ok', 'Registro Exitoso');
										document.getElementById("clv").value = "";
										document.getElementById("pln").value = "Selecciona el plan";
										document.getElementById("nives").value="Selecciona el nivel"
										document.getElementById("inst").value = "Selecciona la Institucion";
										document.getElementById("curs").value="";
										document.getElementById("fecini").value="";
										document.getElementById("alumnos").value = "";
										document.getElementById("durar").value = "";
										document.getElementById("mesase").value = "";
										document.getElementById("hracurso").value="";
										
									}else{
										verModal('grande','','Ok', respuesta );
									}
								}
							}
						}else{
							verModal('grande','','Ok', 'Verifica tu fecha de inicio' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica el nombre del curso' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica la Dependencia' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica el nivel de estudio' );
			}		
	}else{
		verModal('grande','','Ok', 'Verifica la clave de profesor' );
	}
}
//FUNCION AJAX DE ESTUDIOS REALIZADOS-ESTUDIOS.PHP
function study(form){
	//declaracion de variables que proceden del form
	profesor = form.clv.value;
	nivelest=form.prog.value;
	estuen=form.en.value;
	zon=form.ar.value;
	disci=form.dis.value;
	pai=form.coun.value;
	institu=form.inst.value;
	oher=form.otra.value;
	finicio=form.fecini.value;
	ffin=form.fecfin.value;
	obtencion=form.tit.value;
	nombreOtraInst = form.otra.value;
	var flag="estud";//bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta
	
	//validar las fechas

	if(profesor!="0"){//validacion de clave de profesor
		if(nivelest!="0"){//validacion de nivel de estudio
			if(estuen!=""){//validacion de donde estudio
				if(zon!="0"){//validacion de area
					if(institu!="0"){//validacion de instituto
						if(finicio!=""){//validacion de inicio
							if(ffin!=""){//validacion de fin de estudio
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','datos.php');
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clave='+profesor+'&nivel='+nivelest+'&estudio='+estuen+'&area='+zon+
							  		'&disciplina='+disci+'&pais='+pai+'&otorgante='+institu+'&otras='+oher+'&fechai='+finicio+
							  		'&fechaf='+ffin+'&obtener='+obtencion+'&ot='+nombreOtraInst+'&flag='+flag);
							  	enviar.onreadystatechange = function(){
							  		if(enviar.readyState == 4 && enviar.status == 200){
							  			respuesta=enviar.responseText;

							  			if (respuesta =="OK") {
							  			verModal('grande','','Ok', 'Registro Exitoso');
							  			document.getElementById("clv").value = "";
							  			document.getElementById("prog").value = "Selecciona el programa";
							  			document.getElementById("en").value=""
							  			document.getElementById("ar").value = "Selecciona el área";
							  			document.getElementById("dis").value="";
							  			document.getElementById("coun").value="Selecciona el pais";
							  			document.getElementById("inst").value = "Selecciona la institucion";
							  			document.getElementById("otra").value = "";
							  			document.getElementById("fecini").value = "";
							  			document.getElementById("fecfin").value="";
							  			document.getElementById("tit").value="";
							  			
										}else{
											verModal('grande','','Ok', respuesta );
										}
									}
								}
							}else{
								verModal('grande','','Ok', 'Verifica fecha fin de estudios' );
							}
						}else{
							verModal('grande','','Ok', 'Verifica fecha inicio de estudios' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica Institución' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica el área' );
				}
			}else{
				verModal('grande','','Ok', 'Verfica estudios' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica nivel de estudios' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de profesor' );
	}
}
//FUNCION AJAX DE GESTION ACADEMICA-GESTION.PHP
function gestionacademica(form){
	//declaracion de variables que proceden del form
	profesor = form.clv.value;
	tip = form.tipo.value;
	carg = form.cargo.value;
	func = form.fun.value;
	orgco = form.cole.value;
	apr = form.apro.value;
	res = form.resul.value;
	ter = form.term.value;
	fecges = form.feciges.value;
	fectges = form.fectges.value;
	fecinfo = form.fecuinfo.value;
	hrs = form.hra.value;
	var flag= "gestion";//bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta
	
	if(profesor!="0"){
		if(tip!="2"){
			if(carg!=""){
				if(apr!="2"){
					if(ter!="2"){
						if(fecges!=""){
							if(fecinfo!=""){
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','datos.php');
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clave='+profesor+'&tipo='+tip+'&cargo='+
							  		carg+'&funcion='+func+'&organo='+orgco+'&respuesta='+apr+'&resultado='+res+'&termi='+ter+
							  		'&iniciog='+fecges+'&fing='+fectges+'&ultimoin='+fecinfo+'&horas='+hrs+'&flag='+flag);
							  	enviar.onreadystatechange = function(){
							  		if(enviar.readyState == 4 && enviar.status == 200){
							  			respuesta=enviar.responseText;

							  			if (respuesta =="OK") {
							  			verModal('grande','','Ok', 'Registro Exitoso');
							  			document.getElementById("clv").value = "";
							  			document.getElementById("tipo").value = "Selecciona el tipo";
							  			document.getElementById("cargo").value = "";
							  			document.getElementById("fun").value = "";
							  			document.getElementById("cole").value = "";
							  			document.getElementById("apro").value = "Opciones";
							  			document.getElementById("resul").value = "";
							  			document.getElementById("term").value ="Opciones";
							  			document.getElementById("feciges").value="";
							  			document.getElementById("fectges").value="";
							  			document.getElementById("fecuinfo").value="";
							  			document.getElementById("hra").value="";

										}else{
											verModal('grande','','Ok', respuesta );
										}
									}
								}
							}else{
								verModal('grande','','Ok', 'Verifica la clave del profesor' );
							}
						}else{
							verModal('grande','','Ok', 'Verifica el tipo de gestion' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica el cargo' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica aprobado' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica Terminada' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica inicio de gestión' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave del profesor' );
	}
}
//FUNCION AJAX DE LGAC-LGAC.PHP
function aplicacion(form){
	profesor= form.clv.value;
	camp=form.campo.value;
	acti=form.act.value;
	horas=form.hrs.value;
	var flag= "app";
	
	if(profesor!="0"){
		if(camp!=""){
			enviar=new XMLHttpRequest;
			enviar.open('POST','datos.php');
			enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			enviar.send('clave='+profesor+'&cam='+camp+'&actividad='+
			  		acti+'&hor='+horas+'&flag='+flag);
			enviar.onreadystatechange = function(){
				if(enviar.readyState == 4 && enviar.status == 200){
					respuesta=enviar.responseText;
					if (respuesta =="OK") {
						verModal('grande','','Ok', 'Registro Exitoso');
						document.getElementById("clv").value = "";
						document.getElementById("campo").value = "";
						document.getElementById("act").value = "";
						document.getElementById("hrs").value = "";
					}else{
						verModal('grande','','Ok', respuesta );
					}
				}
			}
		}else{
			verModal('grande','','Ok', 'Verifica "campo"' );
		}		
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro' );
	}
}
//FUNCION AJAX DE PREMIOS-premios.PHP
function premios(form){
	clva= form.clv.value;
	prem= form.premio.value;
	mot= form.motivo.value;
	obt= form.fecob.value;
	inst= form.insot.value;
	otroa= form.nueva.value;
	var flag="premi";

	if(clva!="0"){		
		if(prem!=""){
			if(obt!=""){
				if(inst!="0"){
					enviar=new XMLHttpRequest;
				  	enviar.open('POST','datos.php');
				  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				  	enviar.send('clave='+clva+'&premio='+prem+'&moti='+mot+'&feob='+obt+'&insti='+inst+'&ot='+otroa+'&flag='+flag);
				  	enviar.onreadystatechange = function(){
				  		if(enviar.readyState == 4 && enviar.status == 200){
				  			respuesta=enviar.responseText;
				  			if (respuesta =="OK") {
								verModal('grande','','Ok', 'Registro Exitoso');
								document.getElementById("clv").value = "Selecciona el profesor";
								document.getElementById("premio").value = " ";
								document.getElementById("motivo").value = " ";
								document.getElementById("fecob").value = " ";
								document.getElementById("insot").value = "Selecciona la institución";	  			
							}else{
								verModal('grande','','Ok', respuesta );
							}
						}
					}
				}else{
					verModal('grande','','Ok', 'Verifica nombre de la Institución' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica fecha de Obtención' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica el nombre del premio' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave del profesor' );
	}
}
//FUNCION AJAX PROYINVESTIGACION-investigacion.PHP
function investigacion(form){
	prof= form.clv.value;
	titu= form.tit.value;
	nompat= form.pat.value;
	fecip= form.fecip.value;
	fecfp= form.fecfp.value;
	patint= form.patroc.value;
	inv= form.inves.value;
	alu= form.alum.value;
	acti= form.act.value;
	miem= form.mien.value;
	lga= form.lgaic.value;
	var flag='proyectos';

	if(prof!="0"){		
		if(titu!=""){
			if(nompat!=""){
				if(fecip!=""){
					if(fecfp!=""){
						if(inv!=""){
							if(alu!=""){
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','datos.php',true);
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clave='+prof+'&titl='+titu+'&nompatro='+nompat+'&fecinpr='+fecip+
							  		'&fecfipr='+fecfp+'&inve='+inv+'&alumno='+alu+'&activ='+acti+'&nomiem='+miem+'&lgac='+lga+
							  		'&patroint='+patint+'&flag='+flag);
							  	enviar.onreadystatechange = function(){
							  		console.log(enviar.readyState);
							  		console.log(enviar.responseText);
							  		if(enviar.readyState == 4 && enviar.status == 200){
							  			respuesta=enviar.responseText;

							  			if (respuesta =="OK") {
								  			verModal('grande','','Ok', 'Registro Exitoso');
								  			document.getElementById("clv").value = "Selecciona el profesor";
								  			document.getElementById("tit").value = " ";
								  			document.getElementById("pat").value = " ";
								  			document.getElementById("fecip").value = " ";
								  			document.getElementById("fecfp").value = " ";	  			
								  			document.getElementById("patroc").value = "Tipo de patrocinador";
								  			document.getElementById("inves").value = " ";
								  			document.getElementById("alum").value = " ";
								  			document.getElementById("act").value = " ";
								  			document.getElementById("mien").value = " ";
								  			document.getElementById("lgaic").value = " ";
										}else{
											verModal('grande','','Ok', respuesta );
										}
									}
								}
							}else{
								verModal('grande','','Ok', 'Verifica Alumnos' );
							}
						}else{
							verModal('grande','','Ok', 'Verifica Investigadores' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica la fecha de fin' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica la fecha de inicio' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica le nombre del patrocinador' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica el titulo' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave del profesor' );
	}
}
//FUNCION AJAX DE ALTA DE TURORIAS-tutoria.PHP
function tutorias (form){
	clav=form.clv.value;
	alum=form.alu.value;
	niv=form.nil.value;
	pro=form.prog.value;
	fecin=form.feci.value;
	ter=form.term.value;
	fecfn=form.fecf.value;
	tip=form.tipo.value;
	var flag = "tutoria";

	if(clav!="0"){		
		if(alum!=""){
			if(niv!="0"){
				if(pro!="0"){
					if(ter!="2"){
						if(fecin!=""){
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','datos.php',true);
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clave='+clav+'&alumno='+alum+'&nivel='+niv+'&carrera='+pro+'&respuesta='
						  		+ter+'&fechai='+fecin+'&fechat='+fecfn+'&tipo='+tip+'&flag='+flag);
						  	enviar.onreadystatechange = function(){
						  		console.log(enviar.readyState);
						  		console.log(enviar.responseText);
						  		if(enviar.readyState == 4 && enviar.status == 200){
						  			respuesta=enviar.responseText;

						  			if (respuesta =="OK") {
							  			verModal('grande','','Ok', 'Registro Exitoso');
							  			document.getElementById("clv").value = "Selecciona el profesor";
							  			document.getElementById("alu").value = " ";
							  			document.getElementById("nil").value = "Selecciona el nivel";
							  			document.getElementById("prog").value = "Selecciona el programa";
							  			document.getElementById("feci").value = " ";	  			
							  			document.getElementById("term").value = "Selecciona la opción";
							  			document.getElementById("fecf").value = " ";
							  			document.getElementById("tipo").value = " ";
									}else{
										verModal('grande','','Ok', respuesta );
									}
								}
							}
						}else{
							verModal('grande','','Ok', 'Verifica tu fecha de inicio' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica Tutoria terminada' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica Programa Educativo' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica Nivel de estudios' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica nombre de alumno' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica tus datos' );
	}
}

