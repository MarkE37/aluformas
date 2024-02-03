"use strict"

function validar(){
	var ci 		= document.formu.ci.value;
	var nombre 	= document.formu.nombre.value;
	var ap 		= document.formu.ap.value;
	var am 		= document.formu.am.value;
	var direccion	= document.formu.direccion.value;
	var telefono	= document.formu.telefono.value;
	var genero	= document.formu.genero.value;

	if (ci == ""){
		alert("Por favor ingrese el numero de ci");
		document.formu.ci.focus();
		return;
	}

	if ((!v1.test(nombre)) || (nombre == "")) {
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	}
	if ((ap == "") && (am == "")) {
		alert("Por favor introduzca un Apellido");
		document.formu.ap.focus();
		return;
	}
	if (direccion == ""){
		alert("Por favor ingrese la direccion");
		document.formu.direccion.focus();
		return;
	}
	if (telefono == ""){
		alert("Por favor ingrese el numero telefono");
		document.formu.telefono.focus();
		return;
	}
	if (genero == ""){
		alert("Por favor seleccione un genero");
		return;
	}


	document.formu.submit();
}
