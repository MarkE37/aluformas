"use strict"

function validar(){
	var ci 		= document.formu.ci.value;
	var nombre 	= document.formu.nombre.value;
	var telefono	= document.formu.telefono.value;

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
        if (telefono == "") {
    	   alert("Por favor introduzca un telefono");
    	   document.formu.ap.focus();
    	   return;
        }

         document.formu.submit();
}
