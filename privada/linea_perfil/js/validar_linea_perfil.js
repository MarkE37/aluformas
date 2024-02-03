"use strict"

function validar(){
	var linea 	= document.formu.linea.value;

	if (linea == "") {
		alert("Los nombre son incorrectos o el campo esta vacio");
		document.formu.linea.focus();
		return;
	  }

	  document.formu.submit();
}
