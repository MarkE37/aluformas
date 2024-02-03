"use strict"

function validar(){
	var nombre 	= document.formu.nombre.value;

	if (nombre == "") {
		alert("Los nombre son incorrectos o el campo esta vacio");
		document.formu.nombre.focus();
		return;
	  }

	  document.formu.submit();
}
