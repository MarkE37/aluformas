"use strict"

function validar(){
	var direccion 		= document.formu.direccion.value;
	var nombre 	= document.formu.nombre.value;
	var telefono	= document.formu.telefono.value;

    if (direccion == ""){
	      alert("Por favor ingrese una direccion");
	      document.formu.ci.focus();
	      return;
         }

        if (nombre == "") {
            alert("Los nombre son incorrectos o el campo esta vacio");
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
