"use strict"

function validar(){
	var ancho		= document.formu.ancho.value;
	var alto		= document.formu.alto.value;

	if (ancho == "" || !v3.test(ancho)) {
		alert("El ancho del vidrio esta vacio o no tiene datos validos");
		document.formu.ancho.focus();
		return;
   	}
   	if (alto == "" || !v3.test(alto)) {
		alert("El alto del vidrio esta vacio o no tiene datos validos");
		document.formu.alto.focus();
		return;
   	}

	document.formu.submit();
}
