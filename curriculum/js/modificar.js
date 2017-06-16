/*ProduccionAcademica redirecciona a la pagina de modificar que corresponde al elemento seleccionado*/
function modificarProfesor(parametro){
		window.location.assign('modificarMaestro.php?p='+parametro)
}
function modificarArticulo(parametro){
		window.location.assign('modificarRegistro4.php?f=Articulo&p='+parametro);
}
function modificarArticuloIndexado(parametro){
		window.location.assign('modificarRegistro4.php?f=ArticuloIndexada&p='+parametro);
}
function modificarArticuloArbitrario(parametro){
		window.location.assign('modificarRegistro4.php?f=ArticuloArbitrario&p='+parametro);
}
function modificarCapituloLibro(parametro){
		window.location.assign('modificarRegistro4.php?f=CapituloLibro&p='+parametro);
}
function modificarAsesoria(parametro){
		window.location.assign('modificarRegistro4.php?f=Asesoria&p='+parametro);
}
function modificarConsultoria(parametro){
		window.location.assign('modificarRegistro4.php?f=Consultoria&p='+parametro);
}
function modificarLibro(parametro){
		window.location.assign('modificarRegistro4.php?f=Libro&p='+parametro);
}
function modificarMaterial(parametro){
		window.location.assign('modificarRegistro4.php?f=Material&p='+parametro);
}
function modificarMemorias(parametro){
		window.location.assign('modificarRegistro4.php?f=Memorias&p='+parametro);
}
function modificarMemoriasExtenso(parametro){
		window.location.assign('modificarRegistro4.php?f=MemoriasExtenso&p='+parametro);
}
function modificarPatente(parametro){
		window.location.assign('modificarRegistro4.php?f=Patente&p='+parametro);
}
function modificarDatosLaborales(parametro){
		window.location.assign('modificarLaboral.php?p='+parametro);
}
function modificarDireccionIndividualizada(parametro){
		window.location.assign('modificarDireccion.php?p='+parametro);
}
function modificarDocencia(parametro){
		window.location.assign('modificarDocencia.php?p='+parametro);
}
function modificarEstudios(parametro){
		window.location.assign('modificarEstudios.php?p='+parametro);
}
function modificarGestionAcademica(parametro){
		window.location.assign('modificarRegistro.php?p='+parametro);
}
function modificarLGAC(parametro){
		window.location.assign('modificarRegistro2.php?p='+parametro);
}
function modificarPremio(parametro){
		window.location.assign('modificarRegistro3.php?p='+parametro);
}
function modificarProyectoInvestigacion(parametro){
		window.location.assign('modificarRegistro5.php?p='+parametro);
}
function modificarTutorias(parametro){
		window.location.assign('modificarRegistro6.php?p='+parametro);
}
/********************************Funciones para Update*************************************************/
function memoriasModificar(form, param){
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titpresen=form.titpre.value;
	ni=form.niv.value;
	estadoa=form.sta.value;
	pais=form.coun.value;
	dir=form.state.value;
	dirr=form.city.value;
	delapag=form.dela.value;
	alapag=form.ala.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="mem";

	if(cprofesor!="0"){		
		if(auth!=""){
			if(titpresen!=""){
				if(ni!=""){
					if(dir!="0"){
						if(delapag!=""){
							if(alapag!=""){
								if(fecpubli!=""){
									if(proposi!="0"){
										enviar=new XMLHttpRequest;
									  	enviar.open('POST','updatesRegistros.php');
									  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
									  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titpresen+'&respestado='+estadoa+'&estado='+dir+
									  		'&fechap='+fecpubli+'&lugar='+pais+'&proposito='+proposi+'&depagi='+delapag+'&apagi='+alapag+
									  		'&congreso='+ni+'&ciudad='+dirr+'&flag='+flag+'&p='+param);
									  	enviar.onreadystatechange = function(){
									  		if(enviar.readyState == 4 && enviar.status == 200){
									  			respuesta=enviar.responseText;

									  			if (respuesta =="OK") {
									  				verModal('grande','','Ok', 'Registro Exitoso');
									  				document.getElementById("clv").value = " ";
									  			}else{
									  				verModal('grande','','Ok', respuesta );
												}
											}
										}
									}else{
										verModal('grande', '', 'Ok', 'Verifica el propósito');
									}
								}else{
									verModal('grande', '', 'Ok', 'Verifica la fecha');
								}
							}else{
								verModal('grande', '', 'Ok', 'Verifica la pagina final');
							}
						}else{
							verModal('grande', '', 'Ok', 'Verifica la pagina de inicio');
						}
					}else{
						verModal('grande', '', 'Ok', 'Verifica el estado');
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica el nombre de congreso');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica el titulo de presentación');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro' );
	}
}

function tutoriasModificar(form,param){
	clav=form.clv.value;
	alum=form.alu.value;
	niv=form.nil.value;
	pro=form.prog.value;
	fecin1 = form.feci.value;
	ter=form.term.value;
	fecfn1 = form.fecf.value;
	tip=form.tipo.value;
	fecin = fecin1.split("/").reverse().join("/");
	fecfn = fecfn1.split("/").reverse().join("/");
	var flag = "tutoria";

	if(clav!="0"){		
		if(alum!=""){
			if(niv!="0"){
				if(pro!="0"){
					if(ter!="2"){
						if(fecin!=""){
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','updatesRegistros.php',true);
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clave='+clav+'&alumno='+alum+'&nivel='+niv+'&carrera='+pro+'&respuesta='
						  		+ter+'&fechai='+fecin+'&fechat='+fecfn+'&tipo='+tip+'&flag='+flag+'&p='+param);
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

function investigacionModificar(form,param){
	prof= form.clv.value;
	titu= form.tit.value;
	nompat= form.pat.value;
	fecip1 = form.fecip.value;
	fecfp1 = form.fecfp.value;
	patint= form.patroc.value;
	inv= form.inves.value;
	alu= form.alum.value;
	acti= form.act.value;
	miem= form.mien.value;
	lga= form.lgaic.value;
	fecip = fecip1.split("/").reverse().join("/");
	fecfp = fecfp1.split("/").reverse().join("/");
	var flag='proyectos';

	if(prof!="0"){		
		if(titu!=""){
			if(nompat!=""){
				if(fecip!=""){
					if(fecfp!=""){
						if(inv!=""){
							if(alu!=""){
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','updatesRegistros.php',true);
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clave='+prof+'&titl='+titu+'&nompatro='+nompat+'&fecinpr='+fecip+
							  		'&fecfipr='+fecfp+'&inve='+inv+'&alumno='+alu+'&activ='+acti+'&nomiem='+miem+'&lgac='+lga+
							  		'&patroint='+patint+'&flag='+flag+'&p='+param);
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
function articulosModificar(form,param) {
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titu=form.tit.value;
	estadoa=form.sta.value;
	pais=form.coun.value;
	revista=form.revis.value;
	delapag=form.dela.value;
	alapag=form.ala.value;
	editor=form.ed.value;
	volum=form.vol.value;
	isn=form.issn.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");
	flag="Art"
		enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('p='+param+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
	  	+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
	  	'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&flag='+flag);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			console.log(respuesta);
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = "";
	  				document.getElementById("aut").value = "";
	  				document.getElementById("tit").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("revis").value = "";
	  				document.getElementById("dela").value = "";
	  				document.getElementById("ala").value = "";
	  				document.getElementById("ed").value = "";
	  				document.getElementById("vol").value = "";
	  				document.getElementById("issn").value = "";
	  				document.getElementById("fecpub").value = "";
	  				document.getElementById("propo").value = "Selecciona el proposito";
	  			}else{
	  				verModal('grande','','Ok', respuesta);
				}
			}
		}
}
function articulosArbitradosModificar(form,param) {
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titu=form.tit.value;
	estadoa=form.sta.value;
	pais=form.coun.value;
	revista=form.revis.value;
	delapag=form.dela.value;
	alapag=form.ala.value;
	editor=form.edi.value;
	volum=form.vol.value;
	isn=form.issn.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;
	descrip=form.descr.value; 		//se agregaron
	direlecart=form.direlec.value;	//se agregaron

	fecpubli = fecpubli1.split("/").reverse().join("/");
	flag="arb"
		enviar=new XMLHttpRequest;
		enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
	  		+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
	  		'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
	  		'&direlectronica='+direlecart+'&flag='+flag+"&p="+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			//console.log(respuesta);
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = "";
	  				document.getElementById("aut").value = "";
	  				document.getElementById("tit").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("revis").value = "";
	  				document.getElementById("dela").value = "";
	  				document.getElementById("ala").value = "";
	  				document.getElementById("edi").value = "";
	  				document.getElementById("vol").value = "";
	  				document.getElementById("issn").value = "";
	  				document.getElementById("fecpub").value = "";
	  				document.getElementById("propo").value = "Selecciona el proposito";
	  				document.getElementById("descr").value="";
	  				document.getElementById("direlec").value="";
	  			}else{
	  				verModal('grande','','Ok', 'Error en Inserción de datos'+respuesta );
				}
			}
		}
}
function articulosIndexadosModificar(form,param){
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titu=form.tit.value;
	estadoa=form.sta.value;
	pais=form.coun.value;
	revista=form.revis.value;
	delapag=form.dela.value;
	alapag=form.ala.value;
	editor=form.edi.value;
	volum=form.vol.value;
	isn=form.issn.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;
	descrip=form.descr.value;
	direlecart=form.direlec.value;
	indi=form.ind.value; //se agrego
	fecpubli = fecpubli1.split("/").reverse().join("/");

		var flag="indexa";
		enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
	  		+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
	  		'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
	  		'&direlectronica='+direlecart+'&indice='+indi+'&flag='+flag+"&p="+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			//console.log(respuesta);
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = "";
	  				document.getElementById("aut").value = "";
	  				document.getElementById("tit").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("revis").value = "";
	  				document.getElementById("dela").value = "";
	  				document.getElementById("ala").value = "";
	  				document.getElementById("edi").value = "";
	  				document.getElementById("vol").value = "";
	  				document.getElementById("issn").value = "";
	  				document.getElementById("fecpub").value = "";
	  				document.getElementById("propo").value = "Selecciona el proposito";
	  				document.getElementById("descr").value="";
	  				document.getElementById("direlec").value="";
	  				document.getElementById("ind").value="";
	  			}else{
	  				verModal('grande','','Ok', 'Error en Inserción de datos'+ respuesta );
				}
			}
		}
}
function asesoriaModificar(form, param){
	cprofesor=form.clv.value;
	pais=form.coun.value;
	estadoa=form.sta.value;
	estproy=form.estu.value;
	alca=form.alc.value;
	empdep=form.emp.value;
	fechap1=form.fecpro.value;
	otropart=form.part.value;

	fechap = fechap1.split("/").reverse().join("/");

	var flag="ase";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&proyecto='+estproy+'&objetivop='+alca+'&empresa='+empdep+
	  		'&fechaproy='+fechap+'&investigadores='+otropart+'&lugar='+pais+'&respestado='+estadoa+'&flag='+flag+"&p="+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			//console.log(respuesta);
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = "";
	  				document.getElementById("estu").value = "";
	  				document.getElementById("alc").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("emp").value = "";
	  				document.getElementById("fecpro").value = "";
	  				document.getElementById("part").value = "";
	  			}else{
	  				verModal('grande','','Ok', 'Error en Actualización de datos'+respuesta );
				}
			}
		}
}
function consultoriaModificar(form,param){
		cprofesor=form.clv.value;
		pais=form.coun.value;
		estadoa=form.sta.value;
		estproy=form.estu.value;
		alca=form.alc.value;
		empdep=form.emp.value;
		fechap1=form.fecpro.value;
		otropart=form.part.value;
		benef=form.bene.value;
		fechap = fechap1.split("/").reverse().join("/");

		var flag="consul";
		enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&proyecto='+estproy+'&objetivop='+alca+'&empresa='+empdep+
	  		'&fechaproy='+fechap+'&investigadores='+otropart+'&lugar='+pais+'&respestado='+estadoa+
	  		'&beconomicos='+benef+'&flag='+flag+'&p='+param);
		  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			console.log(respuesta);
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = "";
	  				document.getElementById("estu").value = "";
	  				document.getElementById("alc").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("emp").value = "";
	  				document.getElementById("fecpro").value = "";
	  				document.getElementById("part").value = "";
	  				document.getElementById("bene").value="";
	  			}else{
	  				verModal('grande','','Ok', respuesta );
				}
			}
		}
}

function CapituloLibroModificar(form, param){
	cprofesor=form.clv.value;
	autr=form.autlib.value;
	titlibro=form.titlib.value;
	estadoa=form.sta.value;
	edit=form.edi.value;
	edici=form.edic.value;
	fecpubli1=form.fecpub.value;
	pais=form.coun.value;
	tiraj=form.tirj.value;
	issbn=form.isbn.value;
	proposi=form.propo.value;
	titcapi=form.titcap.value;
	delapag=form.dela.value;
	alapag=form.ala.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag = "capdlibro";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+autr+'&titulo='+titlibro+'&respestado='+estadoa+'&editorial='+edit+
	  		'&edicion='+edici+'&fechap='+fecpubli+'&lugar='+pais+'&tiraje='+tiraj+
	  		'&cisbn='+issbn+'&proposito='+proposi+'&tituloc='+titcapi+'&depagi='+delapag+'&apagi='+alapag+'&flag='+flag+'&p='+param);
	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;

	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("clv").value = "";
	  				document.getElementById("autlib").value = "";
	  				document.getElementById("titlib").value = "";
	  				document.getElementById("propo").value = "Selecciona el Proposito";
	  				document.getElementById("fecpub").value = "";
	  				document.getElementById("edi").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("edic").value = "";
	  				document.getElementById("tirj").value = "";
	  				document.getElementById("isbn").value = "";
	  				document.getElementById("dela").value = "";
	  				document.getElementById("ala").value = "";
	  				document.getElementById("titcap").value = "";
	  			}else{
	  				verModal('grande','','Ok', respuesta );
				}
			}
		}
}
function LibroModificar(form, param){
	cprofesor=form.clv.value;
	autr=form.autlib.value;
	titlibro=form.titlib.value;
	estadoa=form.sta.value;
	edit=form.edi.value;
	edici=form.edic.value;
	fecpubli1=form.fecpub.value;
	pais=form.coun.value;
	tiraj=form.tirj.value;
	issbn=form.isbn.value;
	proposi=form.propo.value;
	partici=form.parti.value;
	pagis=form.pag.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="lib";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+autr+'&titulo='+titlibro+'&respestado='+estadoa+'&editorial='+edit+
	  		'&edicion='+edici+'&fechap='+fecpubli+'&lugar='+pais+'&tiraje='+tiraj+
	  		'&cisbn='+issbn+'&proposito='+proposi+'&participacion='+partici+'&paginas='+pagis+'&flag='+flag+"&p="+param);
	 enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;

	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("coun").value = "Selecciona el pais";
	  				document.getElementById("clv").value = "";
	  				document.getElementById("autlib").value = "";
	  				document.getElementById("titlib").value = "";
	  				document.getElementById("propo").value = "Selecciona el Proposito";
	  				document.getElementById("fecpub").value = "";
	  				document.getElementById("edi").value = "";
	  				document.getElementById("sta").value = "Selecciona el estado";
	  				document.getElementById("edic").value = "";
	  				document.getElementById("tirj").value = "";
	  				document.getElementById("isbn").value = "";
	  				document.getElementById("dela").value = "";
	  				document.getElementById("ala").value = "";
	  			}else{
	  				verModal('grande','','Ok', respuesta );
				}
			}
		}
}
/*Funcion para modificar material*/
function MaterialModificar(form,param){
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titul=form.titu.value;
	descrip=form.descr.value;
	instben=form.insot.value;
	pais=form.coun.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");
	var flag="matsup";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titul+
	  		'&institucion='+instben+'&lugar='+pais+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
	  		'&flag='+flag+'&p='+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = " ";
	  			}else{
	  				verModal('grande','','Ok', respuesta );
				}
			}
		}
}
/*Funcion para modificar patente*/
function PatenteModificar(form,param) {
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titu=form.titl.value;
	descrip=form.descr.value;
	paten=form.intpate.value;
	us=form.use.value;
	estadoa=form.sta.value;
	pais=form.coun.value;
	numreg=form.num.value;
	usua=form.user.value;
	fecpubli1=form.fecpub.value;
	proposi=form.propo.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");
	var flag = "pate";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&descripcion='+descrip+
	  		'&clasificacion='+paten+'&uso='+us+'&respestado='+estadoa+'&lugar='+pais+
	  		'&registro='+numreg+'&usuario='+usua+'&fechap='+fecpubli+'&proposito='+proposi+
	  		'&flag='+flag+'&p='+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			if (respuesta =="OK") {
	  				verModal('grande','','Ok', 'Registro Exitoso');
	  				document.getElementById("clv").value = " ";
	  			}else{
	  				verModal('grande','','Ok', respuesta );
				}
			}
		}
}
/*Modificar Profesor*/
function ProfesorModificar(form,param){
	profesor = form.clv.value;
	nombre = form.namec.value;
	gene=form.sex.value;
	clav=form.curp.value;
	civil=form.estado.value;
	pais=form.coun.value;
	enti=form.entidad.value;
	fecbi1=form.birth.value;
	phone=form.tel.value;
	telo=form.tel2.value;
	mai=form.correo.value;
	maiadi=form.correo2.value;
	promed=form.respromep.value;
	fecpro1 = form.fecpromep.value;
	sni=form.resni.value;
	fecsni1 = form.fecsni.value;
	ext=form.exten.value;

	fecbi = fecbi1.split("/").reverse().join("/");
	fecpro = fecpro1.split("/").reverse().join("/");
	fecsni = fecsni1.split("/").reverse().join("/");

	var flag = "altap";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clave='+profesor+'&name='+nombre+'&genero='+gene+'&curps='+clav+'&esci='+civil+'&count='+pais+
	  		'&ent='+enti+'&fecnac='+fecbi+'&tel1='+phone+'&telof='+telo+'&mail='+mai+'&mail2='+maiadi+
	  		'&respro='+promed+'&fecp='+fecpro+'&ress='+sni+'&fecs='+fecsni+'&extn='+ext+'&flag='+flag+'&p='+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;
	  			if (respuesta =="OK") {
	  			verModal('grande','','Ok', 'Registro Exitoso');
	  			document.getElementById("clv").value = "";
	  			document.getElementById("sex").value = "Selecciona el Genero";
	  			document.getElementById("namec").value = "";
	  			document.getElementById("curp").value = "";
	  			document.getElementById("estado").value = "Estado Civil";
	  			document.getElementById("coun").value = "Selecciona el pais";
	  			document.getElementById("entidad").value = "";
	  			document.getElementById("birth").value ="";
	  			document.getElementById("tel").value="";
	  			document.getElementById("tel2").value="";
	  			document.getElementById("correo").value="";
	  			document.getElementById("correo2").value="";
	  			document.getElementById("respromep").value="";
	  			document.getElementById("fecpromep").value="";
	  			document.getElementById("resni").value="";
	  			document.getElementById("fecsni").value="";
	  			document.getElementById("exten").value="";

				}else{
					verModal('grande','','Ok', respuesta );
				}
			}
		}
}
/*Funcion para modificar datos laborales*/
function DatosLaboralesModificar(form,param){
	profesor = form.clv.value;
	institu = form.inst.value;
	contrato= form.cont.value;
	tipo = form.nomb.value;
	nombramiento=form.nob.value;
	dependencia= form.depen.value;
	academica= form.uni.value;
	fechai1 = form.fecini.value;
	fechaf1 = form.fecfin.value;
	cronolog= form.crono.value;

	fechai = fechai1.split("/").reverse().join("/");
	fechaf = fechaf1.split("/").reverse().join("/");


	var flag = "labo";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clave='+profesor+'&ins='+institu+'&contra='+contrato+'&dep='+dependencia+
	  		'&tnombra='+tipo+'&nomt='+nombramiento+'&uniac='+academica+'&fecinic='+fechai+'&fecfinc='+fechaf+'&cronos='+cronolog+'&flag='+flag+'&p='+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;

	  			if (respuesta =="OK") {
	  			verModal('grande','','Ok', 'Registro Exitoso');
	  			document.getElementById("clv").value = "";
	  			document.getElementById("inst").value = "Selecciona la institución";
	  			document.getElementById("cont").value = "";
	  			document.getElementById("nomb").value="";
	  			document.getElementById("nob").value="";
	  			document.getElementById("depen").value = "";
	  			document.getElementById("uni").value = "";
	  			document.getElementById("fecini").value = "";
	  			document.getElementById("fecfin").value = "";
	  			document.getElementById("crono").value = "";

				}else{
					verModal('grande','','Ok', respuesta );
				}
			}//AQUI PUEDE IR UN verModal('grande','','Ok', respuesta );
		}
}
/*Funcion para modificar direccion individualizada*/
function DireccionIndividualizadaModificar(form,param){
	profesor = form.clv.value;
	tesis = form.titulo.value;
	nivel= form.nest.value;
	fechai1 = form.fecini.value;
	fechat1 = form.fecter.value;
	numa= form.alumno.value;
	esta= form.state.value;
	institucion= form.inst.value;
	otraInst = form.inpOtrInst.value;

	fechai = fechai1.split("/").reverse().join("/")
	fechat = fechat1.split("/").reverse().join("/")

	var flag = "direcc";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clave='+profesor+'&tit='+tesis+'&niv='+nivel+'&fecinic='+fechai+'&fecfin='+fechat+
	  	'&nalum='+numa+'&resestado='+esta+'&ies='+institucion+'&oies='+otraInst+'&flag='+flag+'&p='+param);
	  	enviar.onreadystatechange = function(){
	  		if(enviar.readyState == 4 && enviar.status == 200){
	  			respuesta=enviar.responseText;

	  			if (respuesta =="OK") {
	  			document.getElementById("clv").value = "";
	  			document.getElementById("titulo").value = "";
	  			document.getElementById("nest").value = "Selecciona el nivel";
	  			document.getElementById("fecini").value="";
	  			document.getElementById("fecter").value="";
	  			document.getElementById("alumno").value = "";
	  			document.getElementById("state").value = "Selecciona el estado";
	  			document.getElementById("inst").value = "Selecciona la Institucion";
	  			
	  			verModal('grande','','Ok', 'Registro Exitoso');
	  			
				}else{
					verModal('grande','','Ok', respuesta );
				}
			}//AQUI PUEDE IR UN verModal('grande','','Ok', respuesta );
		}
}
/*Funcion modificar estudios*/
function estudioModificar(form, param) {
	profesor = form.clv.value;
	nivelest=form.prog.value;
	estuen=form.en.value;
	zon=form.ar.value;
	disci=form.dis.value;
	pai=form.coun.value;
	institu=form.inst.value;
	oher=form.otra.value;
	finicio1 = form.fecini.value;
	ffin1 = form.fecfin.value;
	obtencion=form.tit.value;

	finicio = finicio1.split("/").reverse().join("/");
	ffin = ffin1.split("/").reverse().join("/");
	var flag="estud";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clave='+profesor+'&nivel='+nivelest+'&estudio='+estuen+'&area='+zon+
	  		'&disciplina='+disci+'&pais='+pai+'&otorgante='+institu+'&otras='+oher+'&fechai='+finicio+
	  		'&fechaf='+ffin+'&obtener='+obtencion+'&flag='+flag+'&p='+param);
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
			}//AQUI PUEDE IR UN verModal('grande','','Ok', respuesta );
		}
}
/*Funcion modificar gestion academica*/
function gestionacademicaModificar(form,param) {
	profesor = form.clv.value;
	tip = form.tipo.value;
	carg = form.cargo.value;
	func = form.fun.value;
	orgco = form.cole.value;
	apr = form.apro.value;
	res = form.resul.value;
	ter = form.term.value;
	fecges1 = form.feciges.value;
	fectges1 = form.fectges.value;
	fecinfo1= form.fecuinfo.value;
	hrs = form.hra.value;
	fecges = fecges1.split("/").reverse().join("/");
	fectges = fectges1.split("/").reverse().join("/");
	fecinfo = fecinfo1.split("/").reverse().join("/");
	var flag= "gestion";
	enviar=new XMLHttpRequest;
	  	enviar.open('POST','updatesRegistros.php');
	  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	  	enviar.send('clave='+profesor+'&tipo='+tip+'&cargo='+
	  		carg+'&funcion='+func+'&organo='+orgco+'&respuesta='+apr+'&resultado='+res+'&termi='+ter+
	  		'&iniciog='+fecges+'&fing='+fectges+'&ultimoin='+fecinfo+'&horas='+hrs+'&flag='+flag+'&p='+param);
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
}
function docenciaModificar(form,param){
	profesor = form.clv.value;
	//peduc=form.pln.value;
	nivel=form.nives.value;
	depen=form.inst.value;
	ncurso=form.curs.value;
	fechai1 = form.fecini.value;
	noal=form.alumnos.value;
	dsemana=form.durar.value;
	haseso=form.mesase.value;
	hcurso=form.hracurso.value;
	fechai = fechai1.split("/").reverse().join("/");
	var flag = "docencia";//bandera que se manda por metodo post a el documento datos.php, para poder entrar en la insercion correcta
	if(profesor!="0"){//validacion de clave de profesor
			if(nivel!="0"){//validacion de nivel de estudio
				if(depen!="0"){//validacion de dependencia
					if(ncurso!="0"){//validacion de nombre de curso
						if(fechai!=""){//validacion de fecha de curso
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','updatesRegistros.php');
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clave='+profesor+'&nestudio='+nivel+'&dependencia='+depen+'&nombrec='+ncurso+
						  	'&finicio='+fechai+'&numalum='+noal+'&duracion='+dsemana+'&horas='+haseso+'&curso='+hcurso+'&flag='+flag+'&p='+param);
						  	enviar.onreadystatechange = function(){
						  		if(enviar.readyState == 4 && enviar.status == 200){
						  			respuesta=enviar.responseText;

						  			if (respuesta =="OK") {
										verModal('grande','','Ok', 'Registro Exitoso');
										document.getElementById("clv").value = "";
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
function aplicacionModificar(form,param){
	profesor= form.clv.value;
	camp=form.campo.value;
	acti=form.act.value;
	horas=form.hrs.value;
	var flag= "app";
	if(camp!=""){
			enviar=new XMLHttpRequest;
			enviar.open('POST','updatesRegistros.php');
			enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			enviar.send('clave='+profesor+'&cam='+camp+'&actividad='+
			  		acti+'&hor='+horas+'&flag='+flag+"&p="+param);
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
}
function premioModificar(form,param){
	clva= form.clave.value;
	prem= form.premio.value;
	mot= form.motivo.value;
	obt1 = form.fecob.value;
	inst= form.insot.value;
	otroa= form.nueva.value;
	obt = obt1.split("/").reverse().join("/");
	var flag="premi";

	if(clva!="0"){		
		if(prem!=""){
			if(obt!=""){
				if(inst!="0"){
					enviar=new XMLHttpRequest;
				  	enviar.open('POST','updatesRegistros.php');
				  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				  	enviar.send('clave='+clva+'&premio='+prem+'&moti='+mot+'&feob='+obt+'&insti='+inst+'&ot='+otroa+'&flag='+flag+'&p='+param);
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