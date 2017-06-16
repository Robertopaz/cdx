function recargar(){
	location.reload();
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


function articulos(form){
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

	var flag = "art";


	if(cprofesor!="0"){		
		if(auth!=""){
			if(titu!=""){
				if(isn!=""){
					if(fecpubli!=""){
						enviar=new XMLHttpRequest;
					  	enviar.open('POST','datos2.php');
					  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
					  		+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
					  		'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&flag='+flag);
					  	enviar.onreadystatechange = function(){
					  		if(enviar.readyState == 4 && enviar.status == 200){
					  			respuesta=enviar.responseText;
					  			//console.log(respuesta);
					  			if (respuesta =="OK") {
					  				verModal('grande','','Ok', 'Registro Exitoso');
					  				document.getElementById("clv").value = "Selecciona el Profesor";
					  				document.getElementById("aut").value = " ";
					  				document.getElementById("tit").value = " ";
					  				document.getElementById("sta").value = "Selecciona el estado";
					  				document.getElementById("coun").value = "Selecciona el pais";
					  				document.getElementById("revis").value = " ";
					  				document.getElementById("dela").value = " ";
					  				document.getElementById("ala").value = " ";
					  				document.getElementById("ed").value = " ";
					  				document.getElementById("vol").value = " ";
					  				document.getElementById("issn").value = " ";
					  				document.getElementById("fecpub").value = " ";
					  				document.getElementById("propo").value = "Selecciona el proposito";
					  			}else{
					  				verModal('grande','','Ok', 'Error en Inserción de datos' );
								}
							}
						}
					}else{
						verModal('grande','','Ok','Verifica la fecha de publicación');
					}
				}else{
					verModal('grande','','Ok','Verifica la ISNN');
				}
			}else{
				verModal('grande','','Ok','Verifica el titulo del articulo');
			}
		}else{
			verModal('grande','','Ok','Verifica los autores');
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}

function arbitrario(form){
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
	fecpubli1=form.fecpub1.value;
	proposi=form.propo.value;
	descrip=form.descr.value; 		//se agregaron
	direlecart=form.direlec.value;	//se agregaron

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag = "arb";

	if(cprofesor!="0"){		
		if(auth!=""){
			if(titu!=""){
				if(isn!=""){
					if(fecpubli!=""){
						if(direlecart!=""){
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','datos2.php');
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
						  		+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
						  		'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
						  		'&direlectronica='+direlecart+'&flag='+flag);
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
						}else{
							verModal('grande','','Ok','Verifica la dirección eléctronica');
						}
					}else{
						verModal('grande','','Ok','Verifica la fecha de publicación');
					}
				}else{
					verModal('grande','','Ok','Verifica tu ISNN');
				}
			}else{
				verModal('grande','','Ok','Verifica el titulo');
			}
		}else{
			verModal('grande','','Ok','Verifica el nombre del autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}

function indexada(form){
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
	fecpubli1=form.fecpub2.value;
	proposi=form.propo.value;
	descrip=form.descr.value;
	direlecart=form.direlec.value;
	indi=form.ind.value; //se agrego

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="indexa";

	if(cprofesor!="0"){		
		if(auth!=""){
			if(titu!=""){
				if(isn!=""){
					if(fecpubli!=""){
						if(direlecart!=""){
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','datos2.php');
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&respestado='+estadoa+'&lugar='
						  		+pais+'&nrevista='+revista+'&depagi='+delapag+'&apagi='+alapag+'&editorial='+editor+
						  		'&volumen='+volum+'&cissn='+isn+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
						  		'&direlectronica='+direlecart+'&indice='+indi+'&flag='+flag);
						  	enviar.onreadystatechange = function(){
						  		if(enviar.readyState == 4 && enviar.status == 200){
						  			respuesta=enviar.responseText;
						  			//console.log(respuesta);
						  			if (respuesta =="OK") {
						  				verModal('grande','','Ok', 'Registro Exitoso');
						  				document.getElementById("clv").value = "Selecciona el profesor";
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
						  				verModal('grande','','Ok', 'Error en Inserción de datos' );
									}
								}
							}
						}else{
							verModal('grande', '', 'Ok', 'Verifica la dirección eléctronica');
						}
					}else{
						verModal('grande', '', 'Ok', 'Verifica la fecha de publicación');
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica la ISNN');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica el titulo del artículo');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro' );
	}
}

function asesoria(form){
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

	if(cprofesor!="0"){		
		if(estproy!=""){
			if(fechap!=""){
				if(empdep!=""){
					enviar=new XMLHttpRequest;
				  	enviar.open('POST','datos2.php');
				  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				  	enviar.send('clavep='+cprofesor+'&proyecto='+estproy+'&objetivop='+alca+'&empresa='+empdep+
				  		'&fechaproy='+fechap+'&investigadores='+otropart+'&lugar='+pais+'&respestado='+estadoa+'&flag='+flag);
				  	enviar.onreadystatechange = function(){
				  		if(enviar.readyState == 4 && enviar.status == 200){
				  			respuesta=enviar.responseText;
				  			//console.log(respuesta);
				  			if (respuesta =="OK") {
				  				verModal('grande','','Ok', 'Registro Exitoso');
				  				document.getElementById("clv").value = "Selecciona el profesor";
				  				document.getElementById("estu").value = "";
				  				document.getElementById("alc").value = "";
				  				document.getElementById("sta").value = "Selecciona el estado";
				  				document.getElementById("coun").value = "Selecciona el pais";
				  				document.getElementById("emp").value = "";
				  				document.getElementById("fecpro").value = "";
				  				document.getElementById("part").value = "";
				  			}else{
				  				verModal('grande','','Ok', 'Error en Inserción de datos' );
							}	
						}
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica la empresa beneficiaria');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica la fecha de inicio');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el nombre del estudio');
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro' );
	}
}

function caplibro(form){
	cprofesor=form.clv.value;
	autr=form.autlib.value;
	titlibro=form.titlib.value;
	estadoa=form.sta.value;
	edit=form.edi.value;
	edici=form.edic.value;
	fecpubli1 = form.fecpub3.value;
	pais=form.coun.value;
	tiraj=form.tirj.value;
	issbn=form.isbn.value;
	proposi=form.propo.value;
	titcapi=form.titcap.value;
	delapag=form.dela.value;
	alapag=form.ala.value;

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag = "capdlibro";

	if(cprofesor!="0"){		
		if(autr!=""){
			if(titlibro!=""){
				if(fecpubli!=""){
					if(issbn!=""){
						if(proposi!="0"){
							if(titcapi!=""){
								if(delapag!=""){
									if(alapag!=""){
										enviar=new XMLHttpRequest;
									  	enviar.open('POST','datos2.php');
									  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
									  	enviar.send('clavep='+cprofesor+'&autor='+autr+'&titulo='+titlibro+'&respestado='+estadoa+'&editorial='+edit+
									  		'&edicion='+edici+'&fechap='+fecpubli+'&lugar='+pais+'&tiraje='+tiraj+
									  		'&cisbn='+issbn+'&proposito='+proposi+'&tituloc='+titcapi+'&depagi='+delapag+'&apagi='+alapag+'&flag='+flag);
									  	enviar.onreadystatechange = function(){
									  		if(enviar.readyState == 4 && enviar.status == 200){
									  			respuesta=enviar.responseText;

									  			if (respuesta =="OK") {
									  				verModal('grande','','Ok', 'Registro Exitoso');
									  				document.getElementById("coun").value = "Selecciona el pais";
									  				document.getElementById("clv").value = "Selecciona el profesor";
									  				document.getElementById("autlib").value = " ";
									  				document.getElementById("titlib").value = " ";
									  				document.getElementById("propo").value = "Selecciona el Proposito";
									  				document.getElementById("fecpub").value = " ";
									  				document.getElementById("edi").value = " ";
									  				document.getElementById("sta").value = "Selecciona el estado";
									  				document.getElementById("edic").value = " ";
									  				document.getElementById("tirj").value = " ";
									  				document.getElementById("isbn").value = " ";
									  				document.getElementById("dela").value = " ";
									  				document.getElementById("ala").value = " ";
									  				document.getElementById("titcap").value = " ";
									  			}else{
									  				verModal('grande','','Ok', respuesta );
												}
											}
										}
									}else{
										verModal('grande', '', 'Ok', 'Verifica la pagina inicial');
									}
								}else{
									verModal('grande', '', 'Ok', 'Verifica la pagina final');
								}
							}else{
								verModal('grande', '', 'Ok', 'Verifica el titulo del capitulo');
							}
						}else{
							verModal('grande', '', 'Ok', 'Verifica el proposito');
						}
					}else{
						verModal('grande', '', 'Ok', 'Verifica el ISBN');
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica la fecha de publicación');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica el titulo del libro');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}

function consultoria(form){
	cprofesor=form.clv.value;
	pais=form.coun.value;
	estadoa=form.sta.value;
	estproy=form.estu.value;
	alca=form.alc.value;
	empdep=form.emp.value;
	fechap1 = form.fecpro1.value;
	otropart=form.part.value;
	benef=form.bene.value;

	fechap = fechap1.split("/").reverse().join("/");

	var flag="consul";

	if(cprofesor!="0"){
		if(estproy!=""){
			if(fechap!=""){
				if(empdep!=""){
					if(benef!=""){
						enviar=new XMLHttpRequest;
					  	enviar.open('POST','datos2.php');
					  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					  	enviar.send('clavep='+cprofesor+'&proyecto='+estproy+'&objetivop='+alca+'&empresa='+empdep+
					  		'&fechaproy='+fechap+'&investigadores='+otropart+'&lugar='+pais+'&respestado='+estadoa+
					  		'&beconomicos='+benef+'&flag='+flag);
					  	enviar.onreadystatechange = function(){
					  		if(enviar.readyState == 4 && enviar.status == 200){
					  			respuesta=enviar.responseText;
					  			console.log(respuesta);
					  			if (respuesta =="OK") {
					  				verModal('grande','','Ok', 'Registro Exitoso');
					  				document.getElementById("clv").value = "Selecciona el profesor";
					  				document.getElementById("estu").value = " ";
					  				document.getElementById("alc").value = " ";
					  				document.getElementById("sta").value = "Selecciona el estado";
					  				document.getElementById("coun").value = "Selecciona el pais";
					  				document.getElementById("emp").value = " ";
					  				document.getElementById("fecpro").value = " ";
					  				document.getElementById("part").value = " ";
					  				document.getElementById("bene").value=" ";
					  			}else{
					  				verModal('grande','','Ok', respuesta );
								}
							}
						}
					}else{
						verModal('grande','','Ok','Verifica el beneficio economico');
					}
				}else{
					verModal('grande','','Ok','Verifica la empresa beneficiaria');
				}
			}else{
				verModal('grande','','Ok','Verifica la fecha del proyecto');
			}
		}else{
			verModal('grande','','Ok','Verifica el nombre del estudio o proyecto');
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}

function libro(form){
	cprofesor=form.clv.value;
	autr=form.autlib.value;
	titlibro=form.titlib.value;
	estadoa=form.sta.value;
	edit=form.edi.value;
	edici=form.edic.value;
	fecpubli1 = form.fecpub4.value;
	pais=form.coun.value;
	tiraj=form.tirj.value;
	issbn=form.isbn.value;
	proposi=form.propo.value;
	partici=form.parti.value;
	pagis=form.pag.value;

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="lib";

	if(cprofesor!="0"){		
		if(autr!=""){
			if(titlibro!=""){
				if(fecpubli!=""){
					if(issbn!=""){
						if(proposi!="0"){
							if(partici!=""){
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','datos2.php');
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clavep='+cprofesor+'&autor='+autr+'&titulo='+titlibro+'&respestado='+estadoa+'&editorial='+edit+
							  		'&edicion='+edici+'&fechap='+fecpubli+'&lugar='+pais+'&tiraje='+tiraj+
							  		'&cisbn='+issbn+'&proposito='+proposi+'&participacion='+partici+'&paginas='+pagis+'&flag='+flag);
							  	enviar.onreadystatechange = function(){
							  		if(enviar.readyState == 4 && enviar.status == 200){
							  			respuesta=enviar.responseText;

							  			if (respuesta =="OK") {
							  				verModal('grande','','Ok', 'Registro Exitoso');
							  				document.getElementById("coun").value = "Selecciona...";
							  				document.getElementById("clv").value = "Selecciona...";
							  				document.getElementById("autlib").value = " ";
							  				document.getElementById("titlib").value = " ";
							  				document.getElementById("propo").value = "Selecciona...";
							  				document.getElementById("fecpub").value = " ";
							  				document.getElementById("edi").value = " ";
							  				document.getElementById("sta").value = "Selecciona...";
							  				document.getElementById("edic").value = " ";
							  				document.getElementById("tirj").value = " ";
							  				document.getElementById("isbn").value = " ";
							  				document.getElementById("dela").value = " ";
							  				document.getElementById("ala").value = " ";
							  			}else{
							  				verModal('grande','','Ok', respuesta );
										}
									}
								}
							}else{
								verModal('grande', '', 'Ok', 'Verifica la participación');
							}
						}else{
							verModal('grande', '', 'Ok', 'Verifica el proposito');
						}
					}else{
						verModal('grande', '', 'Ok', 'Verifica el ISBN');
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica la fecha de publicación');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica el titulo de libro');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro' );
	}
}

function matap(form){
	cprofesor=form.clv.value;
	auth=form.aut.value;
	titul=form.titu.value;
	descrip=form.descr.value;
	instben=form.insot.value;
	pais=form.coun.value;
	fecpubli1 = form.fecpub5.value;
	proposi=form.propo.value;

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="matsup";

	if(cprofesor!="0"){		
		if(auth!=""){
			if(titul!=""){
				if(instben!="0"){
					if(fecpubli!=""){
						if(proposi!="0"){
							enviar=new XMLHttpRequest;
						  	enviar.open('POST','datos2.php');
						  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titul+
						  		'&institucion='+instben+'&lugar='+pais+'&fechap='+fecpubli+'&proposito='+proposi+'&descripcion='+descrip+
						  		'&flag='+flag);
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
							verModal('grande', '', 'Ok', 'Verifica el proposito');
						}
					}else{
						verModal('grande', '', 'Ok', 'Verifica la fecha de publicación');
					}
				}else{
					verModal('grande', '', 'Ok', 'Verifica la institución');
				}
			}else{
				verModal('grande', '', 'Ok', 'Verifica el titulo');
			}
		}else{
			verModal('grande', '', 'Ok', 'Verifica el autor');
		}
	}else{
		verModal('grande','','Ok', 'Verifica la clave de maestro');
	}
}

function memos(form){
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
	fecpubli1 = form.fecpub6.value;
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
									  	enviar.open('POST','datos2.php');
									  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
									  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titpresen+'&respestado='+estadoa+'&estado='+dir+
									  		'&fechap='+fecpubli+'&lugar='+pais+'&proposito='+proposi+'&depagi='+delapag+'&apagi='+alapag+
									  		'&congreso='+ni+'&ciudad='+dirr+'&flag='+flag);
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

function extenso(form){
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
	fecpubli1 =form.fecpub7.value;
	proposi=form.propo.value;
	archiv=form.fil.value; // este solo se agrega al ajax

	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag="memext";
	if(cprofesor!="0"){		
		if(auth!=""){
			if(titpresen!=""){
				if(ni!=""){
					if(dir!="0"){
						if(delapag!=""){
							if(alapag!=""){
								if(fecpubli!=""){
									if(proposi!=""){
										if(archiv!=""){
											enviar=new XMLHttpRequest;
										  	enviar.open('POST','datos2.php');
										  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
										  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titpresen+'&respestado='+estadoa+'&estado='+dir+
										  		'&fechap='+fecpubli+'&lugar='+pais+'&proposito='+proposi+'&depagi='+delapag+'&apagi='+alapag+
										  		'&congreso='+ni+'&ciudad='+dirr+'&archivo='+archiv+'&flag='+flag);
										  	enviar.onreadystatechange = function(){
										  		if(enviar.readyState == 4 && enviar.status == 200){
										  			respuesta=enviar.responseText;

										  			if (respuesta =="OK") {
										  				verModal('grande','','Ok', 'Registro Exitoso');
										  				document.getElementById("clv").value = "Selecciona...";
										  				document.getElementById("aut").value = " ";
										  				document.getElementById("titpre").value = " ";
										  				document.getElementById("niv").value = " ";
										  				document.getElementById("sta").value = "Selecciona...";
										  				document.getElementById("coun").value = "Selecciona...";
										  				document.getElementById("state").value = " ";
										  				document.getElementById("city").value = " ";
										  				document.getElementById("dela").value = " ";
										  				document.getElementById("ala").value = " ";
										  				document.getElementById("fecpub").value = " ";
										  				document.getElementById("propo").value = "Selecciona...";
										  				document.getElementById("fil").value = " ";
										  			}else{
										  				verModal('grande','','Ok', respuesta );
													}
												}
											}
										}else{
											verModal('grande','','Ok', 'Verifica el enlace del pdf');
										}
									}else{
										verModal('grande','','Ok', 'Verifica el propósito');
									}
								}else{
									verModal('grande','','Ok', 'Verifica la fecha de publicación');
								}
							}else{
								verModal('grande','','Ok', 'Verifica la página final');
							}
						}else{
							verModal('grande','','Ok', 'Verifica la página de inicio');
						}
					}else{
						verModal('grande','','Ok', 'Verifica el estado');
					}
				}else{
					verModal('grande','','Ok', 'Verifica el nombre del congreso');
				}
			}else{
				verModal('grande','','Ok', 'Verifica el titulo de la presentación');
			}
		}else{
			verModal('grande','','Ok', 'Verifica el autor(es)');
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}

function patente (form){
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
	fecpubli1 = form.fecpub8.value;
	proposi=form.propo.value;
	fecpubli = fecpubli1.split("/").reverse().join("/");

	var flag = "pate";

	if(cprofesor!="0"){		
		if(auth!=""){
			if(titu!=""){
				if(paten!=""){
					if(numreg!=""){
						if(fecpubli!=""){
							if(proposi!="0"){
								enviar=new XMLHttpRequest;
							  	enviar.open('POST','datos2.php');
							  	enviar.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
							  	enviar.send('clavep='+cprofesor+'&autor='+auth+'&titulo='+titu+'&descripcion='+descrip+
							  		'&clasificacion='+paten+'&uso='+us+'&respestado='+estadoa+'&lugar='+pais+
							  		'&registro='+numreg+'&usuario='+usua+'&fechap='+fecpubli+'&proposito='+proposi+
							  		'&flag='+flag);
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
								verModal('grande','','Ok', 'Verifica el proposito' );
							}
						}else{
							verModal('grande','','Ok', 'Verifica la fecha de publicación' );
						}
					}else{
						verModal('grande','','Ok', 'Verifica el numero de registro' );
					}
				}else{
					verModal('grande','','Ok', 'Verifica la clasifición' );
				}
			}else{
				verModal('grande','','Ok', 'Verifica el titulo' );
			}
		}else{
			verModal('grande','','Ok', 'Verifica el autor' );
		}
	}else{
		verModal('grande','','Ok', 'Verifica tu clave de maestro' );
	}
}