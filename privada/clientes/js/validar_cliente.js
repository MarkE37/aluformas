"use strict"

function validar(){
	var direccion 		= document.formu.direccion.value;
	var nombre 	= document.formu.nombre.value;
	var telefono	= document.formu.telefono.value;

	if ((!v1.test(nombre)) || (nombre == "")) {
	    alert("Los nombre son incorrectos o el campo esta vacio");
	    document.formu.nombre.focus();
	    return;
	}
	if (telefono == "") {
		alert("Por favor introduzca un telefono");
		document.formu.ap.focus();
		return;
	}
	if (direccion == ""){
		alert("Por favor ingrese el numero de direccion");
		document.formu.direccion.focus();
		return;
	}
	document.formu.submit();
}
